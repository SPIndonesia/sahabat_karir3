<?php

namespace App\Http\Controllers\Api\Paket;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class UpdatePaketController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        Paket::find($id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
        ]);

        return response(['message' => 'Updated Successfully'], 200);
    }
}
