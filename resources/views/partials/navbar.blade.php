<nav class="navbar navbar-expand-md navbar-dark navbar-light fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}">
            <x-app-logo-icon height="1.5em" width="1.5em" class="me-2"/> {{ config('app.name', 'App name') }}
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="navbar-collapse collapse" id="navbarCollapse" style="">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('welcome')) active @endif" aria-current="page" href="{{ route('welcome') }}">{{__('Home')}}</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>
                    </li>
                @endauth
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link @if(request()->routeIs('login')) active @endif">{{__('Log in')}}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link @if(request()->routeIs('register')) active @endif">{{__('Register')}}</a>
                        </li>
                    @endif
                @endguest
            </ul>
            @auth
                <form action="{{route('logout')}}" method="POST" class="d-flex ms-md-3">
                    @csrf
                    <button class="btn btn-outline-danger">{{__('Logout')}}</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
