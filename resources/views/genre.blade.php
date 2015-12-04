@extends('layouts.master')

@section('content')

	<!-- Main -->
	<div id="main-cote">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head">
					<h2>BROWSE GENRES</h2>
					<p class="text-right"><a href="#">See all</a></p>
				</div>

				@foreach ($genres as $item)

				<!-- Movie -->
				<div class="movie">
					
					<div class="movie-image">
						<a href='{{url("show-all/genres/$item->genre_id")}}'>
							<span class="play"><span class="name">{{$item->title}}</span></span>
							<img src="{{ asset('images/'.$item->image)}}" alt="movie" 
							width="150" height="214" />
						</a>
					</div>
					<div>
						<p><h3>{{$item->title}}</h3></p>
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
	<!-- end Main -->

	@endsection