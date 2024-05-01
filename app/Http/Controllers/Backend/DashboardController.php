<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FilmTerbaru;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function tambah_video()
    {
        $data['judul_halaman'] = "Tambah Video";
        $data['kategori']= Kategori::get();
       return view('backend.video.tambah_video',$data);
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
    

    /**
     * Store a newly created resource in storage.
     */
    public function store_video(Request $request)
    {
        
        if ($request->hasFile('url_video')) {
            $fileName = time() . '.' . $request->file('url_video')->extension();  
        
            // Store the file
            $filePath = $request->file('url_video')->storeAs('film', $fileName);
        
            // Save metadata to the database
            $fileModel = new FilmTerbaru();
            $fileModel->name = $fileName;
            $fileModel->path = $filePath;
            $fileModel->save();
        
            return back()
                ->with('success', 'You have successfully uploaded the file.');
        } else {
            // Handle the case when no file is uploaded
            return back()
                ->with('error', 'No file uploaded.');
        }
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
