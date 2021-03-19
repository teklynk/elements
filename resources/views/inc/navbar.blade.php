<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Elements</a>
        </div>

        @if (!Auth::guest())
            <ul class="nav navbar-nav">
                <li class="nav-item {{Request::is('overlay', 'overlay/*') ? 'active' : ''}}">
                    <a class="nav-link" href="/overlay">Overlay</a>
                </li>
                <li class="nav-item {{Request::is('followers','followers/*') ? 'active' : ''}}">
                    <a class="nav-link" href="/followers">Followers</a>
                </li>
                <li class="nav-item {{Request::is('chat','chat/*') ? 'active' : ''}}">
                    <a class="nav-link" href="/chat">Chat</a>
                </li>
                <li class="nav-item {{Request::is('soundboard','soundboard/*') ? 'active' : ''}}">
                    <a class="nav-link" href="/soundboard">Soundboard</a>
                </li>
            </ul>
        @endif

        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
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
                </li>
            @endif
        </ul>
    </div>
</nav>