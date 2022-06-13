<?php

namespace App\Http\Controllers\Api\UserPaket;

use App\Http\Controllers\Controller;
use App\Models\UserPaket;
use Illuminate\Http\Request;

class DeleteUserPaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        UserPaket::find($id)->delete();

        return response(['message' => 'Deleted successfully'], 200);
    }
}
