<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="#">
                    <b>
                    <img src="{{ asset('assets/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('assets/plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
                    </b>
                        <span class="hidden-xs">
                        <img src="{{ asset('assets/plugins/images/admin-text.png') }}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('assets/plugins/images/admin-text-dark.png') }}" alt="home" class="light-logo" />
                     </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left">
                <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
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
                            <a href="{{route('pegawai.edit',$user->id_kepegawaian)}}">
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