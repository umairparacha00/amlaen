<?php

	namespace App\Http\Controllers;

	use App\Balance;
	use App\Transaction;
	use App\User;
	use Illuminate\Http\Request;

	class TransferGroupBalanceController extends Controller
	{

		public function create()
		{
			$transactions = Transaction::where([
				['user_id' , '=', current_user()->id],
				['balance_field', '=', 'group_balance']
			])
				->orderBy('id', 'desc')
				->paginate(8);
			return view('transactions.transfer-balance', compact('transactions'));
		}

		public function getGroupBalanceFee(Request $request, $feePercentage = 0.25)
		{
			$value = $request->validate([
				'amount' => ['required', 'numeric', 'min:5'],
			]);
			$amount = $value['amount'];
			$fee = $amount * $feePercentage / 100;
			$array = ['amount' => $amount, 'fee' => $fee];
			return response()->json($array);
		}



		private function remainingGroupBalanceAfterTransfer($amount)
		{
			$currentGroupBalance = current_user()->balance->fresh();
			$freshBalance = $currentGroupBalance->group_balance;
			return $freshBalance - $amount;

		}


		private function MainBalanceAfterReceiving($amount)
		{
			$currentMainBalance = current_user()->balance->main_balance;
			return $currentMainBalance + $amount;
		}

		private function MallBalanceAfterReceiving($amount)
		{
			$currentMallBalance = current_user()->balance->mall_balance;
			return $currentMallBalance + $amount;
		}

		public function store(Request $request, User $user, Balance $balance, $groupBalanceFeePercentage = 0.03)
		{
			// Transfer Group Balance  input Validations
			$data = $request->validate([
				'amount' => ['required', 'numeric', 'min:5']
			]);

			//Transfer Group Balance Errors

			$sharingGroupBalanceFee = $data['amount'] * $groupBalanceFeePercentage /100;
			if ($data['amount'] < 5) {
				return back()->with('toast_error', 'Cannot transfer less then 5 points');
			}


			$totalForSharingGroupBalance = $data['amount'] + $sharingGroupBalanceFee + 1;
			if ($totalForSharingGroupBalance > current_user()->balance->group_balance) {
				return back()->with('toast_error', 'Your entered amount exceeded then your balance!');
			}

			$totalSharingGroupBalance = $request['amount'] + $sharingGroupBalanceFee + 1;
			if ($totalSharingGroupBalance > current_user()->balance->group_balance) {
				return back()->with('toast_error', 'You Should have $1 in the group balance reserved as per company rule!');
			}


			// Transaction for debit from group balance fee

			$user->addTransaction('group_balance',
				'Debit',
				$sharingGroupBalanceFee,
				$balance->currentGroupBalance(),
				$this->remainingGroupBalanceAfterTransfer($sharingGroupBalanceFee),
				'Amount ($' . $sharingGroupBalanceFee.') fees applied for transfer of amount ('. $data['amount'] .') By (' . current_user()->id . ')',
				current_user()->id);
			$user->updateGroupBalance(current_user()->id, $this->remainingGroupBalanceAfterTransfer($sharingGroupBalanceFee));


			// Transaction for debit from group balance

			$user->addTransaction('group_balance',
				'Debit',
				$data['amount'],
				$balance->currentGroupBalance(),
				$this->remainingGroupBalanceAfterTransfer($data['amount']),
				'Amount $'.$request['amount'] .' transferred from group balance to main balance By (' . current_user()->id . ')',
				current_user()->id
			);

			$user->updateGroupBalance(current_user()->id, $this->remainingGroupBalanceAfterTransfer($data['amount']));
			// Transaction for credit from group balance into Main Balance

			$ninetyPerOfAmount = $request['amount'] * 90 /100;
			$user->addTransaction('main_balance',
				'Credit',
				$ninetyPerOfAmount,
				$balance->currentMainBalance(),
				$this->MainBalanceAfterReceiving($ninetyPerOfAmount),
				'Amount transferred from group earning By (' . current_user()->id . ')',
				current_user()->id
			);

			$user->updateMainBalance(current_user()->id, $this->MainBalanceAfterReceiving($ninetyPerOfAmount));

			// Transaction for credit from group balance into Mall Balance

			$tenPerOfAmount = $request['amount'] * 10 /100;
			$user->addTransaction('mall_balance',
				'Credit',
				$tenPerOfAmount,
				$balance->currentMallBalance(),
				$this->MallBalanceAfterReceiving($tenPerOfAmount),
				'Amount transferred to reward balance it is 10% of $'. $request['amount'] .' By (' . current_user()->id . ')',
				current_user()->id
			);

			$user->updateMallBalance(current_user()->id, $this->MallBalanceAfterReceiving($tenPerOfAmount));

			return back()->with('toast_success', 'Amount transferred to Main and Mall Balances');
		}

	}
