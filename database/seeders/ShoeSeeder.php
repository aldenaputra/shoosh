<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoesData = [
            [
                'brand_id' => 1,
                'name' => 'Naiki Water Force',
                'size_EU' => 42,
                'type' => 'Men',
                'shoe_category' => 'Casual',
                'stock' => 10,
                'price' => '1,499,999',
                'image' => 'asset/men1.webp',
            ],
            [
                'brand_id' => 1,
                'name' => 'Naiki Panda Hitam',
                'size_EU' => 38,
                'type' => 'Women',
                'shoe_category' => 'Casual',
                'stock' => 2,
                'price' => '1,499,999',
                'image' => 'asset/women1.webp',
            ],
            [
                'brand_id' => 2,
                'name' => 'Idadas Biru',
                'size_EU' => 32,
                'type' => 'Kid',
                'shoe_category' => 'Sport',
                'stock' => 8,
                'price' => '799,999',
                'image' => 'asset/kids1.webp'
            ],
            [
                'brand_id' => 1,
                'name' => 'Naiki Item Merah',
                'size_EU' => 40,
                'type' => 'Men',
                'shoe_category' => 'Casual',
                'stock' => 3,
                'price' => '1,599,999',
                'image' => 'asset/men2.webp',
            ],
            [
                'brand_id' => 3,
                'name' => 'Kompos Coklat',
                'size_EU' => 40,
                'type' => 'Women',
                'shoe_category' => 'Sport',
                'stock' => 1,
                'price' => '1,599,999',
                'image' => 'asset/women2.webp',
            ],
            [
                'brand_id' => 2,
                'name' => 'Idadas Biru Gradasi',
                'size_EU' => 41,
                'type' => 'Women',
                'shoe_category' => 'Sport',
                'stock' => 1,
                'price' => '1,459,999',
                'image' => 'asset/women3.webp',
            ],
            [
                'brand_id' => 3,
                'name' => 'Kompos Hijau Army',
                'size_EU' => 41,
                'type' => 'Men',
                'shoe_category' => 'Casual',
                'stock' => 1,
                'price' => '1,459,999',
                'image' => 'asset/men3.webp',
            ],
            [
                'brand_id' => 2,
                'name' => 'Idadas Biru Bola',
                'size_EU' => 28,
                'type' => 'Kid',
                'shoe_category' => 'Sport',
                'stock' => 4,
                'price' => '899,999',
                'image' => 'asset/kids2.webp',
            ],
            [
                'brand_id' => 2,
                'name' => 'Idadas Merah Belang',
                'size_EU' => 30,
                'type' => 'Kid',
                'shoe_category' => 'Sport',
                'stock' => 3,
                'price' => '759,999',
                'image' => 'asset/kids3.webp',
            ],
        ];

        // Insert data into the 'shoes' table
        DB::table('shoes')->insert($shoesData);
    }
}
