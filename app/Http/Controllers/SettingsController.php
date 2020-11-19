<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Facades\Validator;

	class SettingsController extends Controller
	{
		public function create()
		{
			return view('setting.settings');
		}

		public function showChangePassword()
		{
			return view('setting.change-password');
		}

		public function changePassword(Request $request, User $user)
		{

			$data = $this->validator($request->all())->validate();
			if ($data['personal_pin'] === current_user()->pl_pin) {
				$user->where('id', current_user()->id)->update(['password' => bcrypt($data['password'])]);
				return back()->withToastSuccess('Password Updated Successfully!');
			} else {
				return back()->with('toast_error', 'Personal Pin in Incorrect');
			}
		}

		protected function validator(array $data)
		{
			$rules = [
				'personal_pin' => 'required|numeric',
				'password' => 'required|string|min:8|confirmed'
			];
			$message = [
				'personal_pin.required' => 'Personal pin is required.',
				'personal_pin.numeric' => 'Personal pin must be number.',
			];

			return Validator::make($data, $rules, $message);
		}

		public function showChangePin()
		{
			return view('setting.change-pin');
		}

		public function changePin(Request $request, User $user)
		{
			$data = $this->pinValidator($request->all())->validate();

			if ($data['current-pin'] === current_user()->pl_pin) {
				$user->where('id', current_user()->id)->update(['pl_pin' => $data['new-pin']]);
				return back()->withToastSuccess('Personal pin updated successfully.');
			} else {
				return back()->with('toast_error', 'Personal Pin is Incorrect');
			}
		}

		protected function pinValidator(array $data)
		{
			$rules = [
				'current-pin' => 'required|regex:/^[0-9]{6,8}$/',
				'new-pin' => 'required|regex:/^[0-9]{6,8}$/'
			];
			$message = [
				'current-pin.required' => 'Personal pin is required.',
				'current-pin.regex' => 'Current pin must be number of minimum 6 and maximum of 8 characters.',
				'new-pin.required' => 'New pin is required.',
				'new-pin.regex' => 'New pin must be number of minimum 6 and maximum of 8 characters.',
			];

			return Validator::make($data, $rules, $message);
		}
	}
