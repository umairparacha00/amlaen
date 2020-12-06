<?php

namespace App\Http\Controllers\Admin;

use App\AdminTransaction;
use App\Balance;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionsController extends Controller
{
	public function index(AdminTransaction $adminTransaction)
	{
		$data = $adminTransaction->where('id', current_admin()->id)->orderBy('id', 'desc')->paginate(15);

		return view('Admin.transactions.transactions', ['transactions' => $data]);
    }


	public function showPointsCreationForm(Balance $balance, User $user)
	{
		return view('Admin.transactions.create-points');
    }
}
