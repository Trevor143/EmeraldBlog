<nav class="navbar navbar-expand-lg navbar-dark  rounded" style="background-color: forestgreen;">
    @guest
    <a class="navbar-brand" href="{{ route('post.index') }}">Emerald Blog</a>
    @else
    <a class="navbar-brand" href="{{ route('post.index') }}">Emerald Blog</a>
    <a class="navbar-brand" href="/home">Admin Panel</a>
    <a class="navbar-brand" href="/author/post">Create a Post</a>
    @endguest
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item dropdown">

                <a href="http://emerald.test"> Back To website</a>
            </li >
                    @else
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>

                <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="http://localhost/final/">
                            Back to website
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
