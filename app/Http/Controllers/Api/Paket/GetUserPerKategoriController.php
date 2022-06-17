<?php

namespace App\Http\Controllers\Api\Paket;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class GetUserPerKategoriController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $data = Paket::where('id_kategori', $id)->get();

        return response()->json(['data' => ['status' => 200, 'paket' => $data]]);
    }
}
