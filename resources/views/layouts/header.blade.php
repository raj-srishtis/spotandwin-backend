<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        @guest
        @else
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @php $route = Route::currentRouteName(); @endphp
                        <a class="nav-link {{ ($route == 'dashboard.index')?'active':'' }}" aria-current="page" href="{{route('dashboard.index')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($route == 'dashboard.participantsList')?'active':'' }}" href="{{route('dashboard.participantsList')}}">Participants List</a>
                    </li>
                </ul>
            </div>
        @endguest
    </div>
 </nav>
 @guest
 @else
 <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-person-circle"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end">
       <li>
            <button class="dropdown-item" type="button">
                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </button>
       </li>
    </ul>
 </div>
 @endguest