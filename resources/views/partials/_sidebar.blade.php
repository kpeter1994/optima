
<div class="inside-header bg-dark">

    <div class="d-flex justify-content-center align-items-center gap-3">
        <button class="open-sidebar rounded-pill fs-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars"></i></button>

        @include('partials._search')
    </div>

    <div class="d-flex flex-lg-row align-items-center gap-3">
        <a class="py-1 px-3 border-sober rounded-pill" href=""><i class="fa-solid fa-book  me-2"></i><span class="sober-days">15</span> napja józan</a>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="avatar me-3">
                    {{getFirstCharacter(getFirstName(Auth::user()->name))}}
                </div>
                <strong>{{getFirstName(Auth::user()->name)}}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Kijelentkezés') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>


</div>

<div id="color-changer"></div>

<div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 text-bg-dark show sidebar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"  style="width: 280px;">
    <div class="d-flex justify-content-between align-items-center">
    <a href="" class="d-flex align-items-center al mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="{{asset('/img/optima-logo.svg')}}" alt="">
    </a>
    <button type="button" class="btn-close bg-white rounded-pill p-2 d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <hr>
    <div class="mb-3 mobil-search-container">
        @include('partials._search')
    </div>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('member') }}" class="nav-link text-white {{ request()->is('member') ? 'active' : '' }}" aria-current="page">
                <i class="fa-solid fa-house me-2"></i>
                Főoldal
            </a>
        </li>
        <li>
            <a href="{{ route('programs') }}" class="nav-link text-white {{ request()->is('programs') ? 'active' : '' }}">
                <i class="fa-solid fa-diagram-project me-2"></i>
                Programok
            </a>
        </li>
        <li>
            <a href="{{ route('eloadsok') }}" class="nav-link text-white {{ request()->is('eloadsok') ? 'active' : '' }}">
                <i class="fa-solid fa-ticket me-2"></i>
                Előadások
            </a>
        </li>
        <li>
            <a href="/utmutatok" class="nav-link text-white {{ request()->is('utmutatok') ? 'active' : '' }}">
                <i class="fa-solid fa-compass me-2"></i>
                Útmutatók
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-book-open me-2"></i>
                Tudástár
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-book me-2"></i>
                Naptár
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-list-check me-2"></i>
                Teszt
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-brands fa-facebook me-2"></i>
                Csoport
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-star me-2"></i>
                Bonusz
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa-solid fa-newspaper me-2"></i>
                Blog
            </a>
        </li>
    </ul>
    <hr>
</div>



