<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FilmTerbaru;
use Illuminate\Http\Request;

class Filmcontroller extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['data_film']]);
    }
    public function data_film(Request $request) 
    {
        $film = FilmTerbaru::all();
        if ($film->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'users'   => $film   
        ], 200);
         
    }
}
