<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class IndexController extends Controller
	{
		public function appIndex()
		{
			return view('index');
		}
		public function services()
		{
			return view('services');
		}
		public function contact_us()
		{
			return view('contact_us');
		}
		public function about_us()
		{
			return view('about_us');
		}
	}
