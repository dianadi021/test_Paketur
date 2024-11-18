<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');
        $dateNowCreated = date('Y-m-d H:i:s');

        DB::table('users')->insert([
            'username' => 'root',
            'email' => 'root@seklinik.com',
            'status' => 1,
            'id_role' => 1,
            'password' => Hash::make('1234'),
            'created_at' => $dateNowCreated
        ]);
    }
}
