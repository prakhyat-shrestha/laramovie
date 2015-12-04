@extends('layouts.master')

@section('content')

@if (count($movies) === 0)
	<p> No movies found</p>
@elseif (count($movies) >= 1)

	<!-- Main -->
	<div id="main-cote">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>SEARCH RESULTS</h2>
					<p class="text-right"><a href="#">See all</a></p>
				</div>
	
				@foreach ($movies as $item)

				<!-- Movie -->
				<div class="movie">					
					<div class="movie-image">
						
						<a href="{{url('show-movie/'.$item->film_id)}}">
							<span class="play"><span class="name">{{$item->title}}</span></span>
							<img src="{{ asset('images/'.$item->image)}}" alt="movie" 
								width="150" height="214" /></a>
					</div>
						
					<div class="rating">
						<p>RATING:{{ $item->rating }} of 5.</p>
					</div>

				</div>
				<!-- end Movie -->
				@endforeach

				<div class="cl">&nbsp;</div>
			</div>
			<!-- end Box -->


			<div class="cl">&nbsp;</div>
		</div>
	</div>
@endif
@endsection