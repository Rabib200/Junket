<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Junket Group Admin Panel</title>

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
                <a class="navbar-brand" href="index.html">Junket Group Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span>{{ Auth::guard('group')->user()->group_name }}</span>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{ url('group/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="{{ url('group/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blogs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url("group/blog/add") }}">Add Blog</a>
                                </li>
                                <li>
                                <a href="{{ url('group/blog/list/' . Auth::guard('group')->user()->group_name) }}">Blog List</a><br>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Feed<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url("group/feed/add") }}">Add Feed</a><br>
                                </li>
                                <li>
                                <a href="{{ url('group/feed/list/' . Auth::guard('group')->user()->group_name) }}">Feed List</a><br>
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
    <h3 style="text-align: center">Blog Lists</h3>
    <div class="mx-auto pull-right" >
            <div class="search" style="float: right;
    margin-top: -2rem;
            ">
                <form action="{{ url("group/blog/search") }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects" style="margin-left:1800px">
                                search
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term" style="width: 150px; float: right;
                        margin-right: 100px">
                    </div>
                </form>
            </div>
        </div>
                </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Heading</th>
            <th scope="col">Short Description</th>
            <th scope="col">image</th>
            <th scope="col">Group Name</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
          <tr>
            <th scope="row">{{ $blog->heading }}</th>
            <td>{{ $blog->short_description }}</td>
            <td>{{ $blog->image }}</td>
            <td>{{ $blog->group_name }}</td>
            <td>{{ $blog->status }}</td>
            <td>
              <button type="button" class="btn btn-primary" onclick="window.location.href='{{ url("group/blogEdit/$blog->id") }}'">Edit</button>
              <button type="button" class="btn btn-success" onclick="window.location.href='{{ url("group/blog/delete/$blog->id") }}'">Delete</button>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

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
