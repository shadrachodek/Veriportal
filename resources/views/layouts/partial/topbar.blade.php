<!-- Top bar Starts Here -->

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse">

            <form class="navbar-form navbar-left navbar-search-form" role="search">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" value="" class="form-control" placeholder="Search...">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
                {{--<li>--}}
                    {{--<a href="charts.html">--}}
                        {{--<i class="fa fa-line-chart"></i>--}}
                        {{--<p>Stats</p>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-bell-o"></i>--}}
                        {{--<span class="notification">5</span>--}}
                        {{--<p class="hidden-md hidden-lg">--}}
                            {{--Notifications--}}
                            {{--<b class="caret"></b>--}}
                        {{--</p>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Notification 1</a></li>--}}
                        {{--<li><a href="#">Notification 2</a></li>--}}

                    {{--</ul>--}}
                {{--</li>--}}





                <li class="dropdown dropdown-with-icons">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <p class="">
                            {{ Auth::user()->username }}
                            <b class="caret"></b>
                        </p>

                    </a>


                    <ul class="dropdown-menu dropdown-with-icons">
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<i class="pe-7s-mail"></i> Messages--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<i class="pe-7s-help1"></i> Help Center--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('setting.index') }}">
                                <i class="pe-7s-tools"></i> Settings
                            </a>
                        </li>
                        {{--<li class="divider"></li>--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<i class="pe-7s-lock"></i> Lock Screen--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="text-danger">
                                <i class="pe-7s-close-circle"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
                <img class="photo" src="{{ asset('img/default-avatar.png') }}" />
            </ul>





        </div>
    </div>
</nav>
<!-- Top bar Ends Here -->