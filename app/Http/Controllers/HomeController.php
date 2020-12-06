<?php

	namespace App\Http\Controllers;

	use App\AdPack;
	use Illuminate\Http\Request;
	use Spatie\Permission\Models\Permission;
	use Spatie\Permission\Models\Role;

	class HomeController extends Controller
	{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware(['auth']);
		}

		/**
		 * Show the application dashboard.
		 *
		 * @param AdPack $adPack
		 * @return \Illuminate\Contracts\Support\Renderable
		 */
		public function index(AdPack $adPack)
		{
			$adPacksValue = $adPack->totalAdPacksBalance();
			return view('dashboard', compact('adPacksValue'));
		}
	}
