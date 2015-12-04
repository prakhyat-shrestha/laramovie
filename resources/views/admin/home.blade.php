@extends('layouts.master-admin')
<?php $message=Session::get('message'); ?>

@if($message=='store')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>A New movie has been added.</strong> 
</div>
@endif

@if($message=='delete')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Movie Deleted.</strong> 
</div>
@endif

@if($message=='update')

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Movie Updated.</strong> 
</div>
@endif

@section('content')

<table class="table">
  <tr>
    <td>Film ID</td>
    <td>Title</td> 
    <td>Operation</td>
  </tr>	
  @foreach ($movies as $movie)
  <tr>
  
    <td>{{ $movie->film_id}}</td>
    <td>{{ $movie->title}}</td> 
    <td>
            {!! link_to_route('admin.show',$title = 'Edit this Movie',$parameters = $movie->film_id,$attributes = ['class' => 'btn btn-primary']) !!}
    </td>
    
  </tr>@endforeach
</table>


@endsection