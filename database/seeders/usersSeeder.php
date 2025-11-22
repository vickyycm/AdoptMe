<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1234'),
                'created_at' => now(),
                'role' => 'admin'
            ],
            [
                'name' => 'Victoria',
                'email' => 'vicky@gmail.com',
                'password' => Hash::make('vicky'),
                'created_at' => now(),
                'role' => 'user'
            ],
            [
                'name' => 'Caterina',
                'email' => 'cate@gmail.com',
                'password' => Hash::make('cate'),
                'created_at' => now(),
                'role' => 'user'
            ]
        ]);
    }
}
