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

    <!-- DataTables CSS -->
<!--     <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"> -->

    <!-- DataTables Responsive CSS -->
<!--     <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> -->

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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Birth Date</th>
                                        <th>Sex</th>
                                        <th>Age</th>
                                        <th>Contact #</th>
                                        <th>Location</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="">
                                        <td>John Ray Q. Guerra</td>
                                        <td>ryyaa@gmail.com</td>
                                        <td>September 29, 1995</td>
                                        <td>Male</td>
                                        <td>22</td>
                                        <td>0977 094 3716</td>
                                        <td>Sta. Rita, Olongapo City</td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr class="">
                                        <td>Ron Angelo Batac</td>
                                        <td>hayato.sena@gmail.com</td>
                                        <td>April 18, 1997</td>
                                        <td>Male</td>
                                        <td>21</td>
                                        <td>0910 653 3667</td>
                                        <td>East Bajac-bajac, Olongapo City</td>
                                    </tr>
                                </tbody>

                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<!--     <script src="../vendor/jquery/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
<!--     <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
<!--     <script src="../vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- DataTables JavaScript -->
<!--     <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script> -->

    <!-- Custom Theme JavaScript -->
<!--     <script src="../dist/js/sb-admin-2.js"></script> -->
    <script src="js/tables.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
