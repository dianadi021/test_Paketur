<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');

        DB::table('gender')->insert([
            'name' => 'Laki - Laki',
        ]);
        DB::table('gender')->insert([
            'name' => 'Perempuan',
        ]);
        DB::table('gender')->insert([
            'name' => 'Pria',
        ]);
        DB::table('gender')->insert([
            'name' => 'Wanita',
        ]);
    }
}
