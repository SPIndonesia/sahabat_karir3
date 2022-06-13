<?php

namespace App\Http\Controllers\Api\Paket;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class GetPaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = Paket::all();

        return response()->json(['data' => ['status' => 200, 'paket' => $data]]);
    }
}
