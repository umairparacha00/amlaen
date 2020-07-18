<?php

	namespace App\Http\Controllers;

	use App\Pin;
	use App\User;
	use Illuminate\Http\Request;

	class PinsController extends Controller
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

		public function create(User $user)
		{
			return view('pins.create', compact('user'));
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			$data = $request->validate([
				''
			]);
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  \App\Pin  $pin
		 * @return \Illuminate\Http\Response
		 */
		public function show(Pin $pin)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  \App\Pin  $pin
		 * @return \Illuminate\Http\Response
		 */
		public function edit(Pin $pin)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  \Illuminate\Http\Request  $request
		 * @param  \App\Pin  $pin
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, Pin $pin)
		{
			//
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  \App\Pin  $pin
		 * @return \Illuminate\Http\Response
		 */
		public function destroy(Pin $pin)
		{
			//
		}
	}
