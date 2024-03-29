<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FilmTerbaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
 
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $film_terbaru=   FilmTerbaru::all();
     $data['result'] = $film_terbaru->sortDesc();
    return view('frontend.home.index',$data);
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
    public function show($slug)
    {
        $data['row'] = FilmTerbaru::where('slug', $slug)->firstOrFail();
       return view('frontend.home.detail',$data);
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
