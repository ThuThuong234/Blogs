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
                <a href="{{url('cities')}}"><i class="fa fa-table fa-fw"></i> Cities</a>
            </li>
            <li>
                <a href="{{url('companies')}}"><i class="fa fa-edit fa-fw"></i> Companies</a>
            </li>
            <li>
                <a href="{{url('departments')}}"><i class="fa fa-edit fa-fw"></i> Departments</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>