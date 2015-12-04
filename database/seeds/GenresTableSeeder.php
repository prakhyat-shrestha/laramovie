<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    public function run()
    {
          
          DB::table('genres')->delete();

         DB::table('genres')->insert(['genre_id' => 211,'title' => 'comedy','image' =>'comedy.jpg',]);
      	 DB::table('genres')->insert(['genre_id' => 212,'title' => 'romance','image' =>'romance.jpg',]);
      	  DB::table('genres')->insert(['genre_id' => 213,'title' => 'action','image' =>'action.jpg',]);
      	   DB::table('genres')->insert(['genre_id' => 214,'title' => 'history','image' =>'history.jpg',]);
      	    DB::table('genres')->insert(['genre_id' => 215,'title' => 'animation','image' =>'animation.jpg',]);
      	     DB::table('genres')->insert(['genre_id' => 216,'title' => 'kids','image' =>'kids.jpg',]);
    }
}
