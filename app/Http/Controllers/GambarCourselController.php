<?php

namespace App\Http\Controllers;

use App\Models\GambarCoursel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GambarCourselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar = GambarCoursel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $gambar = GambarCoursel::create([
        //     'image_url' => $requ
        // ])
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GambarCoursel  $gambarCoursel
     * @return \Illuminate\Http\Response
     */
    public function show(GambarCoursel $gambarCoursel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GambarCoursel  $gambarCoursel
     * @return \Illuminate\Http\Response
     */
    public function edit(GambarCoursel $gambarCoursel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GambarCoursel  $gambarCoursel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GambarCoursel $gambarCoursel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GambarCoursel  $gambarCoursel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GambarCoursel $gambarCoursel)
    {
        //
    }
}
