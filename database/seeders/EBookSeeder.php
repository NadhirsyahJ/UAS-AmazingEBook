<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            ['title' => 'Buku Sakti', 'author' => 'Kera Sakti', 'description' => 'Buku yang menjelaskan agar pembaca menjadi sakti.'],
            ['title' => 'Buku Kurang Sakti', 'author' => 'Kera. Sakti', 'description' => 'Buku yang menjelaskan agar pembaca menjadi kurang sakti.'],
            ['title' => 'Buku Tidak Sakti', 'author' => 'Kera Sakti', 'description' => 'Buku yang menjelaskan agar pembaca menjadi tidak sakti.'],
            ['title' => 'Buku Paling Sakti', 'author' => 'Kera Sakti', 'description' => 'Buku yang menjelaskan agar pembaca menjadi paling sakti.'],
            ['title' => 'Book of Life', 'author' => 'X', 'description' => 'Book that teach you about having a life.'],
            ['title' => 'Buku of Death', 'author' => 'Z', 'description' => 'Book that teach you how to end life.'],
            ['title' => 'Buku of Comma', 'author' => 'Me', 'description' => 'Book that balance about life and death.']
        ]);
    }
}
