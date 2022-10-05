<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = [
            [
                'judul' => 'Dihadapan Menko PMK, Aremania Sampikan Hal Ini',
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'SPORT',
                'gambar' => 'img-contoh-1.jpg',
                'waktu' => '2022-09-29',
            ],
            [
                'judul' => 'Marvel siap hadirkan Zombie kedalam universe mereka',
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'MOVIE',
                'gambar' => 'img-contoh-2.jpg',
                'waktu' => '2022-10-01',
            ],
            [
                'judul' => 'Rizeky billar terlibat kasus KDRT',
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'HOT',
                'gambar' => 'img-contoh-3.jpg',
                'waktu' => '2022-09-19',
            ],
            [
                'judul' => 'Uni Eropa Wajibkan iPhone Pakai USB Type C, Apple Harus Patuh',
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'TECH',
                'gambar' => 'img-contoh-4.jpg',
                'waktu' => '2022-10-05',
            ],
            [
                'judul' => "Chord 'Ku Tak Bisa' Slank Beserta Makna Lagunya, Bikin Galau Banget!",
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'MUSIC',
                'gambar' => 'img-contoh-5.jpg',
                'waktu' => '2022-10-02',
            ],
            [
                'judul' => "5 Cara Mengatasi Perut Kembung dengan Cepat dan Alami tanpa Obat",
                'konten' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, totam!',
                'kategori' => 'HEALTH',
                'gambar' => 'img-contoh-6.jpg',
                'waktu' => '2022-09-28',
            ],
        ];
        foreach($article as $artc) {
            \App\Models\Article::firstOrCreate($artc);
        }
    }
}
