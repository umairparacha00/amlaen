<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;

	class BalanceController extends Controller
	{
		public function index()
		{
			//
		}

		public function create(User $user)
		{
			return view('transactions.send-balance', compact('user'));
		}

		public function store(Request $request)
		{
			//
		}

		public function transfer_create(User $user)
		{
			return view('transactions.transfer-balance', compact('user'));
		}

		public function edit($id)
		{
			//
		}

		public function update(Request $request, $id)
		{
			//
		}

		public function destroy($id)
		{
			//
		}
	}
