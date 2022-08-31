<?php

use Illuminate\Database\Seeder;
use App\Kategori;
class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
        "kategori" => "Now Playing",
        "kategori_id" => "now_playing"
        ]);
        Kategori::create([
        "kategori" => "Popular",
        "kategori_id" => "popular"
        ]);
        Kategori::create([
        "kategori" => "Top Rated",
        "kategori_id" => "top_rated"
        ]);
        Kategori::create([
        "kategori" => "Up Coming",
        "kategori_id" => "upcoming"
        ]);
    }
}
