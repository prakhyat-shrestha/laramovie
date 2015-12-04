<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title>{{ $title }}</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/custom-prak.css') }}" type="text/css" media="all" />
    <!--[if IE 6]>
        <link rel="stylesheet" href="{{ asset('css/ie6.css') }}" type="text/css" media="all" />
    <![endif]-->
</head>
<body>
       

<!-- Shell -->
<div id="shell">
    <!-- Header -->
    <div id="header">
        <h1 id="logo"><a href="{{url('')}}">TvFilmy</a></h1>
        <div class="social">
            <span>FOLLOW US ON:</span>
            <ul>
                <li><a class="twitter" href="#">twitter</a></li>
                <li><a class="facebook" href="#">facebook</a></li>
                <li><a class="vimeo" href="#">vimeo</a></li>
                <li><a class="rss" href="#">rss</a></li>
            </ul>
        </div>
        
        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="{{url('')}}">HOME</a></li>
                <li><a href="{{url('contact-us')}}">CONTACT</a></li>
               
            </ul>
        </div>
        <!-- end Navigation -->
        
        <!-- Sub-menu -->
        <div id="sub-navigation">
            <ul>
                <li><a href="{{url('show-all')}}">SHOW ALL</a></li>
                <li><a href="{{url('show-genre')}}">BROWSE GENRES</a></li>
                <li><a href="{{url('top-rated')}}">TOP RATED</a></li>
                <li><a href="{{url('show-all')}}">MOST COMMENTED</a></li>
            </ul>
            <div id="search">

                {!! Form::open((array('action' => 'Front@search', 'method' => 'post'))) !!}
                {!! Form::text('search',null,
                           array('required',
                                    'class' => 'blink search-field',
                                'placeholder'=>'Search for a movie')) !!}
                {!! Form::submit('Search',
                                array('class'=>'search-button')) !!}
                {!! Form::close() !!}

            </div>
        </div>
        <!-- end Sub-Menu -->
        
    </div>
    <!-- end Header -->

    @yield('content')
    
    <!-- Footer -->
    <div id="footer">
        <p>
            <a href="{{url('')}}">HOME</a> <span>|</span>
            <a href="{{url('')}}">NEWS</a> <span>|</span>
            <a href="{{url('')}}">IN THEATERS</a> <span>|</span>
            <a href="{{url('')}}">COMING SOON </a> <span>|</span>
            <a href="{{url('')}}">LATEST TRAILERS</a> <span>|</span>
            <a href="{{url('top-rated')}}">TOP RATED TRAILERS</a> <span>|</span>
            <a href="{{url('contact-us')}}">CONTACT </a>
        </p>
        <p> &copy; 2015 TVFilmy. All Rights Reserved.  </p>

            </div>
    <!-- end Footer -->
</div>
<!-- end Shell -->


    </body>
</html>
