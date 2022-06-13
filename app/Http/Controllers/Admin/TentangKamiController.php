<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $data_tentangkami = TentangKami::all();
        $data = [
            'judul'         => 'Sahabat Karir | tentangkami',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/tentangkami'
            ],

            'js'            => [
                'admin/tentangkami'
            ],

            'data_tentangkami' => $data_tentangkami,
        ];

        return $this->adminPages('tentangkami', $data);
    }
    public function store(Request $request)
    {
        $data = TentangKami::create(
            [
                'tipe' => $request->tipe,
                'deskripsi' => $request->deskripsi,
            ]
        );


        return redirect('admin/tentangkami')->with('status', 'tentangkami berhasil dibuat!');
    }
    public function ubah(Request $request, $id)
    {
        $data = TentangKami::find($id)->update([
            'tipe' => $request->tipe,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('admin/tentangkami')->with('status', 'tentangkami berhasil diubah!');
    }
    public function hapus($id)
    {
        $data = TentangKami::find($id)->delete();
        return redirect('admin/tentangkami')->with('status', 'tentangkami berhasil dihapus!');
    }
}
