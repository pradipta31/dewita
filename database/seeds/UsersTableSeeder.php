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
                'name' => 'Galadriel Evanora',
                'email' => 'evanora@gmail.com',
                'role' => 'sadmin',
                'password' => Hash::make('123456'),
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
            ]    
        ]);
    }
}
