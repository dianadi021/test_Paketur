<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GolDarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');

        DB::table('gender')->insert([
            'name' => 'A',
        ]);
        DB::table('gender')->insert([
            'name' => 'B',
        ]);
        DB::table('gender')->insert([
            'name' => 'AB',
        ]);
        DB::table('gender')->insert([
            'name' => 'O',
        ]);
    }
}
