<?php

namespace App\Listeners;

use App\Events\AdPackPurchased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailNotificationOfAdPackPurchased
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AdPackPurchased  $event
     * @return void
     */
    public function handle(AdPackPurchased $event)
    {
        //
    }
}
