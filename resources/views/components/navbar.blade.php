<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <span class="nav-link active" aria-current="page" href="#">Hello {{Auth::user()->name}}</span>
                </li>
                <li>
                    <button class="btn btn-info">
                        <a href="{{route('logout')}}" 
                        onclick="event.preventDefault(); 
                        document.getElementById('form-logout').submit();">
                        Logout</a>
                    </button>
                </li>
                <form method="POST" action="{{route('logout')}}" id="form-logout">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>