<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Paket;
use App\Models\Orders;
use App\Models\User;
use App\Models\UserPaket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay($id)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env("MIDTRANS_SERVER_KEY");
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $data_peserta = User::where('id', Auth::user()->id)->first();
        $data_paket = Paket::where('id_paket', $id)->first();

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                array(
                    "id" => "IT1",
                    "name" => $data_paket->nama,
                    "quantity" => 1,
                    "price" => $data_paket->harga
                )
            ),
            'customer_details' => array(
                'first_name' => $data_peserta->name,
                'email' => $data_peserta->email,
                'phone' => $data_peserta->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $data = [
            'judul'     => 'SAHABAT KARIR',

            'css'       => [],

            'js'        => [],
            'snap_token' => $snapToken,
            'data_paket' => $data_paket
        ];

        return view('midtrans/bayarPaket', $data);
    }

    public function payPost(Request $request, $id)
    {
        $data_peserta = User::where('id', Auth::user()->id)->first();
        $json = json_decode($request->get('json'));
        $order = new Orders();
        $order->status = $json->transaction_status;
        $order->id_user = $data_peserta->id;
        $order->id_paket = $id;
        $order->id_transaksi = $json->transaction_id;
        $order->id_order = $json->order_id;
        $order->jumlah_dibayar = $json->gross_amount;
        $order->jenis_pembayaran = isset($json->payment_type) ? $json->payment_type : null;
        $order->kode_pembayaran = isset($json->payment_code) ? $json->payment_code : null;
        $order->invoice = isset($json->pdf_url) ? $json->pdf_url : null;
        $order->save();
        $userpaket = new UserPaket();
        $userpaket->id_user = $data_peserta->id;
        $userpaket->id_paket = $id;
        $userpaket->id_pembayaran = $order->id_order;

        if ($json->transaction_status == 'settlement') {
            $userpaket->status = 'AKTIF';
        } else {
            $userpaket->status = 'TIDAK AKTIF';
        }

        $userpaket->save();

        if ($order->save()) {
            return redirect(url('/'))->with('alert-success', 'order berhasil dibuat');
        } else {
            return redirect(url('/'))->with('alert-failed', 'terjadi kesalahan');
        }
    }

    public function index()
    {
        $data_pembayaran = Pembayaran::all();

        $data = [
            'judul' => 'judul',
            'css' => 'pembayaran',
            'js' => 'pembayaran',
            'data_pembayaran' => $data_pembayaran,
        ];

        return view('user/payment', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
