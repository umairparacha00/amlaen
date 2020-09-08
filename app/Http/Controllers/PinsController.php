<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Mail\PinCreated;
use App\Pin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PinsController extends Controller
{
	public function show(Request $request)
	{
		$userPinsData = Pin::where('user_id' , current_user()->id)->get();
		return view('pins.create', compact('userPinsData'));
	}

	/** @noinspection PhpParamsInspection */
	public function store(Request $request, Pin $pin, User $user, Balance $balance, $pinFeePercentage = 0.25 )
	{
		// Pin input Validations
		$data = $request->validate([
			'amount' => ['required', 'integer','max:1000'],
		]);

		//Pin Errors
		$pinFee = $data['amount'] * $pinFeePercentage /100;
		if ($data['amount'] < 5) {
			return back()->with('toast_error', 'Cannot make a pin less then 5 points');
		}
		$totalForPinCreation = $data['amount'] + $pinFee + 1;
		if ($totalForPinCreation > current_user()->balance->main_balance) {
			return back()->with('toast_error', 'Your entered amount exceeded then your balance!');
		}
		// Creating pin
		$actualPin = $this->createPinString();

		// Transaction for pin debit

		$user->addTransaction('main_balance','debit', $data['amount'], $balance->currentMainBalance(), $this->remainingBalanceAfterPin($data['amount']), 'Pin Created by (' . current_user()->id . ')', current_user()->id );
		$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterPin($data['amount']));

		// Transaction for created pin fee

		$user->addTransaction('main_balance','debit', $pinFee, $balance->currentMainBalance(), $this->remainingBalanceAfterPinFee($pinFee), 'Pin Fee by ('. current_user()->id. ')');
		$user->updateMainBalance(current_user()->id, $this->remainingBalanceAfterPinFee($pinFee));

		$pin->createPin($data, $actualPin);


//		Mail::to(current_user()->email)->send(new PinCreated($pin));

		return back()->with('toast_success', 'Pin Created Successfully!');
    }
    protected function createPinString(){
		$startingString = 'AML';
		$randomNumber = rand(10000000000, 9999999999999);
		return $actualPin = $startingString . $randomNumber;
	}
	protected function remainingBalanceAfterPin($pinAmount)
	{
		$currentMainBalance = current_user()->balance->main_balance;
		$remainingMainBalance = $currentMainBalance - $pinAmount;
		return $remainingMainBalance;
	}

	protected function remainingBalanceAfterPinFee($pinFee)
	{
		$currentMainBalance = current_user()->balance->main_balance;
		$remainingMainBalance = $currentMainBalance - $pinFee;
		return $remainingMainBalance;
	}

	/**
	 * @param Request $request
	 * @param float $feePercentage
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getpinfee(Request $request, $feePercentage = 0.25)
	{
		$value = $request->validate([
			'amount' => ['required', 'integer', 'max:1000'],
		]);
		$amount = $value['amount'];
		$fee = $amount * $feePercentage / 100;
		$array = ['amount' => $amount, 'fee' => $fee];
		return response()->json($array);
	}
}
