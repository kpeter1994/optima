@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

            <div class="container pt-6 mb-3">
                <div class="p-lg-5 program-cover f-program-cover">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 p-4 d-flex flex-column gap-2 justify-content-center align-items-center order-1 order-lg-0">
                        <div>
                            <h1 class="fw-bold text-center text-lg-start">Optima F-program</h1>
                            <h5 class="card-title text-center text-lg-start py-3" title="1. nap">
                                1. hónap - 1. hét<br>
                                <small>RÁHANGOLÓDÁS – Ismeretszerzés</small>
                            </h5>
                            <span>Folytatás:</span>
                            <div   class="text-center text-lg-start">
                                <a class="btn btn-primary" href=""><i class="fa-solid fa-play me-2"></i>
                                    2. Feladat: A szerfüggőség okainak megismerése
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-xl-6 d-flex justify-content-center order-0 order-lg-1 ">
                        <div class="mt-3 d-flex flex-lg-column gap-2 flex-wrap p-2">
                            <!-- Button trigger modal -->
                            <button class="btn btn-info btn-sm"><i class="fa-solid fa-circle-info me-2"></i>Program ismertető</button>
                            <button class="btn btn-secondary btn-sm">Program Napló</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Hangulatmonitor
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Sóvárgásmonitor
                            </button>
                            <a class="btn btn-secondary btn-sm" href="">Józanságmonítor</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hangulatmonitor</h1>
                                    <button type="button" class="btn-close bg-white rounded rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="lead">Milyen az általános hangulatom?</p>
                                    <div class="row">
                                        <div class="col-4 p-3 d-flex flex-column gap-1 justify-content-center align-items-center">Jó<i class="fa-regular fa-face-smile-beam fs-3"></i></div>
                                        <div class="col-4 p-3 d-flex flex-column gap-1 justify-content-center align-items-center">Semleges<i class="fa-solid fa-face-meh fs-3"></i></div>
                                        <div class="col-4 p-3 d-flex flex-column gap-1 justify-content-center align-items-center">Rossz<i class="fa-solid fa-face-frown fs-3"></i></div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                                    <button type="button" class="btn btn-primary">Mentés</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hangulatmonitor</h1>
                                    <button type="button" class="btn-close bg-white rounded rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="lead">Milyen az általános hangulatom?</p>
                                    <div class="row">
                                        <div class="p-3 d-flex  gap-1  align-items-center"><i class="fa-regular fa-face-smile-beam fs-3"></i>Jó</div>
                                        <div class="p-3 d-flex  gap-1  align-items-center"><i class="fa-solid fa-face-meh fs-3"></i>Semleges</div>
                                        <div class="p-3 d-flex  gap-1  align-items-center"><i class="fa-solid fa-face-frown fs-3"></i>Rossz</div>
                                        <div class="p-3 d-flex  gap-1  align-items-center"><i class="fa-solid fa-face-frown fs-3"></i>Rossz</div>
                                        <div class="p-3 d-flex  gap-1  align-items-center"><i class="fa-solid fa-face-frown fs-3"></i>Rossz</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                                    <button type="button" class="btn btn-primary">Mentés</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                        <div class="m-xl-3">
                            <div class="col-xxl-10 offset-xxl-1  row p-4 rounded-3 ">
                                <h2 class="fs-4 fw-bold mb-3">Program tartalma</h2>
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="my-3 d-flex justify-content-between">
                                        <span class="bg-secondary text-white p-2 rounded rounded-1 me-2"><i class="fa-solid fa-calendar-days me-2"></i>1. hónap </span>
                                        <button class="btn btn-info p-2"><i class="fa-solid fa-circle-info me-2"></i>Hónap ismertető</button>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panel-1" aria-expanded="true" aria-controls="panel-1">
                                                <span>1.hét -</span>RÁHANGOLÓDÁS - Ismeretszerzés<i class="ms-3 fa-solid fa-check"></i>
                                            </button>
                                        </h2>
                                        <div id="panel-1" class="accordion-collapse collapse ">
                                            <div class="accordion-body">
                                                <p> Akár a szerhasználatról való leszokás, akár a józanságod megőrzése és a visszaesés elkerülése a szándékod, az Optima Programok segítségével páratlan lehetőséget kapsz arra, hogy megvalósítsd a célod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panel-2" aria-expanded="true" aria-controls="panel-2">
                                                <span>2.hét -</span>RÁHANGOLÓDÁS – Önvizsgálat<i class="ms-3 fa-solid fa-check"></i>
                                            </button>
                                        </h2>
                                        <div id="panel-2" class="accordion-collapse collapse" data-bs-parent="#accordionPanelsStayOpenExample">
                                            <div class="accordion-body">
                                                <p> Akár a szerhasználatról való leszokás, akár a józanságod megőrzése és a visszaesés elkerülése a szándékod, az Optima Programok segítségével páratlan lehetőséget kapsz arra, hogy megvalósítsd a célod.
                                                </p>
                                                <p>A megfelelő Optima Programnak köszönhetően folyamatosan tudhatod, hogy mit, mikor, hogyan és miért érdemes tenned annak érdekében, hogy elérhesd a kitűzött célod.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#panel-3" aria-expanded="true" aria-controls="panel-3">
                                                <span>3.hét -</span>RÁHANGOLÓDÁS – Önelfogadás<i class="ms-3 fa-solid fa-check"></i>
                                            </button>
                                        </h2>
                                        <div id="panel-3" class="accordion-collapse collapse ">
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
                                            <button class="accordion-button fw-bold text-dark bg-primary rounded rounded-1" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-4" aria-expanded="true" aria-controls="panelsStayOpen-collapse-4">
                                                <span>4.hét -</span>RÁHANGOLÓDÁS – Önmotiválás<i class="ms-3 fa-solid fa-unlock"></i>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse-4" class="accordion-collapse collapse ">
                                            <div class="accordion-body d-flex flex-column">
                                                <a class="btn btn-info mb-2" href="">
                                                    <i class="fa-solid fa-play me-2"></i>
                                                    Videó: Heti ismertető

                                                </a>
                                                <a class="btn btn-outline-success mb-2 " href="/task">
                                                    <i class="fa-solid fa-list-check me-3"></i>
                                                    1. Feladat: A függőség jellemzőinek megismerése

                                                </a>
                                                <a class="btn btn-outline-success mb-2 " href="/task">
                                                    <i class="fa-solid fa-list-check me-3"></i>
                                                    2. Feladat: A függőség jellemzőinek megismerése

                                                </a>
                                                <a class="btn btn-outline-info mb-2 " href="/task">
                                                    <i class="fa-solid fa-list-check me-3"></i>
                                                    3. Feladat: A függőség jellemzőinek megismerése

                                                </a>
                                                <a class="btn btn-outline-info opacity-50 mb-2" href="/task">
                                                    <i class="fa-solid fa-list-check me-3"></i>
                                                    4. Feladat: A függőség jellemzőinek megismerése

                                                </a>
                                                <a class="btn btn-outline-info opacity-50 mb-2" href="/task">
                                                    <i class="fa-solid fa-list-check me-3"></i>
                                                    4. Feladat: VISSZATEKINTÉS

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <span class="bg-secondary text-white p-2 rounded rounded-1 me-2 opacity-50"><i class="fa-solid fa-calendar-days me-2"></i>2. hónap </span>
                                    </div>
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-5" aria-expanded="true" aria-controls="panelsStayOpen-collapse-5">
                                                5. hét -MEGALAPOZÁS – Önmegerősítés<i class="ms-3 fa-solid fa-lock"></i>
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
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-6" aria-expanded="true" aria-controls="panelsStayOpen-collapse-6">
                                                6. hét -MEGALAPOZÁS – Önmegerősítés <i class="ms-3 fa-solid fa-lock"></i>
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
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-7" aria-expanded="true" aria-controls="panelsStayOpen-collapse-7">
                                                7. hét - MEGALAPOZÁS – Önmegerősítés <i class="ms-3 fa-solid fa-lock"></i>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse-7" class="accordion-collapse collapse ">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Az Optima Online tudás- és eszköztára</li>
                                                    <li>Az Optima Csoport teljes támogatása</li>
                                                    <li>Az Optima Csapat segítő hozzáállása</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-8" aria-expanded="true" aria-controls="panelsStayOpen-collapse-8">
                                                8. hét
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
                                    <div class="my-3">
                                        <span class="bg-secondary text-white p-2 rounded rounded-1 me-2 opacity-50"><i class="fa-solid fa-calendar-days me-2"></i>3. hónap </span>
                                    </div>
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-9" aria-expanded="true" aria-controls="panelsStayOpen-collapse-9">
                                                9. hét
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
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-9" aria-expanded="true" aria-controls="panelsStayOpen-collapse-9">
                                                9. hét
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
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-9" aria-expanded="true" aria-controls="panelsStayOpen-collapse-9">
                                                9. hét
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
                                    <div class="accordion-item opacity-50">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-9" aria-expanded="true" aria-controls="panelsStayOpen-collapse-9">
                                                9. hét
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
