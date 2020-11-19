<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{



    public function showLoginForm()
    {
        return view('Admin.auth.login');
    }

	public function login(Request $request)
	{
		$data = $this->validator($request->all())->validate();
//		echo "<pre>"; print_r($data); die;
		if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
		 	return redirect('/admin/dashboard');
		}
		else{
			Session::flash('error_message', 'Invalid Email or Password');
		    return redirect()->back();
		}
    }
	// Validation for Share Balance

	protected function validator(array $data)
	{
		return Validator::make($data, [
			'email' => ['required', 'email'],
			'password' => ['required', 'string']
		]);
	}

	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect('/admin/login');
	}
}
