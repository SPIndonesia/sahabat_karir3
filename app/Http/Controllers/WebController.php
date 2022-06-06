<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env("MIDTRANS_SERVER_KEY");
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('midtrans', compact('snapToken'));
    }

    public function Pembayaran(Request $request)
    {
        $json = json_decode($request->get('json'));
        Orders::create([
            'status' => $json->transaction_status,
            'id_user' => 1,
            'id_paket' => 1,
            'id_transaksi' => $json->transaction_id,
            'id_order' => $json->order_id,
            'jumlah_dibayar' => $json->gross_amount,
            'jenis_pembayaran' => isset($json->payment_type) ? $json->payment_type : null,
            'kode_pembayaran' => isset($json->payment_code) ? $json->payment_code : null,
            'invoice' => isset($json->pdf_url) ? $json->pdf_url : null,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
