<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('movies')->delete();

         DB::table('movies')->insert(['film_id' => 1001,'title' => 'Army','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'army.jpg','release_year'=>date('2014-07-22'), 'rating' => '1','genre_id' => 211,]);
      	 DB::table('movies')->insert(['film_id' => 1002,'title' => 'Bhairab','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'bhairab.jpg','release_year'=>date('2014-07-22'), 'rating' => '1','genre_id' => 211,]);
         DB::table('movies')->insert(['film_id' => 1003,'title' => 'Champa Chameli','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'champa_chameli.jpg','release_year'=>date('2014-07-22'), 'rating' => '4','genre_id' => 212,]);
         DB::table('movies')->insert(['film_id' => 1004,'title' => 'Chha Ekan Chha','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'chha_ekan_chha.jpg','release_year'=>date('2014-07-22'), 'rating' => '4','genre_id' => 215,]);
         DB::table('movies')->insert(['film_id' => 1005,'title' => 'Chhadke','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'chhadke.jpg','release_year'=>date('2014-07-22'), 'rating' => '3','genre_id' => 213,]);
         DB::table('movies')->insert(['film_id' => 1006,'title' => 'Force','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'force.jpg','release_year'=>date('2014-07-22'), 'rating' => '1','genre_id' => 216,]);
         DB::table('movies')->insert(['film_id' => 1007,'title' => 'Jhola','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'jhola.jpg','release_year'=>date('2014-07-22'), 'rating' => '3','genre_id' => 214,]);
         DB::table('movies')->insert(['film_id' => 1008,'title' => 'Manav','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'manav.jpg','release_year'=>date('2014-07-22'), 'rating' => '5','genre_id' => 212,]);
         DB::table('movies')->insert(['film_id' => 1009,'title' => 'ManP are Pachi','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'man_pare_pachhi.jpg','release_year'=>date('2014-07-22'), 'rating' => '5','genre_id' => 215,]);
         DB::table('movies')->insert(['film_id' => 1010,'title' => 'Muna Madan','description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna', 'image' => 'munamadan.jpg','release_year'=>date('2014-07-22'), 'rating' => '4','genre_id' => 215,]);
      

    }
}
