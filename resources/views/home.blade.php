@extends('layouts.master')

@section('content')


<!-- Main -->
<div id="main-cote">
	<!-- Content -->
	<div id="content">

		<!-- Box -->
		<div class="box">
			<div class="head">
				<h2>LATEST MOVIES</h2>
				<p class="text-right">
					<a href="#">See all</a>
				</p>
			</div>

			@foreach ($movies as $item)

			<!-- Movie -->
			<div class="movie">
				<div class="movie-image">	
					<a href="{{url('show-movie/'.$item->film_id)}}">
						<span class="play"><span class="name">{{$item->title}}</span></span>
						<img src="{{ asset('images/'.$item->image)}}" alt="movie" 
						width="150" height="214" />
					</a>
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

					<!-- Box -->
		<div class="box">
			<div class="head">
				<h2>HIGHEST RATED</h2>
				<p class="text-right">
					<a href="#">See all</a>
				</p>
			</div>

			@foreach ($top as $item)

			<!-- Movie -->
			<div class="movie">
				<div class="movie-image">	
					<a href="{{url('show-movie/'.$item->film_id)}}">
						<span class="play"><span class="name">{{$item->title}}</span></span>
						<img src="{{ asset('images/'.$item->image)}}" alt="movie" 
						width="150" height="214" />
					</a>
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
	<!-- end content -->

</div>
<!-- end Main -->

	@endsection