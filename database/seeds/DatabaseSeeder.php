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

        DB::table('users')->insert([
            'id'=> 1,
            'name' => "utilisateur 1",
            'email' => "utilisateur1@gmail.com",
            'password' => bcrypt('azerty')
        ]);

        DB::table('users')->insert([
            'id'=> 2,
            'name' => "utilisateur 2",
            'email' => "utilisateur2@gmail.com",
            'password' => bcrypt('azerty')
        ]);


        DB::table('photos')->insert([
            'title' => "citron",
            'url' => "/images/portfolio/1.jpg",
            'votes' => 230,
            'user_id' => 1
        ]);


        DB::table('photos')->insert([
            'title' => "mains",
            'url' => "/images/portfolio/2.jpg",
            'votes' => 23,
            'user_id' => 1
        ]);

        DB::table('photos')->insert([
            'title' => "balcons",
            'url' => "/images/portfolio/3.jpg",
            'votes' => 1540,
            'user_id' => 2
        ]);

        DB::table('photos')->insert([
            'title' => "thé",
            'url' => "/images/portfolio/4.jpg",
            'votes' => 45,
            'user_id' => 2
        ]);

        DB::table('photos')->insert([
            'title' => "auto portrait",
            'url' => "/images/portfolio/5.jpg",
            'votes' => 21,
            'user_id' => 1
        ]);

        DB::table('photos')->insert([
            'title' => "livres",
            'url' => "/images/portfolio/6.jpg",
            'votes' => 45,
            'user_id' => 1
        ]);

    }
}
