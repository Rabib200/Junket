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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                        {{-- <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> --}}
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
                <div class="col-lg-12" >
                    <h1 class="page-header">Dashboard</h1>
                    <div class="mx-auto pull-right" >
            <div class="search" style="float: right;
    margin-top: -2rem;
            ">
                <form action="{{ url("admin/upcomingPlan/search") }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects" style="margin-left:1600px">
                                search
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term" style="width: 150px; float: right;
                        margin-right: 220px">
                    </div>
                </form>
            </div>
        </div>
                </div>
                <div>
       
    </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="text-align: center">Upcoming Plan Lists</h3>
                </div>
                <div class="container" style=".container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Location</th>
            <th scope="col">Short Description</th>
            <th scope="col">image</th>
            <th scope="col">Group Name</th>
            <th scope="col">Cost Description</th>
            <th scope="col">Total Cost</th>
            <th scope="col">Booking Cost</th>
            <th scope="col">Capacity</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($upcomingPlans as $upcomingPlan)
          <tr>
            <th scope="row">{{ $upcomingPlan->location }}</th>
            <td>{{ $upcomingPlan->short_description }}</td>
            <td>{{ $upcomingPlan->image }}</td>
            <td>{{ $upcomingPlan->group_name }}</td>
            <td>{{ $upcomingPlan->cost_description }}</td>
            <td>{{ $upcomingPlan->total_cost }}</td>
            <td>{{ $upcomingPlan->booking_cost}}</td>
            <td>{{ $upcomingPlan->capacity }}</td>
            <td>{{ $upcomingPlan->status }}</td>
            <td>
              <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url("admin/upcomingPlanEdit/$upcomingPlan->id") }}'">Edit</button>
              <button type="button" class="btn btn-success" onclick="window.location.href='{{ url("admin/upcomingPlan/delete/$upcomingPlan->id") }}'">Delete</button>
              @guest
                  @if ($upcomingPlan->status == 'pending')
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ url("admin/upcomingPlan/status/$upcomingPlan->id") }}'">Active</button>
                  @endif
                  @if ($upcomingPlan->status == 'active')
                  <button type="button" class="btn btn-danger" onclick="window.location.href='{{ url("admin/upcomingPlan/status/$upcomingPlan->id") }}'">Pending</button>
                  @endif
              @endguest

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
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
