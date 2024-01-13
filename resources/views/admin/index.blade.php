<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Junket Admin Panel</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="{{ asset('admin') }}/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('admin') }}/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Junket Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span>{{ Auth::guard('admin')->user()->name }}</span>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
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
                            <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url("admin/blog_list") }}" id="blog_list"><i class="fa fa-dashboard fa-fw"></i> Blog Lists</a>
                        </li>
                        <li>
                            <a href="{{ url("admin/feed_list") }}" id="feed_list"><i class="fa fa-dashboard fa-fw"></i> Feed Lists</a>
                        </li>
                        <li>
                            <a href="{{ url("admin/running_list") }}" id="tour_plan_list"><i class="fa fa-dashboard fa-fw"></i> Running Plan Lists</a>
                        </li>
                        <li>
                            <a href="{{ url("admin/upcoming_list") }}" id="tour_plan_list"><i class="fa fa-dashboard fa-fw"></i> Upcoming Plan Lists</a>
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
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div id="dataContainer">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="text-align: center">Welcome to Junket Admin Panel</h3>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --></div>


    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('admin') }}/js/jquery-1.10.2.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="{{ asset('admin') }}/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="{{ asset('admin') }}/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{ asset('admin') }}/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="{{ asset('admin') }}/js/demo/dashboard-demo.js"></script>

</body>

</html>
