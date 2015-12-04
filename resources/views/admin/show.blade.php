@extends('layouts.master-admin')

@section('content')

{!! Form::open([
		'method' => 'delete',
		'route' => ['admin.destroy',$movies->film_id]

	])!!}
	<b>Movie Details</b>
<p>{{ $movies->film_id }}</p>
<p>{{ $movies->title }}</p>
<p>{{ $movies->description }}</p>

	<a href="{{route('admin.edit',$movies->film_id)}}" class="btn btn-primary">Edit Movie</a>
{!! Form::submit('Delete Movie',['class' => 'btn btn-primary'])!!}


@endsection