<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Dewita',
                'email' => 'tokodewita.co@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('laptopmac123*++'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Elvoust Sakakibara',
                'email' => 'elvoust@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Ni Wayan Kastini',
                'email' => 'wayan.kastini@gmail.com',
                'role' => 'master',
                'password' => Hash::make('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'I Gede Pradipta Adi Nugraha',
                'email' => 'pradipta@gmail.com',
                'role' => 'master',
                'password' => Hash::make('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'name' => 'Ni Made Wahyu Cahyani',
                'email' => 'cahyaniwahyu7@gmail.com',
                'role' => 'master',
                'password' => Hash::make('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ]);
    }
}
