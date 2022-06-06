<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Paket;
use Illuminate\Http\Request;

class Sahabatkarir extends Controller
{
    public function paket()
    {
        $data_paket = Paket::all();
        return view('paket.paket', compact('data_paket'));
    }

    public function kategori()
    {
        $data_kategori = Kategori::all();
        return view('kategori.kategori', compact('data_kategori'));
    }

    public function tambahkategori()
    {
        return view('kategori.tambahkategori');
    }

    public function tambahpaket()
    {
        $data_kategori = Kategori::all();
        return view('paket.tambahpaket', compact('data_kategori'));
    }

    public function editkategori($id_kategori)
    {
        $data_kategori = Kategori::find($id_kategori);
        return view('kategori.editkategori', compact('data_kategori'));
    }

    public function editpaket($id_paket)
    {
        $data_kategori = Kategori::all();
        $data_paket = Paket::find($id_paket);
        return view('paket.editpaket', compact('data_paket', 'data_kategori'));
    }

    public function perbaruikategori(Request $request)
    {
        $data_kategori = Kategori::find($request->id_kategori);
        $data_kategori->update($request->all());
        return redirect()->route('kategori');
    }

    public function perbaruipaket(Request $request)
    {
        $data_paket = Paket::find($request->id_paket);
        $data_paket->update($request->all());
        return redirect()->route('paket');
    }

    public function createkategori(Request $request)
    {
        $data_kategori = new Kategori;
        $data_kategori->nama = $request->nama;
        $data_kategori->save();
        $data_kategori = Kategori::all();
        return view('kategori.kategori', compact('data_kategori'));
    }

    public function createpaket(Request $request)
    {
        $data_paket = new Paket;
        $data_paket->nama = $request->nama;
        $data_paket->harga = $request->harga;
        $data_paket->deskripsi = $request->deskripsi;
        $data_paket->id_kategori = $request->id_kategori;
        $data_paket->save();
        $data_paket = Paket::all();
        return view('paket.paket', compact('data_paket'));
    }

    public function hapuskategori($id_kategori)
    {
        $data = Kategori::find($id_kategori);
        $data->delete();
        return redirect()->back();
    }

    public function hapuspaket($id_paket)
    {
        $data = Paket::find($id_paket);
        $data->delete();
        return redirect()->back();
    }

    public function payment()
    {
        return view('payment');
    }

    public function keranjang()
    {
        return view('keranjangBelanja');
    }

    // untuk menampilkan view beranda
    public function beranda()
    {
        $data = [
            'judul' => 'Sahabat Karir | Dashboard',

            'css' => [
                'beranda'
            ],

            'js' => [
                'beranda'
            ]
        ];

        return view('beranda', $data);
    }

    public function dataPeserta()
    {
        $data = [
            'judul' => 'Sahabat Karir | Data User',

            'css' => [
                'dataPeserta'
            ],

            'js' => [
                'dataPeserta'
            ]
        ];

        return view('dataPeserta', $data);
    }

    public function kategoriAdmin()
    {
        $data = [
            'judul' => 'Sahabat Karir | Kategori',

            'css' => [
                'kategori'
            ],

            'js' => [
                'sweetalert2.all.min',
                'kategori'
            ]
        ];

        return view('kategori', $data);
    }

    public function pembayaran()
    {
        $data = [
            'judul' => 'Sahabat Karir | Data User',

            'css' => [
                'pembayaran'
            ],

            'js' => [
                'pembayaran'
            ]
        ];

        return view('pembayaran', $data);
    }

    public function login()
    {
        $data = [
            'judul' => 'Sahabat Karir | Login'
        ];

        return view('login', $data);
    }

    public function register()
    {
        $data = [
            'judul' => 'Sahabat Karir | Login'
        ];

        return view('register', $data);
    }
}
