<?php

	namespace App\Http\Controllers;

	use App\Balance;
	use App\Fee;
	use App\Mail\PinCreated;
	use App\Pin;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Mail;
	use Illuminate\Support\Facades\Validator;

	class PinsController extends Controller
	{
		public function show(Request $request)
		{
			$userPinsData = Pin::where('user_id', current_user()->id)->orderBy('id', 'desc')->get();
			return view('pins.create', compact('userPinsData'));
		}

		public function store(Request $request, Pin $pin, User $user, Balance $balance, $pinFeePercentage = 0.25)
		{
			// Pin input Validations
			$data = $request->validate([
				'amount' => ['required', 'numeric'],
				'pl_pin' => ['required', 'numeric']
			]);

			if ($data['pl_pin'] !== $user['pl_pin']){
				return back()->with('toast_error', 'Personal pin does not match');
			}
			//Pin Errors
			$pinFee = $data['amount'] * $pinFeePercentage / 100;
			if ($data['amount'] < 5) {
				return back()->with('toast_error', 'Cannot make a pin less then 5 points');
			}

			if ($request['amount'] > current_user()->balance->main_balance) {
				return back()->with('toast_error', 'Your entered amount exceeded then your balance!');
			}

			$totalForPinCreation = $data['amount'] + $pinFee + 1;
			if ($totalForPinCreation > current_user()->balance->main_balance) {
				return back()->with('toast_error', 'You Should have $1 in the main balance reserved as per company rule!');
			}

			// Creating pin
			$actualPin = $this->createPinString();

			// Transaction for pin debit

			$user->addTransaction('main_balance',
				'debit',
				$data['amount'],
				$balance->currentMainBalance(),
				$this->remainingBalanceAfterPin($data['amount']),
				'Pin Created by (' . current_user()->id . ')',
				current_user()->id);
			$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterPin($data['amount']));

			// Transaction for created pin fee

			$user->addTransaction('main_balance',
				'debit',
				$pinFee,
				$balance->currentMainBalance(),
				$this->remainingBalanceAfterPinFee($pinFee),
				'Pin Fee by (' . current_user()->id . ')',
				current_user()->id);
			$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterPinFee($pinFee));

			$pin->createPin($data, $actualPin);


//		Mail::to(current_user()->email)->send(new PinCreated($pin));

			return back()->with('toast_success', 'Pin Created Successfully!');
		}

		protected function createPinString()
		{
			$startingString = 'AML';
			$randomNumber = rand(100000000000, 9999999999999);
			return $actualPin = $startingString . $randomNumber;
		}

		protected function remainingBalanceAfterPin($pinAmount)
		{
			$currentMainBalance = current_user()->balance->main_balance;
			return $currentMainBalance - $pinAmount;
		}

		protected function remainingBalanceAfterPinFee($pinFee)
		{
			$currentMainBalance = current_user()->balance->fresh();
			$currentMainBalanceFresh = $currentMainBalance->main_balance;
			return $currentMainBalanceFresh - $pinFee;
		}

		/**
		 * @param Request $request
		 * @param Fee $fee
		 * @return \Illuminate\Http\JsonResponse
		 */
		public function getpinfee(Request $request, Fee $fee)
		{
			$value = $this->validator($request->all())->validate();
			$pinFeePrice = $fee->where('fee_name', 'pin_creation')->first();
			$amount = $value['amount'];
			$pinfee = $amount * $pinFeePrice['fee'] / 100;
			$array = ['amount' => $amount, 'fee' => $pinfee];
			return response()->json($array);
		}

		// Validation for Share Balance

		protected function validator(array $data)
		{
			return Validator::make($data, [
				'amount' => ['required', 'numeric'],
				'pl_pin' => ['required', 'numeric']
			]);
		}
	}
