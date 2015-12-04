<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('movies', function (Blueprint $table)

        {
            $table->increments('id');
            $table->integer('film_id')->unique();
            $table->string('title',255);
            $table->string('description',500);
            $table->string('image',255);
            $table->date('release_year');
            $table->enum('rating', ['1', '2','3', '4','5']);
            $table->integer('genre_id');
            $table->timestamps();
            $table->string('created_at_ip');
            $table->string('updated_at_ip');

         });

            Schema::table('movies', function(Blueprint $table)
            {   
                $table->foreign('genre_id')->references('genre_id')->on('genres');


            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('movies');
    }
}