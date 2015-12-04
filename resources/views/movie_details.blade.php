@extends('layouts.master')

@section('content')

	<!-- Main -->
	<div id="main-cote">
		<!-- Content -->
		<div id="content">
			<!-- Box -->
			@foreach ($movies as $item)
			<!-- Movie -->
			<div class="mv-details">
			
				<img src="{{ asset('images/'.$item->image)}}" class="post-photo" 
							alt="movie" width="340" height="340" />
				<div class="mv-info">
					<p><h3>{{$item->title}}</h3></p>
					<p ><h4> Rating {{$item->rating}} of 5.</h3></p>
					<p><h4>Released on: {{$item->release_year}}</h4> </p>
					<p><h4>{{$item->description}}</h4> </p>
				</div>				

			</div>
			<!-- end Movie -->
			@endforeach

			<div class="cl">&nbsp;</div>

			<div class="cl">&nbsp;</div>

		</div>
	</div>
	<!-- end Main -->

	@endsection