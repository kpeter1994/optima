<header class="d-flex justify-content-between pt-4 px-4">
    <a href="/" class="logo">
        @include('partials._logo')
    </a>
    <ul class="nav d-none d-xl-flex">
        <li class="nav-item">
            <a class="nav-link" href="/">Kezdőlap</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/programs">Programok</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Előadások</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/utmutatok">Útmutatók</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Tudásbázis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Napló</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Teszt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Csoport</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Bónusz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Hozzátartozóknak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
        </li>
        {{--<li class="nav-item">
            <button class="nav-link" id="color-changer">
                <i class="fa-solid fa-circle-half-stroke"></i>
            </button>
        </li>--}}
        <li class="nav-item ">
            <a class="nav-link" href="/login"><i class="fa-solid fa-user mx-2"></i>Belépés</a>
        </li>
    </ul>
    <button class="d-xl-none fs-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>



    <div class="offcanvas offcanvas-end d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" id="offcanvasWithBothOptions" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"  aria-labelledby="offcanvasScrollingLabel"  style="width: 280px;">
        <div class="d-flex justify-content-between align-items-center">
            <a href="" class="d-flex align-items-center al mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="{{asset('/img/optima-logo.svg')}}" alt="">
            </a>
            <button type="button" class="btn-close bg-white rounded-pill p-2 d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr>

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
                <a href="#" class="nav-link text-white">
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


</header>
