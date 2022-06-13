<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $data_testimoni = Testimoni::all();
        $data = [
            'judul'         => 'Sahabat Karir | Testimoni',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/testimoni'
            ],

            'js'            => [
                'admin/testimoni'
            ],

            'data_testimoni' => $data_testimoni,

        ];

        return $this->adminPages('testimoni', $data);
    }
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->file('gambar_testimoni')->extension();
        $request->file('gambar_testimoni')->move(public_path('assets/img/landingPage'), $imageName);
        $data = Testimoni::create(
            [
                'image_url' => $imageName,
                'deskripsi' => $request->deskripsi,
                'nama_lulusan' => $request->nama_lulusan,
                'lulusan' => $request->lulusan,
                'rating' => $request->rating,
            ]
        );


        return redirect('admin/testimoni')->with('status', 'testimoni berhasil dibuat!');
    }
    public function ubah(Request $request, $id)
    {
        $imageName = time() . '.' . $request->file('gambar_testimoni')->extension();
        $request->file('gambar_testimoni')->move(public_path('assets/img/landingPage'), $imageName);
        $data = Testimoni::find($id)->update([
            'image_url' => $imageName,
            'deskripsi' => $request->deskripsi,
            'nama_lulusan' => $request->nama_lulusan,
            'lulusan' => $request->lulusan,
            'rating' => $request->rating,
        ]);

        return redirect('admin/testimoni')->with('status', 'testimoni berhasil diubah!');
    }
    public function hapus($id)
    {
        $data = Testimoni::find($id)->delete();
        return redirect('admin/testimoni')->with('status', 'testimoni berhasil dihapus!');
    }
}
