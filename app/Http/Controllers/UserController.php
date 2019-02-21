<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use App\Mail\OrderShipped;
use App\User;
use App\Order;
use App\Jobs\SendOrderEmail;
use App\Events\ShippingUpdated;
use Log;

class OrderController extends Controller
{
    public function index()
    {
        return view('user.index',compact('id'));
    }

    public function orderNotif()
    {
        $order = Order::findOrFail(rand(1,50));
        Redis::publish('order',json_encode(['event'=>'ShippingUpdated','data'=>$order]));
        event(new ShippingUpdated($order));
    }
}
