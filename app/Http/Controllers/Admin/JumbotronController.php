<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GambarCoursel;
use Illuminate\Http\Request;

class JumbotronController extends Controller
{
    public function index()
    {
        $data_jumbotron = GambarCoursel::all();
        $data = [
            'judul'         => 'Sahabat Karir | Jumbotron',

            'css'           => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/jumbotron'
            ],

            'js'            => [
                'admin/jumbotron'
            ],

            'data_jumbotron' => $data_jumbotron,
        ];

        return $this->adminPages('jumbotron', $data);
    }
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->file('gambar_jumbotron')->extension();
        $request->file('gambar_jumbotron')->move(public_path('assets/img/landingPage'), $imageName);
        $data = GambarCoursel::create(
            [
                'image_url' => $imageName,
            ]
        );


        return redirect('admin/jumbotron')->with('status', 'jumbotron berhasil dibuat!');
    }
    public function ubah(Request $request, $id)
    {
        $imageName = time() . '.' . $request->file('gambar_jumbotron')->extension();
        $request->file('gambar_jumbotron')->move(public_path('assets/img/landingPage'), $imageName);
        $data = GambarCoursel::find($id)->update([
            'image_url' => $imageName,
        ]);

        return redirect('admin/jumbotron')->with('status', 'jumbotron berhasil diubah!');
    }
    public function hapus($id)
    {
        $data = GambarCoursel::find($id)->delete();
        return redirect('admin/jumbotron')->with('status', 'jumbotron berhasil dihapus!');
    }
}
