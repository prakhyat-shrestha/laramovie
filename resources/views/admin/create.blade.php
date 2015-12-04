@extends('layouts.master-admin')

@section('content')

{!! Form::open(['method' => 'post','url' => 'admin','files' => 'true'])!!}
	{!! csrf_field() !!}

  <div class="form-group">
    {!!Form::label('Film ID')!!}
    {!!Form::text('film_id',null,['class' => 'form-control', 'placeholder'=>''])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Title')!!}
    {!!Form::text('title',null,['class' => 'form-control','placeholder'=>'' ])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Description')!!}
    {!!Form::textarea('description',null,['class' => 'form-control','placeholder'=>'' ])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Released Date (YYYY-MM-DD)')!!}
    {!!Form::text('release_year',null,['class' => 'form-control','placeholder'=>''])!!}
  </div>


  <div class="form-group">
   
   Upload an Image {!!Form::file('image',['class' => 'form-control', 'placeholder'=>''])!!}
  </div>

  <div class="form-group">  

   Rating {!!Form::select('rating',['1' => 'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five'])!!}
 
</div>

<div class="form-group">  
Genre{!!Form::select('genre_id',['211'=>'Comedy','212'=>'Romance' ,
          '214'=>'History','216'=>'Kids','215'=>'Animation','213'=>'Action'])!!}

</div>



  <button type="submit" class="btn btn-default">Add a movie</button>

 {!!Form::close()!!} 
<!-- </form> -->

@endsection