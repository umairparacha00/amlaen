<?php

	namespace App\Events;

	use App\AdPowerBalance;
	use App\MainBalance;
	use Illuminate\Broadcasting\InteractsWithSockets;
	use Illuminate\Broadcasting\PrivateChannel;
	use Illuminate\Foundation\Events\Dispatchable;
	use Illuminate\Queue\SerializesModels;

	class AdPackPurchased
	{
		use Dispatchable, InteractsWithSockets, SerializesModels;

		public $request;

		/**
		 * Create a new event instance.
		 *
		 * @param $request
		 */
		public function __construct($request)
		{
			$adPackType = $request['pt'];
			$numberOfAdPack = $request['no'];
			$validatedData = $request->validate([
				'pt' => 'required|string|exists:ad_packs,name',
				'no' => 'required|numeric',
			]);
			if ($validatedData['pt'] === 'gold') {
				$priceOfAdPacks = $validatedData['no'] * 50;
				if (current_user()->mainPoints > $priceOfAdPacks ){
					for ($x = 0; $x <= $validatedData['no']; $x++){
						$existingMainBalance = current_user()->mainPoints->main_points;
						$newBalance = $existingMainBalance - 50;
						MainBalance::update([
							'main_points' => $newBalance
						]);
						$existingGoldPackBalance =  current_user()->adPowerBalance->gold_pack;
						$toAddBalance = $existingGoldPackBalance + 50;
						AdPowerBalance::create([
							'gold_pack' => $toAddBalance,
						]);
					}
				}
			}
		}

		/**
		 * Get the channels the event should broadcast on.
		 *
		 * @return \Illuminate\Broadcasting\Channel|array
		 */
		public function broadcastOn()
		{
			return new PrivateChannel('channel-name');
		}
	}
