<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('genres', function (Blueprint $table)

        {
            $table->increments('id');
            $table->integer('genre_id')->unique();
            $table->string('title',255);
            $table->string('image',255);
            $table->timestamps();
            $table->string('created_at_ip');
            $table->string('updated_at_ip');

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('genres');
    }
}
