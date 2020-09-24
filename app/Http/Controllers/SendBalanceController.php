<?php

	namespace App\Http\Controllers;

	use App\Balance;
	use App\Transaction;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Validation\ValidationException;

	class SendBalanceController extends Controller
	{
		public function create()
		{
			$transactions = Transaction::where([
				['user_id' , '=', current_user()->id],
				['balance_field', '=', 'balance_shared']
				])
				->orderBy('id', 'desc')
				->paginate(8);
			return view('transactions.send-balance', compact('transactions'));
		}

		public function store(Request $request, User $user, Balance $balance, Transaction $transactions, $sharingBalanceFeePercentage = 2.6)
		{
			//Sharing Balance Errors
			$sharingBalanceFee = $request['amount'] * $sharingBalanceFeePercentage / 100;
			if ($request['amount'] < 5) {
				return back()->with('toast_error', 'Cannot share balance less then $5');
			}


			if ($request['amount'] > current_user()->balance->main_balance) {
				return back()->with('toast_error', 'Your entered amount exceeded then your balance!');
			}


			$totalSharingBalance = $request['amount'] + $sharingBalanceFee + 1;
			if ($totalSharingBalance > current_user()->balance->main_balance) {
				return back()->with('toast_error', 'You Should have $1 in the main balance reserved as per company rule!');
			}


			// Transaction for Sharing Balance debit

			$user->addTransaction('balance_shared',
				'Debit',
				$request['amount'],
				$balance->currentMainBalance(),
				$this->remainingBalanceAfterSharedBalance($request['amount']),
				'Transferred to ' . $request['username'] . ' By (' . current_user()->id . ')',
				current_user()->id);

			// Update the Main Balance of the sender
			$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterSharedBalance($request['amount']));

			$current_transaction = Transaction::where([
				['user_id', '=', current_user()->id],
				['transaction_amount', '=', $request['amount']]
			])->latest()->first();

			// Transaction for the shared balance fee

			$user->addTransaction('balance_shared_fees',
				'Debit',
				$sharingBalanceFee,
				$balance->currentMainBalance(),
				$this->remainingBalanceAfterSharedBalanceFee($sharingBalanceFee),
				'	System applied fee (' . $sharingBalanceFee . ') for transaction id (' . $current_transaction->id . ') By (' . current_user()->id . ')',
				current_user()->id);

			$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterSharedBalanceFee($sharingBalanceFee));

			// Transaction for the receiver of Balance Credit

			$receiverInfo = $user->where('username', $request['username'])->first();
			$transactions->createTransaction(
				$receiverInfo->id,
				'Credit',
				$request['amount'],
				$this->updatedMainBalanceOfReceiver($request['amount'], $receiverInfo->id),
				$receiverInfo->balance->main_balance,
				'$' .$request['amount'] . ' received from ' . current_user()->username,
				'main_balance'
			);

			$balance->updateMainBalance($receiverInfo->id, $this->updatedMainBalanceOfReceiver($request['amount'], $receiverInfo->id));


			return back()->with('toast_success', 'You have shared ' . $request['amount'] . ' points to ' . $request['username'] . ' Successfully!');
		}

		private function remainingBalanceAfterSharedBalance($totalSharingBalance)
		{
			$currentMainBalance = current_user()->balance->main_balance;
			return $currentMainBalance - $totalSharingBalance;
		}

		private function remainingBalanceAfterSharedBalanceFee($sharingBalanceFee)
		{
			$currentMainBalance = current_user()->balance->fresh();
			$currentMainBalanceFresh = $currentMainBalance->main_balance;
			return $currentMainBalanceFresh - $sharingBalanceFee;
		}

		private function updatedMainBalanceOfReceiver($transaction_amount, $receiverInfoId)
		{
			$balance = Balance::where('user_id', $receiverInfoId)->first();
			$currentMainBalance = $balance->main_balance;
			return $currentMainBalance + $transaction_amount;
		}

		public function getShareBalanceFee(Request $request, User $user, $feePercentage = 2.6)
		{
			$value = $this->validator($request->all())->validate();
			$userInfo = $user->where('username', $value['username'])->first();
			if ($userInfo === null) {
				throw ValidationException::withMessages([
					'username' => 'Username dose not exists'
				]);
			} else {
				$name = $userInfo->name;
				$amount = $value['amount'];
				$fee = $amount * $feePercentage / 100;
				$array = ['fullName' => $name, 'amount' => $amount, 'fee' => $fee];
				return response()->json($array);
			}
		}

		protected function validator(array $data)
		{
			$message = [
				'username.regex' => 'Username should only contain alphabets,numbers and underscores',
			];
			return Validator::make($data, [
				'amount' => ['required', 'numeric', 'max:1000'],
				'username' => ['required', 'regex:/^([A-Za-z0-9\_]+)$/']
			], $message);
		}
	}
