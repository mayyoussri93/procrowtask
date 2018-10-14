







<nav class="navbar  navbar-inverse" style="margin-bottom:0px">
    <div class="container">
        @guest
        <a class="navbar-brand" href="/">
            {{ __('Home') }}
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @else
            <ul class="nav navbar-nav">

                <li><a class="navbar-brand" href="/">
                        {{ __('Home') }}
                    </a></li>

                <li><a class="nav-link" href="/posts">{{ __('Accounts') }}</a></li>
                <li><a class="nav-link" href="/posts/create">{{ __('Create') }}</a></li>

            </ul>
        @endguest

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav pull-right">
                <!-- Authentication Links -->
                @guest

                    <li> <a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li> <a href="{{ route('register') }}">
                                {{ __('Register') }}</a>
                    </li>

                @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>














