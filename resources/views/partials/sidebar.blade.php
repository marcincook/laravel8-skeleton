<div class="sidebar d-flex flex-column flex-shrink-0 p-2 text-white bg-dark">

    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <x-app-logo-icon height="1.5em" width="1.5em" class="me-2"/> {{ config('app.name', 'App name') }}
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item">
            <a href="{{route('welcome')}}" class="nav-link @if(request()->routeIs('welcome')) active @endif" >
                <i class="bi bi-house"></i> {{__('Home')}}
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link @if(request()->routeIs('admin.dashboard')) active @endif" aria-current="page">
                <i class="bi bi-bar-chart"></i> {{__('Dashboard')}}
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-bar-chart"></i> {{__('Dashboard')}}
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-people"></i> {{__('Customers')}}
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropup">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="rounded-circle me-2 fs-2"><i class="bi bi-person-circle"></i></span>
            <strong>{{ auth()->user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">{{__('Settings')}}</a></li>
            <li><a class="dropdown-item" href="#">{{__('Profile')}}</a></li>
            <li><hr class="dropdown-divider"></li>
            <form action="{{route('logout')}}" method="POST" class="dropdown-item">
                @csrf
                <button class="btn btn-primary w-100">{{__('Logout')}}</button>
            </form>
        </ul>
    </div>
</div>

