<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{{ asset('assets/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">


                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/admin')}}">
                            <i class="mdi mdi-av-timer fa-fw"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pengumuman.index')}}">
                            <i class="icon-bell"></i>
                            <span class="hide-menu">Pengumuman</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('upload.index')}}">
                            <i class=" icon-cloud-upload"></i>
                            <span class="hide-menu">Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('absensi.index')}}">
                            <i class="icon-people"></i>
                            <span class="hide-menu">Absensi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('pegawai.edit',Auth::user()->id_kepegawaian)}}">
                            <i class="icon-lock-open"></i>
                            <span class="hide-menu">Ganti Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/')}}" target="newtab">
                            <i class="icon-globe"></i>
                            <span class="hide-menu">Website SMA N1</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/logout')}}">
                            <i class="icon-logout"></i>
                            <span class="hide-menu">LogOut</span>
                        </a>
                    </li>
                </ul>
            </ul>
         </div>
</div>
