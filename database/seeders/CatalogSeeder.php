<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalog')->insert([
            'user_id' => 2,
            'title' => Str::random(10),
            'text' => Str::random(10),
            'skill' => 1,
            'created_at' => '2021-07-22 09:48:37',
            'updated_at' => '2021-07-22 09:48:37',
        ]);
    }
}
