<?php

namespace App\Http\Controllers\Api\UserPaket;

use App\Http\Controllers\Controller;
use App\Models\UserPaket;
use Illuminate\Http\Request;

class CreateUserPaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        UserPaket::create([
            'id_user' => $request->id_user,
            'id_paket' => $request->id_paket,
            'id_pembayaran' => $request->id_pembayaran,
            'status' => $request->status,
        ]);

        return response(['message' => 'successfully'], 200);
    }
}
