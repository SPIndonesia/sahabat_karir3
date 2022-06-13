<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function pages($page, $data)
    {
        return view('admin/dataPeserta/' . $page, $data);
    }

    public function index()
    {
        $data = [
            'judul' => 'Sahabat Karir | User',

            'css' => [
                'pages/admin/dataPeserta',
                'components/tabelAdmin'
            ],

            'js' => [
                'admin/dataPeserta'
            ],

            'data_user' => User::all(),
        ];

        return $this->adminPages('dataPeserta', $data);
    }

    public function paket($id)
    {
        $data = [
            'judul'     => 'Landing Paket',

            'css'       => [
                'pages/user/landingPaket'
            ],

            'js'        => [
                'user/landingPaket'
            ],

            'data_paket' => Paket::where('id_kategori', $id)->get()
        ];

        return $this->userPages('landingPaket', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::find($id)->delete();

        return redirect('/admin/user');
    }
}
