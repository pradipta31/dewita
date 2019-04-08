<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) {
            DB::table('articles')->insert([
               'user_id' => '1',
               'title' => str_random(25),
               'slug' => str_random(25),
               'file' => null,
               'desc' => 'Hari ini hari jumat!',
               'place' => 'Gg. Bija V',
               'created_at' => NOW(),
               'updated_at' => NOW(),
           ]);
       }
    }
}
