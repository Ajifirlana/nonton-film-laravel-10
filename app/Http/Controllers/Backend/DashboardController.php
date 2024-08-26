<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FilmTerbaru;
use App\Models\Kategori;
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
    public function tambah_video()
    {
        $data['judul_halaman'] = "Tambah Video";
        $data['kategori']= Kategori::get();
       return view('backend.video.tambah_video',$data);
    }
    public function edit_video($id)
    {
        $data['kategori']= Kategori::get();
        $data['row'] = FilmTerbaru::findOrFail($id);
        $data['judul_halaman'] =$data['row']->judul_film;
        return view('backend.video.edit_video',$data);
    }
    public function actupdateVideo(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'judul_film' => 'required|string|max:255',
            'id_kategori' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Find the video and update it
        $video = FilmTerbaru::findOrFail($id);
        $video->judul_film = $request->input('judul_film');
        $video->id_kategori = $request->input('id_kategori');
        // Update more fields as needed
        $video->save();

        // Redirect back or to another page with a success message
        return redirect('data_video')->with('success', 'Video updated successfully!');
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
        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file('file')->extension();  
        
            $request->file->move(public_path('film'), $fileName);
     
            $fileModel = new FilmTerbaru();
            $fileModel->judul_film = $request->judul_film;
            $fileModel->id_kategori = $request->id_kategori;
            $fileModel->url_video = $fileName;
            $fileModel->slug = str_replace(' ','-',$request->judul_film) ;
            $fileModel->save();
     

            return back()
                ->with('success', 'file berhasil di upload.');
        }
        else {
            
            return back()
                ->with('error', 'file gagal di upload.');
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
