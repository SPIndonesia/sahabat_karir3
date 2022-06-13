<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keunggulan;
use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    public function index()
    {
        $data_keunggulan = Keunggulan::all();
        $data = [
            'judul'         => 'Sahabat Karir | Keunggulan',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/keunggulan'
            ],

            'js'            => [
                'admin/keunggulan'
            ],

            'data_keunggulan' => $data_keunggulan,
        ];

        return $this->adminPages('keunggulan', $data);
    }
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->file('gambar_keunggulan')->extension();
        $request->file('gambar_keunggulan')->move(public_path('assets/img/landingPage'), $imageName);
        $data = Keunggulan::create(
            [
                'image_url' => $imageName,
                'deskripsi' => $request->deskripsi,
            ]
        );


        return redirect('admin/keunggulan')->with('status', 'keunggulan berhasil dibuat!');
    }
    public function ubah(Request $request, $id)
    {
        $imageName = time() . '.' . $request->file('gambar_keunggulan')->extension();
        $request->file('gambar_keunggulan')->move(public_path('assets/img/landingPage'), $imageName);
        $data = Keunggulan::find($id)->update([
            'image_url' => $imageName,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('admin/keunggulan')->with('status', 'keunggulan berhasil diubah!');
    }
    public function hapus($id)
    {
        $data = Keunggulan::find($id)->delete();
        return redirect('admin/keunggulan')->with('status', 'keunggulan berhasil dihapus!');
    }
}
