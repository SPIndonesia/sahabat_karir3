<?php

namespace App\Http\Controllers\Api\UserPaket;

use App\Http\Controllers\Controller;
use App\Models\UserPaket;
use Illuminate\Http\Request;

class GetUserPaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = UserPaket::all();

        return response()->json(['data' => ['status' => 200, 'userpaket' => $data]]);
    }
}
