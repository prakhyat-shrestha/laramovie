<?php
namespace laramovie\Http\Controllers;

use Illuminate\Http\Request;
use laramovie\Http\Requests;
use laramovie\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use laramovie\Movie;
use laramovie\Genre;


class Admin_Front extends Controller
{

    protected $movies;
    protected $genres;
    
    public function __construct(){

     $this->middleware('auth');

    $this->movies = Movie::all();
    $this->genres = Genre::all();
    }


    public function index()
    {         
        
        return view('admin.home',array('movies' => $this->movies,'page' =>'home'));
    }


    public function create()
    {
        return view('admin.create',['page' => 'create']);
    }


    public function store(Request $request)
    {

        $this->validate($request,['film_id' => 'required','title'=>'required','release_year' => 'required',
                                        'description'=>'required']);

        $name = 'default.jpg';
        
        if ($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();

            $request->file('image')->move('images',$name);
        }

        Movie::create([
            'film_id' => $request['film_id'],
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $name,
            'rating' => $request['rating'],
            'genre_id' => $request['genre_id'],
            'release_year' => date($request['release_year']),
       
            ]);
        return redirect('/admin')->with('message','store');
    }


    public function show($id)
    {
        $this->movies = Movie::where('film_id','=', $id)->get()->first();

        return view('admin.show',['movies'=>$this->movies,'page' =>'home']);
    }


    public function edit($id)
    {
        $this->movies = Movie::where('film_id','=', $id)->get()->first();
        $this->genres = Genre::where('genre_id',$this->movies->genre_id)->first();
    
        return view('admin.edit',array('movie' => $this->movies,'genre'=>$this->genres,'page' =>'home'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request,['film_id' => 'required','title'=>'required','release_year' => 'required',
                                        'description'=>'required']);

        $movies = Movie::where('film_id',$id)->get()->first();
        
        if ($request->hasFile('image')){

            $request->file('image')->move('images',$request->file('image')->getClientOriginalName());
            $movies->image = $request->file('image')->getClientOriginalName();
        }
         
        $movies->film_id = $request['film_id'];
        $movies->title = $request['title'];
        $movies->description = $request['description'];
        $movies->release_year = date($request['release_year']);
        $movies->rating = $request['rating'];
        $movies->genre_id = $request['genre_id'];
        $movies->save();

        return redirect('/admin')->with('message','update');

    }

    public function destroy($id)
    {
        $movies = Movie::where('film_id','=', $id)->get()->first();

            $movies->delete();
         return redirect('/admin')->with('message','delete');
    }
}
