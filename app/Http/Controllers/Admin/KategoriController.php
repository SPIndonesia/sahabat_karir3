<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data_kategori = Kategori::all();

        $data = [
            'judul' => 'Sahabat Karir | Kategori',

            'css' => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/kategori'
            ],

            'js' => [
                'admin/kategori'
            ],

            'data_kategori' => $data_kategori,
        ];

        return $this->adminPages('kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->file('gambar_kategori')->extension();
        $request->file('gambar_kategori')->move(public_path('assets/img/kategori'), $imageName);
        $data = Kategori::create(
            [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'image_url' => $imageName,
            ]
        );


        return redirect('admin/kategori')->with('status', 'Kategori berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */

    public function ubah(Request $request, $id)
    {
        $imageName = time() . '.' . $request->file('gambar_kategori')->extension();
        $request->file('file')->move(public_path('assets/img/kategori'), $imageName);
        $data = Kategori::find($id)->update([
            'nama' => $request->nama,
            'image_url' => $imageName,
        ]);

        return redirect('admin/kategori')->with('status', 'Kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */





    public function destroy(Kategori $kategori, $id)
    {
        $data = Kategori::find($kategori->id)->delete();
        return redirect('admin/kategori')->with('status', 'Kategori berhasil dihapus!');
    }


    public function hapus($id)
    {
        $data = Kategori::find($id)->delete();
        return redirect('admin/kategori')->with('status', 'Kategori berhasil dihapus!');
    }
}
