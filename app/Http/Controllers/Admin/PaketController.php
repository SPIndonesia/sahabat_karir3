<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Paket;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function pages($page, $data)
    {
        return view('admin/paket/' . $page, $data);
    }

    public function index()
    {
        $data = [
            'judul' => 'Sahabat Karir | Paket',

            'css' => [
                'components/tabelAdmin',
                'components/popup',
                'pages/admin/paket'
            ],

            'js' => [
                'admin/paket'
            ],

            'data_paket' => Paket::all(),

            'data_kategori' => Kategori::all()
        ];

        return $this->adminPages('paket', $data);
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
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/img/paket'), $imageName);
        $data = Paket::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
            'image_url' => $imageName,
        ]);

        return redirect('admin/paket')->with('status', 'Paket berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket, $id)
    {
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/img/paket'), $imageName);
        $data = Paket::find($id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
            'image_url' => $imageName,
        ]);
    }
    public function ubah(Request $request, Paket $paket, $id)
    {
        $data = Paket::find($id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori,
        ]);
        return redirect('admin/paket')->with('status', 'Paket berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        //
    }
    public function hapus($id)
    {
        $data = Paket::find($id)->delete();
        return redirect('admin/paket')->with('status', 'Kategori berhasil dihapus!');
    }
}
