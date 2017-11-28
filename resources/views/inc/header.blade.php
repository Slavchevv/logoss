<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Logos</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                @if (Auth::guest())
                <a class="nav-link disabled" href="#">Upload <i class="fa fa-cloud-upload align-middle" aria-hidden="true"></i></a>
                @else
                <a class="nav-link" onclick="window.location='{{ URL::route('upload') }}'">Upload <i class="fa fa-cloud-upload align-middle" aria-hidden="true" ></i></a>
                @endif
            </li>
            <li>

            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <!--  <input class="form-control mr-sm-2" type="text" placeholder="Search">-->

            <ul class="nav navbar-nav ">

                <!-- Authentication Links -->
                @if (Auth::guest())
          {{--      <li><a href="{{ route('login') }}">Login</a></li>--}}
                    <button class="btn btnsrch btn-outline-success my-2 my-sm-0" type="button" onclick="window.location='{{ URL::route('login') }}'">Log In</button>
                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                @else

                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="window.location='{{ route('logout') }}'">Log out</a>
                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>--}}
                        </div>
                    </li>
          {{--      <li class="dropdown">
                    <a class = "loggeduser" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                        <li><a class = "loggeduser" href="">Points</a></li>
                        <li><a class = "loggeduser" href="">Profile</a></li>
                        <li><a class = "loggeduser" href="">Logout</a></li>

                        </li>
                    </ul>
                    <button class="btn btnsrch btn-outline-success my-2 my-sm-0" type="button" onclick="window.location='{{ route('logout') }}'">Log Out</button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
--}}
                @endif
            </ul>



        </form>
    </div>
</nav>


