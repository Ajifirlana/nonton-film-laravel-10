<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FilmTerbaru;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['judul_halaman'] = "Beranda";
        return view('backend.home.index',$data);
    }
    public function video()
    {
        
        $data['film_terbaru']=   FilmTerbaru::all();
        $data['judul_halaman'] = "Data Video";
       return view('backend.video.index',$data);
    }
    public function play($slug)
    {
        $data['row'] = FilmTerbaru::where('slug', $slug)->firstOrFail();
        $data['judul_halaman'] =$data['row']->judul_film;
       return view('backend.video.play',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
