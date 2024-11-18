<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');

        DB::table('roles')->insert([
            'name' => 'root',
            'level' => 0,
            'description' => 'Merupakan role DevOps/Admin Server',
        ]);
        DB::table('roles')->insert([
            'name' => 'developer',
            'level' => 1,
            'description' => 'Merupakan role Developer/Programmer app',
        ]);
        DB::table('roles')->insert([
            'name' => 'superadministrator',
            'level' => 2,
        ]);
        DB::table('roles')->insert([
            'name' => 'administrator',
            'level' => 3,
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'level' => 4,
        ]);
        DB::table('roles')->insert([
            'name' => 'client',
            'level' => 5,
        ]);
        DB::table('roles')->insert([
            'name' => 'moderator',
            'level' => 6,
        ]);
        DB::table('roles')->insert([
            'name' => 'supporter',
            'level' => 7,
        ]);
        DB::table('roles')->insert([
            'name' => 'member',
            'level' => 8,
        ]);
        DB::table('roles')->insert([
            'name' => 'manager',
            'level' => 9,
        ]);
        DB::table('roles')->insert([
            'name' => 'employee',
            'level' => 10,
        ]);
    }
}
