<?php

namespace App\Http\Controllers\Api\Paket;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class DeletePaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        Paket::find($id)->delete();

        return response(['message' => 'Deleted successfully'], 200);
    }
}
