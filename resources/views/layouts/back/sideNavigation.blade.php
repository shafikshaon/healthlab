<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{asset('img/pic.jpg')}}" style="width: 64px; "/>
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><a href="profile.html">Shafik Shaon</a></strong></span>
                </div>
                <div class="logo-element">
                    Shafik Shaon
                </div>
            </li>
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Admin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('add')}}">Add An Admin</a>
                    </li>
                    <li>
                      <a href="{{route('viewalladmin')}}">View All Admins</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Doctors</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('add')}}">Add An Doctor</a>
                    </li>
                    <li>
                      <a href="{{route('viewalldoctor')}}">View All Doctors</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Patients</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('add')}}">Add An Patient</a>
                    </li>
                    <li>
                      <a href="{{route('viewallpatient')}}">View All Patients</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Developers</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('add')}}">Add An Patient</a>
                    </li>
                    <li>
                      <a href="{{route('viewalldeveloper')}}">View All Developers</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
