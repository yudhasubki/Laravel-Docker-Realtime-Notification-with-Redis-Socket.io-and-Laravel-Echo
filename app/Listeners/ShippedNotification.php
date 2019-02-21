<?php

namespace App\Listeners;

use App\Events\ShippingUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Redis;

class ShippedNotification
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
     * @param  ShippingUpdated  $event
     * @return void
     */
    public function handle(ShippingUpdated $event)
    {
        
    }

    public function failed(OrderShipped $event, $exception)
    {
        
    }
}
