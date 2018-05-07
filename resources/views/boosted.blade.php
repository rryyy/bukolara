<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BuKo (BuhayKomyuter)</title>

    <!-- Bootstrap Core CSS -->
<!--     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- MetisMenu CSS -->
<!--     <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
<!--     <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/tables.css">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="buko.ico" type="image/x-icon">
    <link rel="icon" href="images/buko.ico" type="image/x-icon">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/admin') }}">BuKo Admin</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ url('/admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ url('/tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/posts') }}"> All Posts</a>
                                </li>
                                <li>
                                    <a href="{{ url('/boost') }}"> Boosted Posts</a>
                                </li>
                                <li>
                                    <a href="{{ url('/positive') }}"> Positive Posts</a>
                                </li>
                                <li>
                                    <a href="{{ url('/neutral') }}"> Nuetral Posts</a>
                                </li>
                                <li>
                                    <a href="{{ url('/negative') }}"> Negative Posts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Positive Timeline</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="spacing">
                        <div class="form-group">
                          <label for="sel1">Select PUV Type</label>
                          <select class="form-control" id="sell">
                            <option>All</option>
                            <option data-target="#jeepney">Jeepney</option>
                            <option data-target="#bus">Bus</option>
                            <option>Tricycle</option>
                            <option>Taxi</option>
                            <option>Train</option>
                            <option>Transport Network Vehicles</option>
                          </select>
                        </div>

                        <div class="well" id="jeepney">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>John Ray Q. Guerra</strong></h6></li>
                                <li style="float: right"><img src="images/puvs/jeepney.png" height="15" width="15"></li>
                            
                                <div style="margin-top: 3%; margin-bottom: 3%">                                
                                    <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                    <li><h6>11</h6></li>

                                    <li style="float: right"><button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="fa fa-plus"></span> View</button></li>
                                </div>
                            </div>
                        </div>

                        <div class="well" id="bus">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                <li><h6><strong>Ron Angelo Batac</strong></h6></li>

                                <a href="images/wheel-500.jpg"><p><img src="images/wheel-500.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"></p></a>

                                <div style="margin-top: 3%; margin-bottom: 3%">                                
                                    <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                                </div>
                            
                                <div class="list-inline">
                                    <li><span class="fa fa-paper-plane-o"></span></li>
                                    <li><h6>5</h6></li>

                                    <li style="float: right"><button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> View</button></li>
                                </div>
                            </div>
                        </div>

                        </div>
                <!-- /.row -->
                    </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Boost</h4>
          </div>
          <div class="modal-body spacing-modal">
            <div class="row">
                <div class="col-sm-6 well">
                    <a href="images/portfolio/gallery/g-beetle.jpg"><p style="margin-top: 5%; margin-bottom: 5%"><img src="images/portfolio/gallery/g-beetle.jpg" class="img-responsive" sizes="(max-width: 1000px) 100vw, 1000px" alt="" style="margin-bottom: 5%"> IMAGE HERE</p></a>

                    <h6>People who boosted this post:</h6>

                    <div class="list-group">
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-text">Jolyn Pingal</h6>
                      </b>
                      <b href="#" class="list-group-item">
                        <h6 class="list-group-item-text">Ron Angelo Batac</h6>
                      </b>
                    </div>

                    <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Full Details</button>
                </div>

                

                <div class="col-sm-1"></div>

                <div class="col-sm-5 well">
                    <div class="list-inline" style="margin-top: 5%">
                        <li><img src="images/avatars/user-01.jpg" class="img-circle" height="25" width="25"></li>
                                    
                        <li><h6><strong>John Ray Q. Guerra</strong></h6></li>


                        <li style="float: right"><img src="images/puvs/jeepney.png" height="25" width="25"></li>

                        <div style="margin-top: 5%; margin-bottom: 5%">
                            <h6 style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</h6>
                        </div>

                        <div class="list-inline" style="margin-bottom: 5%">
                            <li><span class="fa fa-heart liked"></span></li>
                            <li><h6> 11</h6></li>
                            <li><span class="fa fa-paper-plane boosted"></span></li>
                            <li><h6> 5</h6></li>
                            <hr> 
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-02.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Jolyn Pingal</strong></h6></li>

                                <h6 style="text-align: justify"> Commment Here... </h6>
                            </div>
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-03.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Ron Angelo Batac</strong></h6></li>

                                <h6 style="text-align: justify"> Commment Here...</h6>
                            </div>
                        </div>

                        <div style="margin-bottom: 5%">
                            <div class="list-inline">
                                <li><img src="images/avatars/user-04.jpg" class="img-circle" height="25" width="25"></li>
                                    
                                <li style="margin-bottom: 5%"><h6><strong>Joshua Pasol</strong></h6></li>

                                <h6 style="text-align: justify"> Comment Here...</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- jQuery -->
<!--     <script src="../vendor/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
<!--     <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
<!--     <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- Custom Theme JavaScript -->
<!--     <script src="../dist/js/sb-admin-2.js"></script> -->
    <script src="js/tables.js"></script>
</body>

</html>
