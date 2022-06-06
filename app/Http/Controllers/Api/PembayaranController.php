<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\UserPaket;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $json = json_decode($request->getContent());

        $signature_key = hash('SHA512', $json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));
        if ($signature_key != $json->signature_key) {
            return abort('404');
        }
        $order = Orders::where('id_order', $json->order_id)->first()->update([
            'status' => $json->transaction_status,
        ]);
        $userpaket = UserPaket::where('id_pembayaran', $json->order_id)->first()->update([
            'status' => $json->transaction_status,
        ]);
    }
}
