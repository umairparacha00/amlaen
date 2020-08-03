<?php
//
//	namespace App\Http\Controllers;
//
//	use App\User;
//	use Illuminate\Http\Request;
//
//	class ProfileController extends Controller
//	{
//
//		public function index()
//		{
//			//
//		}
//
//
//		public function create(User $user)
//		{
//			return view('profile.edit', [
//				'user' => $user,
//			]);
//		}
//
//		public function show(User $user)
//		{
//			return view('profile.profile', [
//				'user' => $user,
//			]);
//		}
//
//		public function edit(User $user)
//		{
//
//		}
//
//		public function update(Request $request, User $user)
//		{
//    	if ($request['cnic'] === null && $request['phone'] === null && $request['date_of_birth'] === null && $request['gender'] === null && $request['postalcode'] === null && $request['country'] === null && $request['state'] === null && $request['city'] === null && $request['address'] === null){
//			return back()->withErrors('Nothing To Update');
//		}
//			$data = $request->validate([
//				'cnic' => ['unique:users', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
//				'date_of_birth' => ['before:today'],
//				'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
//				'gender' => ['required', 'in:male,female,other'],
//				'postalcode' => ['required', 'numeric'],
//				'country' => ['required', 'alpha', 'string'],
//				'state' => ['required', 'alpha', 'string'],
//				'city' => ['required', 'alpha', 'string'],
//				'address' => ['required', 'string'],
//			]);
//			if ($request['cnic'] && current_user()->cnic !== null) {
//				return back()->withErrors('Cannot Update CNIC');
//			}else{
//				$data['cnic'];
//			}
//			if ($request['date_of_birth'] && current_user()->date_of_birth !== null) {
//				return back()->withErrors('Cannot Update Birth Date');
//			}else{
//				$data['date_of_birth'];
//			}
//
//			$user->update($data);
//			return redirect('/profile/edit')->withToastSuccess('Updated Successfully!');
//
//		}
//		public function filesupdate(Request $request, User $user)
//		{
//			$data = request()->validate([
//				'user_file' => ['file', 'image'],
//				'cnic_file' => ['file', 'image'],
//				'bank_file' => ['file', 'image'],
//			]);
//			if ($request['cnic_file'] === null && $request['user_file'] === null && $request['bank_file'] === null) {
//				return back()->withErrors('Nothing To Update');
//			}
//			if (request('user_file')) {
//				$data['user_file'] = request()['user_file']->store('profile_pic');
//			}
//			if (request('cnic_file') && current_user()->cnic_file_status === null || request('cnic_file') && current_user()->cnic_file_status === 'rejected') {
//				$data['cnic_file'] = request()['cnic_file']->store('user_cnic_files');
//				$data['cnic_file_status'] = 'pending';
//			} elseif (request('cnic_file') && current_user()->cnic_file_status === 'pending') {
//				return back()->withErrors('CNIC file is already in pending');
//			} elseif (request('cnic_file') && current_user()->cnic_file_status === 'approved') {
//				return back()->withErrors('CNIC file is already is approved');
//			}
//			if (request('bank_file') && current_user()->bank_file_status === null || request('bank_file') && current_user()->bank_file_status === 'rejected') {
//				$data['bank_file'] = request()['bank_file']->store('user_bank_file');
//				$data['bank_file_status'] = 'pending';
//			} elseif (request('bank_file') && current_user()->bank_file_status === 'pending') {
//				return back()->withErrors('Bank statement file is already in pending');
//			} elseif (request('bank_file') && current_user()->bank_file_status === 'approved') {
//				return back()->withErrors('Bank statement file is already is approved');
//			}
//			$user->update($data);
//			return back()->withToastSuccess('Uploaded Successfully!');
//		}
//
//		public function destroy(User $user)
//		{
//			//
//		}
//	}


	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;
	use RealRashid\SweetAlert\Facades\Alert;

	class ProfileController extends Controller
	{

		public function index()
		{
			//
		}


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

		public function edit(User $user)
		{

		}

		public function update(Request $request, User $user)
		{
			if ($request['cnic'] === null && $request['phone'] === null && $request['date_of_birth'] === null && $request['gender'] === null && $request['postalcode'] === null && $request['country'] === null && $request['state'] === null && $request['city'] === null && $request['address'] === null) {
				return back()->withErrors('Nothing To Update');
			}
			$data = $request->validate([
				'cnic' => ['unique:users', 'regex:/^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/'],
				'date_of_birth' => ['before:today'],
				'phone' => ['required', 'regex:/^03[0-9]{9}$/'],
				'gender' => ['required', 'in:male,female,other'],
				'postalcode' => ['required', 'numeric'],
				'country' => ['required', 'alpha', 'string'],
				'state' => ['required', 'alpha', 'string'],
				'city' => ['required', 'alpha', 'string'],
				'address' => ['required', 'string'],
			]);
			if ($request['cnic'] && current_user()->cnic !== null) {
				return back()->with('errors', 'Cannot Update CNIC');
			} elseif ($request['cnic'] && current_user()->cnic === null) {
				$data['cnic'];
			}
			if ($request['date_of_birth'] && current_user()->date_of_birth !== null) {
				return back()->with('errors', 'Cannot Update Birth Date');
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
				return back()->withErrors('Nothing To Update');
			}
			if ($request->has('user_file')) {
				$data['user_file'] = $request['user_file']->store('profile');
			}
			if ($request->has('cnic_file') && current_user()->cnic_file_status === null || $request->has('cnic_file') && current_user()->cnic_file_status === 'rejected') {
				$data['cnic_file'] = $request['cnic_file']->store('cnic');
			} elseif ($request->has('cnic_file') && current_user()->cnic_file_status === 'pending') {
				return back()->withErrors('CNIC file is already in pending');
			} elseif ($request->has('cnic_file') && current_user()->cnic_file_status === 'approved') {
				return back()->withErrors('CNIC file is already is approved');
			}
			if ($request->has('bank_file') && current_user()->bank_file_status === null || $request->has('bank_file') && current_user()->bank_file_status === 'rejected') {
				$data['bank_file'] = $request['bank_file']->store('bank');
			} elseif ($request->has('bank_file') && current_user()->bank_file_status === 'pending') {
				return back()->withErrors('Bank statement file is already in pending');
			} elseif ($request->has('bank_file') && current_user()->bank_file_status === 'approved') {
				return back()->withErrors('Bank statement file is already is approved');
			}
			$user->update($data);
			return back()->withToastSuccess('Uploaded Successfully!');
		}

		public function destroy(User $user)
		{
			//
		}
	}
