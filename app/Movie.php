<?php

namespace laramovie;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $table = 'movies';
	
	protected $fillable= array
			('film_id','title','description','image','rating','release_year',
				'genre_id','created_at_ip', 'updated_at_ip') ;
    
}
