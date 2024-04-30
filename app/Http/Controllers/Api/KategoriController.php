<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['kategori']]);
    }
    public function kategori(Request $request) 
    {
        $film = Kategori::all();
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
