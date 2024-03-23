<!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('dashboard')}}">PIMS</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{-- <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> --}}

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        {{-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a> --}}
                        <a class="dropdown-toggle" id="back" data-toggle="dropdown" href="#">
                            <i class="fa fa-arrow-circle-o-left fa-fw"></i> Back 
                            {{-- <b class="caret"></b> --}}
                        </a>
                        {{-- <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">                           
                            
                            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            {{-- <li><a href="{{route('company-profile.show',$cp->user_uid)}}"><i class="fa fa-user fa-fw"></i> Company Profile</a> --}}
                            </li>
                            {{-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> --}}
                            </li>
                            <li class="divider"></li>
                            <li>   <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                   <i class="fa fa-sign-out fa-fw"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                @include('layouts.company-sidebar')
            </nav>