<?php

namespace Database\Seeders;

use App\Models\FilmTerbaru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmTerbaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FilmTerbaru::create([
            'judul_film'          => 'Nonton Film By Aji firlana',
            'id_kategori'=> '1',
            'url_video'          => 'film1.mp4',
            'slug'          => 'Nonton-Film-By-Aji-firlana' ]);
            
        FilmTerbaru::create([
            'judul_film'          => 'film 2',
            'id_kategori'=> '1',
            'url_video'          => 'film2.mp4',
            'slug'          => 'film-2' ]);
            
        FilmTerbaru::create([
            'judul_film'          => 'rambo first blood 1982',
            'id_kategori'=> '2',
            'url_video'          => 'rambo-first-blood-1982.mp4',
            'slug'          => 'rambo-first-blood-1982' ]);
            FilmTerbaru::create([
                'judul_film'          => 'NANO - Sampai Ku Mati (Official Music Video)',
                'id_kategori'=> '3',
                'url_video'          => 'NANO - Sampai Ku Mati (Official Music Video).mp4',
                'slug'          => 'NANO-Sampai-Ku-Mati-(Official-Music-Video)' ]);
        
                FilmTerbaru::create([
                    'judul_film'          => 'Atletico Madrid Vs Inter Milan',
                    'id_kategori'=> '4',
                    'url_video'          => 'https://www.youtube.com/embed/3V_XItaEDZU',
                    'slug'          => 'Atletico-Madrid-Vs-Inter-Milan' ]);
                
    }
}
