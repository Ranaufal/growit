<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function process(Request $request)
    {
        $data = $request->all();
        $subs = Subscription::create([
            'user_id' => Auth::user()->id,
            'sub_id' => $data['id'],
            'price' => $data['price'],
            'status' => 'pending',
        ]);
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['price'],
            ),
            'user_details' => array(
                'order_id' => rand(),
                'gross_amount' => $data['price'],
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $subs->snap_token = $snapToken;
        $subs->save();

        return redirect()->route('checkout', $subs->id);
    }
    public function checkout(Subscription $subs)
    {
        $subss = config('subs');
        $sub = collect($subss)->firstWhere('id', $subs->sub_id);

        return view('checkout',  compact('subs', 'sub'));
    }
    public function success(Subscription $subs)
    {
        $subs->status='success';
        $subs->save();

        return view('success');
    }
    
}
