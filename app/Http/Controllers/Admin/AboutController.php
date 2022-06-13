<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'judul'         => 'Sahabat Karir | Tentang Website',

            'css'           => [
                'components/tabelAdmin',
                'components/popup'
            ],

            'js'            => [
                'admin/about'
            ]
        ];

        return $this->adminPages('about', $data);
    }
    public function store(Request $request)
    {
        $data = about::create(
            [
                'tipe' => $request->tipe,
                'deskripsi' => $request->deskripsi,
            ]
        );


        return redirect('admin/about')->with('status', 'about berhasil dibuat!');
    }
    public function ubah(Request $request, $id)
    {
        $data = about::find($id)->update([
            'tipe' => $request->tipe,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('admin/about')->with('status', 'about berhasil diubah!');
    }
    public function hapus($id)
    {
        $data = about::find($id)->delete();
        return redirect('admin/about')->with('status', 'about berhasil dihapus!');
    }
}
