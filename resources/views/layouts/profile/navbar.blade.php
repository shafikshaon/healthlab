<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top navbar-scroll">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Health Lab</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Home</a></li>
                    <li><a class="page-scroll" href="#features">Features</a></li>
                    <li><a class="page-scroll" href="#team">Team</a></li>
                    <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    @if(Auth::check())
                    <li><a class="login" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @else
                        <li><a class="page-scroll login" href="{{route('login')}}">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
