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
            'url_video'          => 'film1.mp4',
            'slug'          => 'Nonton-Film-By-Aji-firlana' ]);
            
        FilmTerbaru::create([
            'judul_film'          => 'film 2',
            'url_video'          => 'film2.mp4',
            'slug'          => 'film-2' ]);
            
        FilmTerbaru::create([
            'judul_film'          => 'NANO - Sampai Ku Mati (Official Music Video)',
            'url_video'          => 'NANO - Sampai Ku Mati (Official Music Video).mp4',
            'slug'          => 'NANO-Sampai-Ku-Mati-(Official-Music-Video)' ]);
    }
}
