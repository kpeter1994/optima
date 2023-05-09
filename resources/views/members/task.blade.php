@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

        <div class="container px-0 pt-6 mb-3">
            <div class="p-2 p-lg-5 program-cover f-program-cover">
               <h1 class="fw-bold">A függőség jellemzőinek megismerése</h1>
                <nav class="text-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">F-Program</a></li>
                        <li class="breadcrumb-item text-light">1.hónap</li>
                        <li class="breadcrumb-item text-light">1.hét</li>
                        <li class="breadcrumb-item text-light" >1.feladat</li>
                    </ol>
                </nav>
                <div class="video-responsive">
                    <iframe src="https://player.vimeo.com/video/260425083?h=b1750978dd"   allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="mb-3">
                    <p class="fw-bold fst-italic">Ebben a feladatban...</p>
                    <ul class="fst-italic">
                        <li>Megismered a függőség meghatározását, hogy pontosan tudd, mivel is állsz szemben.</li>
                        <li>Rálátást nyersz a függőség főbb ismérveire, és megállapíthatod, melyek érvényesülnek a te esetedben.</li>
                        <li>Megtudod, milyen típusai léteznek a függőségnek.</li>
                        <li>Áttekintést kapsz a függőség különböző szakaszairól.</li>
                        <li>Ismereteket szerzel arról, hogy milyen intenzitású lehet a függőség, hogy kiderítsd, milyen is a <span style="text-decoration: underline;">saját</span> függőséged.</li>
                    </ul>
                    <p>Olvasd el a szöveget, válaszold meg a kérdéseket, majd jegyzetek formájában rögzítsd magadnak a számodra tanulságos információkat és a saját észrevételeidet.</p>
                </div>
                <div class="mb-3">
                    <p class="fw-bold  text-uppercase">1. A függőség meghatározása</p>
                    <p>Függőségnek nevezzük azt a kóros szokásgyakorlást (szerhasználatot vagy viselkedésmódot), amely kényszeressé, kontrollálhatatlanná és dominánssá válva, káros biológiai, pszichológiai és szociálist hatást gyakorol az érintett – és mások – életére. </p>
                    <p>Fontos hangsúlyozni, hogy a függőség természete összetett: mind a kialakulását, mind a következményeit tekintve testi, lelki és társas szinten is megnyilvánul! </p>
                </div>
                <div class="mb-3">
                    <p class="fw-bold  text-uppercase">1. A függőség ismérvei</p>
                    <ul>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                        <li>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</li>
                    </ul>
                </div>
                <div class="mb-3 card bs-none p-2 p-lg-4">
                    <p class="fw-bold lead">Te mely ismérvek érvényesülését tapasztaltad már magadon?</p>
                    <div class="task-check">
                        <label for="q1">
                            <input id="q1" type="checkbox">
                            <span>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</span>
                        </label>
                        <label for="q2">
                            <input id="q2" type="checkbox">
                            <span>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</span>
                        </label>
                        <label for="q3">
                            <input id="q3" type="checkbox">
                            <span>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</span>
                        </label>
                        <label for="q4">
                            <input id="q4" type="checkbox">
                            <span>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</span>
                        </label>
                        <label for="q5">
                            <input id="q5" type="checkbox">
                            <span>A szokás gyakorlása kóros fizikai és/vagy pszichés hozzászokást eredményez.</span>
                        </label>

                    </div>


                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="min-height: 300px"></textarea>
                        <label for="floatingTextarea">Saját Jegyzetek</label>
                    </div>
                </div>
                <div class="mb-3">
                    <hr>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ha a feladatot elvégezted, jelöld be a négyzetet!
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="" class="btn btn-primary">Vissz a feldatokhoz</a>
                    </div>
                </div>
            </div>




        </div>


        @include('partials._footer')
    </main>
@endsection

@section('scripts')
    <script>
        let programBtns = document.querySelectorAll('.btn-program')



        programBtns.forEach(function (programBtn, i){
            let btnProgress = programBtn.getAttribute('data-progress')
            console.log('A btn progress' + btnProgress)
            console.log(i)
            programBtn.style.setProperty('--after-bg-'+i, btnProgress + '%');
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

@endsection
