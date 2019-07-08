<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('photos')->insert([
            'title' => "citron",
            'url' => "/images/portfolio/1.jpg",
            'votes' => 230
        ]);


        DB::table('photos')->insert([
            'title' => "mains",
            'url' => "/images/portfolio/2.jpg",
            'votes' => 23
        ]);

        DB::table('photos')->insert([
            'title' => "balcons",
            'url' => "/images/portfolio/3.jpg",
            'votes' => 1540
        ]);

        DB::table('photos')->insert([
            'title' => "thé",
            'url' => "/images/portfolio/4.jpg",
            'votes' => 45
        ]);

        DB::table('photos')->insert([
            'title' => "auto portrait",
            'url' => "/images/portfolio/5.jpg",
            'votes' => 21
        ]);

        DB::table('photos')->insert([
            'title' => "livres",
            'url' => "/images/portfolio/6.jpg",
            'votes' => 45
        ]);

    }
}
