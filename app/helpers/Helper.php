<?php

	use App\UserFiles;
	use App\UserInformation;

	if (!function_exists('current_user'))
	{
		function current_user(){
			return auth()->user();
		}
	}