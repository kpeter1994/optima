@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

            <div class="container pt-6">
                <div class="p-lg-5 program-cover f-program-cover">
                <div class="row">
                    <div class="col-lg-6 p-4 d-flex flex-column gap-2 justify-content-center align-items-center order-1 order-lg-0">
                        <div>
                            <h1 class="fw-bold text-center text-lg-start">Optima F-program</h1>
                            <p class="lead text-center text-lg-start">Akkor ha a fejlődési zónában vagy...</p>
                            <div class="text-center text-lg-start">
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Összefoglaló videó megnézése</button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered ">
                                <div class="modal-content bg-dark">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">F program</h1>
                                        <button type="button" class="btn-close bg-white rounded rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Video
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex justify-content-center order-0 order-lg-1 ">
                        <img class="img-fluid" src="{{'/img/o-program.png'}}" alt="">
                    </div>
                </div>
            </div>

                <div class="py-5">
                    <div class="row  m-0">
                        <div class="col-lg-6 col-xxl-8 p-0 p-lg-2">
                            <div class="bg-dark card p-4 p-lg-5">
                            <p class="lead fw-bold mt-3 text-center text-lg-start">Ha a fejlősédi zónában vagy...</p>
                            <ul class="list-unstyled text-light">
                                <li class="d-flex gap-3 mb-3">
                                    <i class="p-1 fa-solid fa-arrow-right text-primary fs-5"></i>
                                    <p class="lead">Ha a Fejlődési Zónában vagy, akkor megvan benned a szándék arra, hogy felhagyj az alkohol- és/vagy a kábítószerek fogyasztásával, de az is lehet, hogy egy ideje már nem is iszol alkoholt, és/vagy nem használsz kábítószert.</p>
                                </li>
                                <li class="d-flex gap-3 mb-3">
                                    <i class="p-1 fa-solid fa-arrow-right text-primary fs-5"></i>
                                    <p class="lead">Minden valószínűség szerint azzal is tisztában vagy, hogy a józanná válás, a józan életvitel kialakítása érdekében még számos fontos döntést szükséges meghoznod, és sok mindent érdemes megtenned.</p>
                                </li>
                                <li class="d-flex gap-3 mb-3">
                                    <i class="p-1 fa-solid fa-arrow-right text-primary fs-5"></i>
                                    <p class="lead">Bármennyire erős is benned a szándék arra, hogy tartósan leszokj az alkohol- és/vagy szerfogyasztásról, és józan életet élj, fontos tudnod, hogy a szándék önmagában nem elég. </p>
                                </li>
                                <li class="d-flex gap-3 mb-3">
                                    <i class="p-1 fa-solid fa-arrow-right text-primary fs-5"></i>
                                    <p class="lead">Az életviteled megváltoztatása egy olyan dolog, amely alapos felkészülést és célirányos cselekvést igényel.</p>
                                </li>
                                <li class="d-flex gap-3 mb-3">
                                    <i class="p-1 fa-solid fa-arrow-right text-primary fs-5"></i>
                                    <p class="lead">Mindezekkel összefüggésben az F-Program abban segít neked, hogy a változásra tudatosan ráhangolódva, képes legyél elengedni a függőségedet erősítő szokásaidat, és kialakítani azokat a szokásokat, amelyek megalapozzák a tartós józanságodat.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 p-0 p-lg-2">
                            <div class="p-4 p-lg-5 card bg-dark">
                                <p class="lead fw-bold mt-3 text-center text-lg-start">Az F-program szakaszai</p>
                                <ul class="list-unstyled">
                                    <li class="d-flex gap-2 mb-3">
                                            <i class="fa-solid fa-calendar-days calendar-icon"></i>
                                        <div>
                                            <h3 class="fs-5"> 1. hónap: Ráhangolódás</h3>
                                            <ul class="text-light-color">
                                                <li>Megalapozás</li>
                                                <li>(Régi szokások leépítése)</li>
                                                <li>Önmegerősítéssel</li>
                                                <li>Elköteleződéssel</li>
                                                <li>Kockázatkezeléssel</li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li class="d-flex gap-2 mb-3">
                                        <i class="fa-solid fa-calendar-days calendar-icon"></i>
                                        <div>
                                            <h3 class="fs-5"> 2. hónap: Ráhangolódás</h3>
                                            <ul class="text-light-color">
                                                <li>Megalapozás</li>
                                                <li>(Régi szokások leépítése)</li>
                                                <li>Önmegerősítéssel</li>
                                                <li>Elköteleződéssel</li>
                                                <li>Kockázatkezeléssel</li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li class="d-flex gap-2 mb-3">
                                        <i class="fa-solid fa-calendar-days calendar-icon"></i>
                                        <div>
                                            <h3 class="fs-5"> 3. hónap: Ráhangolódás</h3>
                                            <ul class="text-light-color">
                                                <li>Megalapozás</li>
                                                <li>(Régi szokások leépítése)</li>
                                                <li>Önmegerősítéssel</li>
                                                <li>Elköteleződéssel</li>
                                                <li>Kockázatkezeléssel</li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                            </div>


                        </div>
                        <div class="col-lg-12 mt-4 p-0">
                            <div class="p-4 p-lg-5 card bg-dark">
                                <p class="text-warning text-center text-lg-start">Jelenleg folyamatban van egy másik program teljesítése! Azonos időben csak 1 program teljesíthető.  Ha most ezt az új programot elkezded, akkor a másik program leáll, és a későbbiekben csak akkor teljesítheted, ha újrakezded. </p>
                               <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                           Tudomásul veszem, hogy törlésre kerül a következő program: X-Program
                                       </label>
                                   </div>
                                   <div class="mt-3">
                                       <a class="btn btn-primary" href="/program-f">Elkezdem az F-programot</a>
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
