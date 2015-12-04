<?php

//user website routes
Route::get('/','Front@index');
Route::get('show-all','Front@movies');//show all movies
Route::get('show-all/genres/{genre_id}','Front@from_genre');//show movie by genre id
Route::get('show-genre','Front@genres');//show all genres
Route::get('show-movie/{film_id}','Front@movie_details');// show movie details
Route::get('top-rated','Front@top_rated');
Route::get('contact-us','Front@contact');
Route::post('search','Front@search');

// admin routes
Route::resource('admin','Admin_Front');

Route::controllers ([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

	]); 


