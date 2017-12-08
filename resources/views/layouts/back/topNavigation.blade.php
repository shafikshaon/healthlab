<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0);"><i class="fa fa-bars"></i> </a>

            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="/" target="_blank" style="margin-left: 15px;"><i class="fa fa-web"></i> Visit Site</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

    </nav>
</div>
