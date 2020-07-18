<?php

	namespace App\Http\Controllers;

	use App\User;
	use App\UserFiles;
	use Illuminate\Http\Request;
	use RealRashid\SweetAlert\Facades\Alert;

	class UserFilesController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			//
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create()
		{
			//
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param Request $request
		 * @return void
		 */
		public function store(Request $request)
		{
			$data = $request->validate([
				'user_file' => ['file', 'image'],
				'cnic_file' => ['file', 'image'],
				'bank_file' => ['file', 'image'],
			]);
			$data['user_id'] = current_user()->id;
			if (request('user_file')) {
				$data['user_file'] = $request['user_file']->store('profile_pic');
			}
			if (request('bank_file')) {
				$data['bank_file'] = $request['bank_file']->store('user_bank_file');
			}
			if (request('cnic_file')) {
				$data['cnic_file'] = $request['cnic_file']->store('user_cnic_files');
			}
//			UserFiles::create([
//				'user_id' => current_user()->id,
//				'user_file' => $data['user_file'],
//				'cnic_file' => $data['cnic_file'],
//				'bank_file' => $data['bank_file'],
//			]);
			UserFiles::create($data);
			return back()->withInput(['tab'=>'document-tab'])->withToastSuccess('Uploaded Successfully!!');
		}

		/**
		 * Display the specified resource.
		 *
		 * @param \App\UserFiles $userFiles
		 * @return \Illuminate\Http\Response
		 */
		public function show(UserFiles $userFiles)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param \App\UserFiles $userFiles
		 * @return \Illuminate\Http\Response
		 */
		public function edit(UserFiles $userFiles)
		{
			//
		}

		public function update(UserFiles $userFiles)
		{
			$data = request()->validate([
				'user_file' => ['file', 'image'],
				'cnic_file' => ['file', 'image'],
				'bank_file' => ['file', 'image'],
			]);
			if (request('user_file')) {
				$data['user_file'] = request()['user_file']->store('profile_pic');
			}
			if (request('cnic_file')) {
				$data['cnic_file'] = request()['cnic_file']->store('user_cnic_files');
				$data['cnic_file_status'] = null;
			}
			if (request('bank_file')) {
				$data['bank_file'] = request()['bank_file']->store('user_bank_file');
				$data['bill_file_status'] = null;
			}
			$userFiles->where('user_id', current_user()->id)->update($data);
			return back()->withToastSuccess('Uploaded Successfully!');
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param \App\UserFiles $userFiles
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(UserFiles $userFiles)
		{
			//
		}
	}
