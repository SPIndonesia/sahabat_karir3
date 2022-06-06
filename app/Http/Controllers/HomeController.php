<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Paket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }
    public function landingpaket($id)
    {
        $data_kategori = Kategori::where('id_kategori', $id)->first();
        $data_paket = Paket::where('id_kategori', $id)->get();
        return view('landingpaket', compact("data_kategori", "data_paket"));
    }
}
