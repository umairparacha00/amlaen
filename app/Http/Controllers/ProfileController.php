<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Validator;

	class ProfileController extends Controller
	{
		public function create(User $user)
		{
			return view('profile.edit', [
				'user' => $user,
			]);
		}

		public function show(User $user)
		{
			return view('profile.profile', [
				'user' => $user,
			]);
		}

		public function DocumentsShow(User $user)
		{
			return view('profile.documents', [
				'user' => $user,
			]);
		}

		protected function validator(array $data)
		{
			$message = [
				'country.regex' => 'Country should only contain alphabets, spaces and numbers.',
				'city.regex' => 'City should only contain alphabets, spaces and numbers.',
				'state.regex' => 'State should only contain alphabets, spaces and numbers.',
				'cnic.regex' => 'CNIC format is e.g: 33100-8921956-8 .',
			];
			return Validator::make($data, [
				'cnic' => ['unique:users', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
				'date_of_birth' => ['before:today'],
				'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
				'gender' => ['required', 'in:male,female,other'],
				'postalcode' => ['required', 'numeric'],
				'country' => ['required', 'regex:/^[a-zA-Z0-9 ]*$/', 'string'],
				'state' => ['required', 'regex:/^[a-zA-Z0-9 ]*$/', 'string'],
				'city' => ['required', 'regex:/^[a-zA-Z0-9 ]*$/', 'string'],
				'address' => ['required', 'string'],
			], $message);
		}
		public function update(Request $request, User $user)
		{
			if ($request['cnic'] == null && $request['phone'] == null && $request['date_of_birth'] == null && $request['gender'] == null && $request['postalcode'] == null && $request['country'] == null && $request['state'] == null && $request['city'] == null && $request['address'] == null) {
				return back()->with('toast_error', 'Cannot Update CNIC');
			}

			if ($request['phone'] == $user['phone'] && $request['gender'] == $user['gender'] && $request['postalcode'] == $user['postalcode'] && $request['country'] == $user['country'] && $request['state'] == $user['state'] && $request['city'] == $user['city'] && $request['address'] == $user['address']) {
				return back()->with('toast_error', 'Nothing to update');

			}

			$data = $this->validator($request->all())->validate();

			if ($request['cnic'] && current_user()->cnic !== null) {
				return back()->with('toast_error', 'Cannot Update CNIC');
			} elseif ($request['cnic'] && current_user()->cnic === null) {
				$data['cnic'];
			}


			if ($request['date_of_birth'] && current_user()->date_of_birth !== null) {
				return back()->with('toast_error', 'Cannot Update Birth Date');
			} elseif ($request['date_of_birth']) {
				$data['date_of_birth'];
			}

			$user->update($data);

			return redirect('/profile/edit')->withToastSuccess('Updated Successfully!');

		}

		public function filesupdate(Request $request, User $user)
		{
			$data = $request->validate([
				'user_file' => ['file', 'image'],
				'cnic_file' => ['file', 'image'],
				'bank_file' => ['file', 'image'],
			]);
			if ($request['cnic_file'] === null && $request['user_file'] === null && $request['bank_file'] === null) {
				return back()->with('toast_error', 'Nothing To Update');
			}
			if ($request->has('user_file')) {
				$data['user_file'] = $request['user_file']->store('profile');
			}
			if ($request->has('cnic_file') && current_user()->cnic_file_status === null || $request->has('cnic_file') && current_user()->cnic_file_status === 'rejected') {
				$data['cnic_file'] = $request['cnic_file']->store('cnic');
			} elseif ($request->has('cnic_file') && current_user()->cnic_file_status === 'pending') {
				return back()->with('toast_error', 'CNIC file is already in pending');
			} elseif ($request->has('cnic_file') && current_user()->cnic_file_status === 'approved') {
				return back()->with('toast_error', 'CNIC file is already is approved');
			}
			if ($request->has('bank_file') && current_user()->bank_file_status === null || $request->has('bank_file') && current_user()->bank_file_status === 'rejected') {
				$data['bank_file'] = $request['bank_file']->store('bank');
			} elseif ($request->has('bank_file') && current_user()->bank_file_status === 'pending') {
				return back()->with('toast_error', 'Bank statement file is already in pending');
			} elseif ($request->has('bank_file') && current_user()->bank_file_status === 'approved') {
				return back()->with('toast_error', 'Bank statement file is already is approved');
			}
			$user->update($data);
			$user->update([
				'cnic_file_status' => 'pending',
				'bank_file_status' => 'pending'
			]);
			return back()->withToastSuccess('Uploaded Successfully!');
		}

	}
