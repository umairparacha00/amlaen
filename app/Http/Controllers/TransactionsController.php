<?php

	namespace App\Http\Controllers;

	use App\Transaction;
	use Illuminate\Http\Request;

	class TransactionsController extends Controller
	{

		public function index()
		{
			$transactions = Transaction::where('user_id' , current_user()->id)
				->orderBy('id', 'desc')
				->paginate(8);
			return view('transactions.transactions', compact('transactions'));
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
