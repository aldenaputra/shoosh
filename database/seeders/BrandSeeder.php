<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name'=>'Naiki'
        ]);
        DB::table('brands')->insert([
            'name'=>'Idadas'
        ]);
        DB::table('brands')->insert([
            'name'=>'Kompos'
        ]);
    }
}
