<?php

	namespace App\Http\Controllers;

	use App\AdPack;
	use App\Balance;
	use App\Events\AdPackPurchased;
	use App\Rate;
	use App\Pin;
	use App\Transaction;
	use App\User;
	use Carbon\Carbon;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Validation\ValidationException;

	class AdPackPurchaseController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware(['auth']);
		}


		public function create($user = null)
		{
			$adPacks = AdPack::where('user_id', current_user()->id)->get();
			return view('purchase.ad-pack', compact('adPacks'));
		}

		public function store(Request $request, User $user, AdPack $adPack, Pin $pin, Balance $balance, Transaction $transaction, Rate $rate)
		{
			$data = $this->validator($request->all())->validate();

			$this->validationForMembershipAndPurchasingLimit($data);

			$numberOfAdPacks = $data['number'];
			$totalAmount = $data['number'] * 50;
			$pinData = $pin->checkPin($data['pin']);

			if ($pinData->user_id == current_user()->id) {
				if ($pinData->pin_remaining_value >= $totalAmount) {

					// create a Ad Pack

					$adPack->create([
						'name' => 'gold',
						'user_id' => current_user()->id,
						'number_of_ad_packs' => $numberOfAdPacks,
						'price' => 50,
						'amount' => $totalAmount,
						'status' => 1,
						'created_at_day' => Carbon::today(),
						'expires_at' => Carbon::today()->addYear(),
					]);

					// Ad Pack Transaction

					$transaction->createTransaction(current_user()->id,
						'credit',
						$totalAmount,
						$this->closingAdPackBalanceAfterPurchase($totalAmount),
						$balance->currentAdPackBalance(),
						'AdPack purchased of (' . $totalAmount . ') by ' . current_user()->username . ' user(' . current_user()->id . ')',
						'investment_balance'
					);


					// Update the Pin value After purchasing

					$pin->updatePinRemainingValue($pinData->id, $this->getPinRemainingValue($pinData->pin_remaining_value, $totalAmount));

					// Update the user Ad Power Balance

					$balance->updateAdPackBalance(current_user()->id, $this->closingAdPackBalanceAfterPurchase($totalAmount));

					event(new AdPackPurchased(current_user()->sponsor, $totalAmount, $user, $rate, $balance, $transaction));

					return redirect(route('ad_packs.create'))->withToastSuccess('AdPack created successfully');
				} else {
					return redirect()->back()->with('toast_error', 'Pin value is insufficient for purchase');
				}
			}
			else{
				return redirect(route('ad_packs.create'))->with('toast_error', 'This pin belongsTo
				 another User');
			}
		}

		protected function validator(array $data)
		{
			$message = [
				'number.required' => 'Please select the number of Ad Packs',
				'pin.exists' => 'Your entered pin does not exists'
			];
			return Validator::make($data, [
				'number' => ['required', 'integer'],
				'pin' => ['required', 'string', 'exists:pins,pin'],
			], $message);
		}

		protected function validationForMembershipAndPurchasingLimit($validatedData)
		{
			$userMembership = current_user()->membership()->id;
			$userAdPackBalance = current_user()->balance->ad_power_balance;
			if ($userMembership === 1) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 250) {
					$difference = 250 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 2) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 1000) {
					$difference = 1000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 3) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 2500) {
					$difference = 2500 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 4) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 5000) {
					$difference = 5000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 5) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 10000) {
					$difference = 10000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 6) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 50000) {
					$difference = 50000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 7) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 100000) {
					$difference = 100000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			} elseif ($userMembership === 8) {
				$amount = $validatedData['number'] * 50;
				if ($userAdPackBalance < 200000) {
					$difference = 200000 - $userAdPackBalance;
					if ($amount <= $difference) {
						$array = ['number' => $validatedData['number']];
						return response()->json($array);
					} else {
						throw ValidationException::withMessages([
							'limit' => 'You can Only invest ' . $difference . ' more points with this membership',
						]);
					}
				} else {
					throw ValidationException::withMessages([
						'limit' => 'Your purchasing limit is Reached Upgrade Your Membership',
					]);
				}
			}
		}

		protected function getPinRemainingValue($pinValue, $subtractionAmount)
		{
			return $pinValue - $subtractionAmount;
		}

		// Function for remaining Ad Pack Balance after Ad Pack purchasing

		protected function closingAdPackBalanceAfterPurchase($totalAmountOfPurchase)
		{
			$currentAdPackBalance = current_user()->balance->ad_power_balance;
			$closingAdPackBalanceAfterPurchase = $currentAdPackBalance + $totalAmountOfPurchase;
			return $closingAdPackBalanceAfterPurchase;
		}

		public function getAdPackValidation(Request $request)
		{
			$value = $this->validator($request->all())->validate();

			return $this->validationForMembershipAndPurchasingLimit($value);

		}
	}
