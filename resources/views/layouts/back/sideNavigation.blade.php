<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="text-align: center;"> <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{{route('adminprofile')}}">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Shafik Shaon</strong>
                        </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">Profile</a></li>
                        <li><a href="contacts.html">Account Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    HL
                </div>
            </li>
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Admin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="">Add An Admin</a>
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
                      <a href="{{route('adddoctor')}}">Add An Doctor</a>
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
                      <a href="{{route('addpatient')}}">Add An Patient</a>
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
                      <a href="">Add An Patient</a>
                    </li>
                    <li>
                      <a href="{{route('viewalldeveloper')}}">View All Developers</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Organs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('addorgan')}}">Add An Organ</a>
                    </li>
                    <li>
                      <a href="{{route('viewallorgan')}}">View All Organs</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Diseases</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('adddisease')}}">Add An Disease</a>
                    </li>
                    <li>
                      <a href="{{route('viewalldisease')}}">View All Diseases</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Symptom</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                      <a href="{{route('addsymptom')}}">Add An Symptom</a>
                    </li>
                    <li>
                      <a href="{{route('viewallsymptom')}}">View All Symptom</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Question</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('addquestion')}}">Add An Question</a>
                    </li>
                    <li>
                        <a href="">View All Question</a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
