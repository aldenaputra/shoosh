<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carts')->insert([
            'fotoProduk'=> Str::random(10).'.png',
            'namaProduk'=> Str::random(10),
            'variasi' => Str::random(10),
            'quantity' => 3,
            'harga' => 3000,
            'subtotalHarga' => 9000,
        ]);
    }
}
