@extends('layouts.master-admin')

@section('content')


{!! Form::model($movie,['route' => ['admin.update',$movie->film_id],
                                    'method' => 'PUT','files' => 'true'

      ]) !!}

  {!! csrf_field() !!}

<div class="form-group">
    {!! Form::label('Film ID') !!}
    {!! Form::text('film_id', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>

<div class="form-group">
    {!! Form::label('Title') !!}
    {!! Form::text('title',null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Movie name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::textarea('description', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Movie Description')) !!}
</div>

  <div class="form-group">
    <img src='{{url("images/$movie->image")}}' width="100" height="100"><br>
   
   Upload another Image: {!!Form::file('image',['class' => 'form-control', 'placeholder'=>''])!!}
  </div>

<div class="form-group">
    {!! Form::label('Release Year (YYYY-MM-DD)') !!}
    {!! Form::text('release_year', null, 
                  array('required', 'class'=>'form-control', 'placeholder'=>'movie Image')) !!}
</div>

  <div class="form-group">  

   Rating {!!Form::select('rating',['1' => 'one','2'=>'two','3'=>'three','4'=>'four','5'=>'five'])!!}
 
</div>

<div class="form-group">  
Genre{!!Form::select('genre_id',['211'=>'Comedy','212'=>'Romance','213'=>'Action',
          '214'=>'History','215'=>'Animation','216'=>'Kids'])!!}

</div>

<div class="form-group">
    {!! Form::submit('Update', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

@endsection