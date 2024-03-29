<?php

namespace Database\Seeders;

use App\Models\SettingWeb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingWeb::create([
            'judul_web'          => 'Nonton Film By Aji firlana',
            'telepon'          => '089531941653',
            'url_twitter'=>'',
            'url_facebook'=>'https://web.facebook.com/profile.php?id=100064146004445',
            'url_instagram'=>'https://www.youtube.com/@AjiFirlana/playlists',
            'email'          => 'firlana89@gmail.com',
            'alamat'    => 'Muara Tembesi',
            'deskripsi'    => 'Nonton Film terbaru cuma ada di website ini'
        ]);
    }
}
