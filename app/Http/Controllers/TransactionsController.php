<?php

	namespace App\Http\Controllers;

	use App\User;
	use Illuminate\Http\Request;

	class TransactionsController extends Controller
	{

		public function index(User $user)
		{
			return view('transactions.transactions', compact('user'));
		}

		public function withdrawBalanceShow()
		{
			return view('transactions.withdraw-balance');
		}

		public function paymentGatewaysShow()
		{
			return view('transactions.payment-gateways');
		}
		public function create()
		{

		}

		public function store(Request $request)
		{
			//
		}

		public function show($id)
		{
			//
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
