
                <div class="navbar-default sidebar nav-overflow" role="navigation" style="">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>

                            <li>
                                <a href="{{route('dashboard')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            
                            <li>
                                {{-- <a href="#"><i class="fa fa-asterisk fa-fw"></i> Masters <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#"><i class="fa fa-building-o fa-fw"></i> Books<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level"> --}}
                                            <li>
                                                <a href="{{route('add.book')}}">Add book</a>
                                            </li>
                                            {{-- <li>
                                                <a href="{{route('departments.create')}}">Create Department</a>
                                            </li> --}}
                                        {{-- </ul>
                                        <!-- /.nav-second-level -->
                                 </ul> --}}
                            </li>
                                    

                            
                            {{-- <li>
                                <a href="{{route('logs.index')}}"><i class="fa fa-area-chart fa-fw"></i> Logs </a>
                            </li> --}}
                            
                           
                           
                        </ul>
                    </div>
                </div>