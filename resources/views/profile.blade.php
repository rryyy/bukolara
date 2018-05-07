<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BuKo (BuhayKomyuter)</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
<!--     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/commuter.css') }}">
    <link rel="shortcut icon" href="buko.ico" type="image/x-icon">
    <link rel="icon" href="images/buko.ico" type="image/x-icon">
</head>
<body>
    <!-- navbar
    ================================================== -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">BuKo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/home') }}"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="statistics.html"><span class="fa fa-line-chart"></span> Statistics</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>    
        </div>
      </div>
    </nav>
    </div>
    <!-- profile 
    ================================================== -->
    <div class="container-fluid" style="padding-right: 15%; padding-left: 15%">
        <div class="row">
            <div class="col-sm-4 well">
                <div class="text-center" style="margin-top: 5%; margin-bottom: 3%">
                    <div class="well">
                        <img src="images/avatars/user-01.jpg" class="img-circle" height="100" width="100"><br><br>
                        <button type="button" class="btn btn-primary btn-xs"><span class="fa fa-camera"></span> Change Profile Picture</button><br><br>
                        <h5><b>John Ray Q. Guerra</b></h5>
                    </div>
                    <h6><strong>Personal Information</strong></h6>
                </div>
                <div style="margin-bottom: 5%">
                    <div class="list-group">
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-primary">@ Email Address</b></h6>
                        <h6 class="list-group-item-text">johnraypogi@gmail.com</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-success"><span class="fa fa-gift"></span> Birth Date</b></h6>
                        <h6 class="list-group-item-text">September 29, 1995</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-danger"><span class="fa fa-user"></span> Sex</b></h6>
                        <h6 class="list-group-item-text">Male</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-primary"><span class="fa fa-slack"></span> Age</b></h6>
                        <h6 class="list-group-item-text">22 yrs. old</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-success"><span class="fa fa-mobile"></span> Contact Number</b></h6>
                        <h6 class="list-group-item-text">0977 094 3716</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-heading"><b class="text-danger"><span class="fa fa-map-marker"></span> Location</b></h6>
                        <h6 class="list-group-item-text">Sta. Rita, Olongapo City</h6>
                      </b>
                    </div>
                </div>
            </div>

    <!-- posts
    ================================================== -->
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                
                                <li><h6><strong>John Ray Q. Guerra</strong></h6></li>


                                <li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">
                                    <!-- image -->
                                    <a href="images/portfolio/gallery/g-beetle.jpg"><p><img src="images/portfolio/gallery/g-beetle.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"></p></a>    
                                
                                    <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><span class="fa fa-comment-o"></span></li>
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>John Ray Q. Guerra</strong></h6></li>
                                <li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">                                
                                    <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><span class="fa fa-comment-o"></span></li>
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                </div>
                            </div>
                        </div>

                        <div class="well">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>John Ray Q. Guerra</strong></h6></li>
                                <li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li>
                            
                                <div style="margin-top: 5%; margin-bottom: 5%">                                
                                    <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-heart-o"></span></li>
                                    <li><span class="fa fa-comment-o"></span></li>
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <!-- others
    ================================================== -->
            <!-- <div class="text-center">
                <div class="col-sm-3 well">
                    <div class="alert alert-danger fade in" style="margin-top: 5%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <h6><strong>Mood Meter Here</strong></h6>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>