<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Support\Facades\Gate;

	class DocumentsApprovingController extends Controller
	{
		public function showPendingDocuments()
		{
			if (Gate::allows('approve-documents')) {
				$user_account_id = current_user()->account_id;
				$users = User::where('sponsor', $user_account_id)->get();
				$numberOfRecords = $users->count();
//				$x = 0;
//				while ($x <= $numberOfRecords){
//					$data = $users;
//					foreach ($users as $user) {
//						$levelUsers = User::where([['sponsor', '=' , $user->account_id],['cnic_file_status', '=' , 'pending']])
//							->orWhere([['sponsor', '=' , $user->account_id], ['bank_file_status', '=' , 'pending']])
//							->get();
//						$usersData = $levelUsers;
//					}
//					$x++;
//				}

				return view('pending-documents', compact('users'));
			}else{
				return redirect('/dashboard')->with('toast_error', 'You are not allowed to visit this route');
			}
		}

	}
