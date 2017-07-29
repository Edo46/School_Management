<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                        <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('assets/plugins/images/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{$user->nama_pegawai}}</b><span class="caret"></span> </a>
                    <ul class="dropdown-menu dropdown-user animated flipInY">
                        <li>
                            <div class="dw-user-box">
                                <div class="u-img"><img src="{{ asset('assets/plugins/images/users/varun.jpg') }}" alt="user" /></div>
                                <div class="u-text">
                                    <h4>{{$user->nama_pegawai}}</h4>
                                </div>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{route('backend.templates.header')}}">
                                <i class="ti-user"></i> My Profile
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{url('logout')}}">
                                <i class="fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
        </div>
    </nav>
</div>