<?php

namespace App\Http\Controllers;

use App\Mail\PinCreated;
use App\Pin;
use App\Transaction;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PinsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Request $request)
    {
		$userPinsData = Pin::where('user_id' , current_user()->id)->get();
		return view('pins.create', compact('userPinsData'));
    }

	public function store(Request $request, $user_id = null, $pinFeePercentage = 0.25 )
	{
		$data = $request->validate([
			'amount' => ['required', 'integer','max:1000'],
		]);
		$pinFee = $data['amount'] * $pinFeePercentage /100;
		if ($data['amount'] < 5) {
			return back()->with('toast_error', 'Cannot make a pin less then 5 points');
		}
		$totalForPinCreation = $data['amount'] + $pinFee + 1;
		if ($totalForPinCreation > current_user()->balance->main_balance ) {
			return back()->with('toast_error', 'Your entered amount is exceeded then your balance!');
		}
		$startingString = 'AML';
		$randomNumber = rand(100000000000, 9999999999999);
		$pin = $startingString.$randomNumber;
		Pin::create([
			'user_id' => $user_id ?? current_user()->id,
			'pin' => $pin,
			'pin_value' => $data['amount'],
			'pin_remaining_value' => $data['amount'],
		]);
		Mail::to(current_user()->email)->send(new PinCreated($pin));
		return back();
    }

	/**
	 * @param Request $request
	 * @param float $feePercentage
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function getpinfee(Request $request, $feePercentage = 0.25)
    {
        $value = $request->validate([
        	'amount' => ['required','integer','max:1000'],
		]);
        $amount = $value['amount'];
        $fee = $amount * $feePercentage / 100;
        $array = ['amount' => $amount, 'fee' => $fee];
		return response()->json($array);
    }
}
