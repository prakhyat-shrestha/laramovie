<?php

namespace laramovie\Http\Controllers;

use Illuminate\Http\Request;
use laramovie\Http\Requests;
use laramovie\Http\Controllers\Controller;
use laramovie\Movie;
use laramovie\Genre;


class Front extends Controller
{

    protected $movies;
    protected $genres;
    protected $top;
   
    public function __construct (){
        $this->movies = Movie::all();
        $this->genres = Genre::all();


    }

    public function index(){     

        $this->top = $this->starrated();
        return view('home', array('title' => 'Welcome','page' => 'home',
                            'movies' => $this->movies,'top' => $this->top));
    }

    public function movies(){
       
        return view ('movie', array('title' => 'Movies Page', 
                                'page' => 'home','movies' => $this->movies,'kind' => 'LATEST'));
    }

    public function genres(){

        return view ('genre', array('title' => 'Genre Page', 
                                'page' => 'home','genres' => $this->genres));
  
    }

   public function from_genre($genre_id){

        $this->movies = Movie::where('genre_id', $genre_id)->get();
        $kind = Genre::where('genre_id',$genre_id)->first();

         return view('movie', array('title' => 'Movies Page', 
                            'page' => 'home','movies' => $this->movies,'kind' => $kind->title));
  
   }

   public function movie_details($film_id){

        $this->movies = Movie::where('film_id', $film_id)->get();

        return view('movie_details',array('title' => 'Movie Details', 'movies' => $this->movies));

   }

   public function top_rated(){

        $this->movies = $this->starrated();

        return view ('movie',array('title' => 'Top Rated','movies' => $this->movies,
                                'kind' => 'TOP'));

   }

   public function contact(){

        return view('contact',array('title'=>'contact us'));
   }


    public function search(Request $request)
        {
    // Gets the query string from our form submission 
    $query = $request->input('search');
    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $this->movies = Movie::where('title', 'LIKE', '%' . $query . '%')->get();
        
    // returns a view and passes the view the list of articles and the original query.
    return view('search_results', array('title' => 'Search Results','movies' => $this->movies));
         }


    public function starrated()
        {
            return Movie::where('rating','>','3')->get();

        }




}
