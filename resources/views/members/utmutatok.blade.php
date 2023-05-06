@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

            <div class="container">
                <div class="row p-lg-5">
                    <div class="pt-5">
                        <h1 class="fs-4 fw-bold mb-3">Optima Programok</h1>
                    </div>
                    <div class="col-md-6 col-xxl-4 mb-3 ">
                        <div class="bg-dark rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">Útmutatások</h2>
                            <div>
                                <img class="img-fluid" src="https://optimatagsag.hu/images/uploads/K%C3%A9perny%C5%91fot%C3%B3%202021-02-19%20-%20du.%2011.13.49.png" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Terjedelmesebb olvasmányok</p>
                                <a class="btn-program btn-continue-x" href="/program" data-progress="100"><i class="fa-solid fa-rotate-right me-3"></i>Újrakezdemt</a>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-4 mb-3">
                        <div class="f-program-cover rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">Feladatlapok</h2>
                            <div>
                                <img class="img-fluid" src="https://optimatagsag.hu/images/uploads/Képernyőfotó 2021-02-19 - du. 11.15.43.png" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Önállóan elvégezhető gyakorlatok</p>
                                <a class="btn-program btn-continue-f" href="/program" data-progress="68"><i class="fa-solid fa-play me-3"></i>Folytatom</a>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-6 col-xxl-4 mb-3">
                        <div class="bg-dark rounded rounded-3">
                            <h2 class="p-2 m-0 fw-bold display-6 text-center">Optima Motiva</h2>
                            <div>
                                <img class="img-fluid" src="https://optimatagsag.hu/images/uploads/Képernyőfotó 2021-02-19 - du. 11.16.58.png" alt="">
                            </div>
                            <div class="p-2">
                                <p class="p-2 lead">Motivációs üzenetek</p>
                                <a class="btn-program btn-continue" href="/program" data-progress="0"><i class="fa-solid fa-flag-checkered me-3"></i>Elkezdem a programot</a>
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
