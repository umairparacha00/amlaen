<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class IndexController extends Controller
	{
		public function index()
		{
			return view('index');
		}
		public function contact_us()
		{
			return view('contact');
		}
		public function about_us()
		{
			return view('about');
		}

		public function terms_and_conditions()
		{
			return view('terms&conditions');
		}
	}
