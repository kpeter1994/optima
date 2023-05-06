@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

            <div class="container">
                <div class="row p-lg-5">
                    <div class="pt-5">
                        <h1 class="fs-4 fw-bold mb-3">Optima Programok</h1>
                    </div>
                    <div class="col-md-6 col-xxl-3 mb-3 ">
                        <div class="bg-dark rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">F-Program</h2>
                            <div>
                                <img class="img-fluid" src="{{asset('/img/X-PROGRAM_KepUj.png')}}" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Akkor, ha a Fejlődési Zónában vagy…</p>
                                <a class="btn-program btn-continue-x" href="/program" data-progress="100"><i class="fa-solid fa-rotate-right me-3"></i>Újrakezdemt</a>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-3 mb-3">
                        <div class="f-program-cover rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">F-Program</h2>
                            <div>
                                <img class="img-fluid" src="{{asset('/img/f-program.png')}}" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Akkor, ha a Fejlődési Zónában vagy…</p>
                                <a class="btn-program btn-continue-f" href="/program" data-progress="68"><i class="fa-solid fa-play me-3"></i>Folytatom</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-3 mb-3">
                        <div class="bg-dark rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">O-Program</h2>
                            <div>
                                <img class="img-fluid" src="{{asset('/img/o-program.png')}}" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Akkor, ha a Fejlődési Zónában vagy…</p>
                                <a class="btn-program btn-continue-o" href="/program" data-progress="0"><i class="fa-solid fa-flag-checkered me-3"></i>Elkezdem a programot</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-3 mb-3">
                        <div class="bg-dark rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">V-Program</h2>
                            <div>
                                <img class="img-fluid" src="{{asset('/img/v-program.png')}}" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Akkor, ha a Fejlődési Zónában vagy…</p>
                                <a class="btn-program btn-continue-v" href="/program" data-progress="0"><i class="fa-solid fa-flag-checkered me-3"></i>Elkezdem a programot</a>
                            </div>

                        </div>

                    </div>
                    <div class="my-4 row p-2  display-flex justify-content-center">
                        <div class="col-xxl-10 bg-dark row p-4 rounded-3">
                            <h2 class="fs-4 fw-bold mb-3">Gyakori kérdések</h2>
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Mik az Optima Programok?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            Az Optima Programok online önsegítő programok, amelyek megkönnyíthetik az alkohol- és/vagy drogfogyasztási szokások alakítását és az életvitel egészségesebbé formálását.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-2" aria-expanded="false" aria-controls="panelsStayOpen-collapse-2">
                                            Miben segítenek az Optima Programok?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-2" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            <p>                                            Akár a szerhasználatról való leszokás, akár a józanságod megőrzése és a visszaesés elkerülése a szándékod, az Optima Programok segítségével páratlan lehetőséget kapsz arra, hogy megvalósítsd a célod.
                                            </p>
                                            <p>A megfelelő Optima Programnak köszönhetően folyamatosan tudhatod, hogy mit, mikor, hogyan és miért érdemes tenned annak érdekében, hogy elérhesd a kitűzött célod.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-3" aria-expanded="false" aria-controls="panelsStayOpen-collapse-3">
                                            Hogyan működnek az Optima Programok?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-3" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Az 1 hetes X-PROGRAM az önsegítéshez szükséges készségek fejlesztését célzó feladatok teljesítéséről szól.</li>
                                                <li>A 12 hetes Optima Programok keretében mindegyik hónap a változáshoz szükséges készségek fejlesztését célzó heti feladatok teljesítéséről szól.</li>
                                            </ul>
                                            <p>A feladatokat speciális útmutatók segítségével – a saját online felületedet használva – teljesítheted.</p>
                                            <p><i>Így válhatsz lépésről lépésre a viselkedésváltozás mesterévé, és nyerheted vissza a kontrollt a gondolataid, az érzéseid és a cselekedeteid felett!</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-4" aria-expanded="true" aria-controls="panelsStayOpen-collapse-4">
                                            A 12 hetes programok
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-4" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <strong>F-Program</strong> Fejlődés
                                                </li>
                                                <li>
                                                    <strong>O-Program</strong> Optimalizálódás
                                                </li>
                                                <li>
                                                    <strong>V-Program</strong> Veszélyelhárítás
                                                </li>
                                            </ul>
                                            <p>Azt, hogy melyik Optima Programra van szükséged, úgy állapíthatod meg, hogy kitöltöd az
                                                <a href="http://www.fuggosegkontroll.hu/" target="_blank">Optima Tesztet</a> (és ha szükséges, esetleg konzultálsz szakemberrel is).</p>
                                            <p>A teszt eredményéből tudhatod, melyik programot válaszd:</p>
                                            <ul>
                                                <li>Ha a teszt szerint a Fejlődési Zónában vagy, akkor az F-programot válaszd.</li>
                                                <li>Ha a teszt szerint az Optima-Zónában vagy, akkor az O-programot válaszd.</li>
                                                <li>Ha a teszt szerint a Veszélyzónában vagy, akkor a V-programot válaszd.</li>
                                            </ul>
                                            <p>Akármelyik programot használod, biztos lehetsz abban, hogy azzal nemcsak a saját javadat, hanem a veled kapcsolatban állók javát is szolgálod…</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-5" aria-expanded="true" aria-controls="panelsStayOpen-collapse-5">
                                            Mivel egészülnek ki az Optima Programok?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-5" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            <p>Az Optima Programokhoz használhatod az alábbi kiegészítő elemeket.</p>
                                            <ul>
                                                <li><b>Programnapló</b> A fejlődésed naplózásához</li>
                                                <li><b>Hangulatmonitor</b> A kedélyállapotod tudatosításához</li>
                                                <li><b>Sóvárgásmonitor</b> A sóvárgás megfigyelés alatt tartásához</li>
                                                <li><b>Józanságmonitor</b> A tiszta napjaid nyilvántartásához</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-6" aria-expanded="true" aria-controls="panelsStayOpen-collapse-6">
                                            Az Optima Programok teljesítését segítik még a következők is
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse-6" class="accordion-collapse collapse ">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Az Optima Online tudás- és eszköztára</li>
                                                <li>Az Optima Csoport teljes támogatása</li>
                                                <li>Az Optima Csapat segítő hozzáállása</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
