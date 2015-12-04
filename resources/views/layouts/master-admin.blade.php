<!DOCTYPE html>
<html>
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('admin-resource/css/bootstrap.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('admin-resource/css/bootstrap-responsive.min.css') }}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{ asset('admin-resource/css/styles.css') }}" type="text/css" media="all" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
           <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{url('admin')}}">Admin Panel | LaraMovie</a>

                    <div class="nav-collapse collapse">
                         <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <i class="icon-user"></i> 
                                     @if(Auth::check()) {{ Auth::user()->name  }} @endif  
                                     <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('auth/logout')}}"> @if(Auth::check()) Logout @endif</a> </li> 
                                </ul>
                            </li>
                        </ul>

                    </div> 
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li {{$page == 'home' ? 'class=active' : ''}}>
                            <a href='{{url("admin")}}'   ><i class="icon-chevron-right"></i> Edit Movies</a>
                        </li>
                        <li {{$page == 'create' ? 'class=active' : '' }}>
                            <a href='{{url("admin/create")}}'  ><i class="icon-chevron-right"></i> Create Movies</a>
                        </li>
                        <li>
                            <a href='{{url("/")}}'><i class="icon-chevron-right"></i>Back to Site </a>
                        </li>
 

                    </ul>
                </div>
                
                <!--/span-->
            <div class="span9" id="content">
                <div class="row-fluid">

                        @yield('content');

                </div>
            </div>
            <hr>
            </div>
            <footer>
                <p>&copy; LaraMovie.</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="{{ asset('admin-resource/js/jquery.js') }}"></script>
        <script src="{{ asset('admin-resource/js/bootstrap.min.js') }}"></script>
    </body>

</html>