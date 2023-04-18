@extends('layouts.members-layout')

@section('content')
    <main id="main d-flex">
        @include('partials._sidebar')

        <section class="video-section position-relative">
            <div class="container-90 ">
                <div class="row m-0">
                    <div class="col-lg-9 news-container">
                        {{--<div class="starting-video-container">
                            <h1 class="text-white fw-bolder display-5">Személyes üdvözlet</h1>
                            <div class="video-responsive">
                                <iframe class="starting-video" title="vimeo-player" src="https://player.vimeo.com/video/783452115?h=70e653bea6"  frameborder="0"    allowfullscreen></iframe>
                            </div>
                        </div>--}}
                        <div class="news-feed">
                            <div class="feed-card">
                                <div class="feed-card-content">
                                    <small class="text-body-secondary fw-bolder"><i class="fa-regular fa-clock me-2"></i>20 perce</small>
                                </div>
                                <div class="img-container">
                                    <img src="https://optimatagsag.hu/images/uploads/feed/LIVE_23_0414.png" alt="">
                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                                </div>
                                <div class="feed-footer">
                                    <div class="feed-card-content">
                                        <a class="feed-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="feed-card">
                                <div class="feed-card-content">
                                    <small class="text-body-secondary fw-bolder"><i class="fa-regular fa-clock me-2"></i>1 napja</small>
                                </div>
                                <div class="img-container">
                                    <img src="https://optimatagsag.hu/images/uploads/feed/XProgPromo.png" alt="">
                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                                </div>
                                <div class="feed-footer">
                                    <div class="feed-card-content">
                                        <a class="feed-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="feed-card">
                                <div class="feed-card-content">
                                    <span class="small fw-bolder"><i class="fa-regular fa-clock me-2"></i>2023. árpilis. 02.</span>
                                </div>
                                <div class="img-container">
                                    <img src="https://optimatagsag.hu/images/uploads/feed/OptimaTalalkozo28.png" alt="">
                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                                </div>
                                <div class="feed-footer">
                                    <div class="feed-card-content">
                                        <a class="feed-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="feed-card">
                                <div class="feed-card-content">
                                    <span class="small fw-bolder"><i class="fa-regular fa-clock me-2"></i>2023. árpilis. 25.</span>
                                </div>
                                <div class="img-container">
                                    <img src="https://optimatagsag.hu/images/uploads/feed/LIVE_23_0414.png" alt="">
                                    <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                                </div>
                                <div class="feed-footer">
                                    <div class="feed-card-content">
                                        <a class="feed-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 right-dashboard">
                        <div class="position-fixed">
                            <h2 class="fw-bolder display-6 mb-3">Legutóbb nézett</h2>
                                <a href="" class="video-card row mb-3 ">
                                    <div class="col-xxl-5">
                                        <div class="img-container">
                                            <img  src="https://optimatagsag.hu/images/uploads/K%C3%A9perny%C5%91fot%C3%B3%202022-01-09%20-%20du.%208.33.00.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xxl-7 d-flex flex-column mt-3 mt-xxl-0  justify-content-between">
                                        <h5 class="">Miért legyél józan? Lorem ipsum dolor sit amet, consectetur. </h5>
                                        <span class=" text-end text-xxl-start">2 napja</span>
                                    </div>

                                </a>
                                <a href="" class="video-card row mb-3 ">
                                <div class="col-xxl-5">
                                    <div class="img-container">
                                        <img  src="https://optimatagsag.hu/images/uploads/K%C3%A9perny%C5%91fot%C3%B3%202022-01-09%20-%20du.%208.33.00.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-7 d-flex flex-column mt-3 mt-xxl-0  justify-content-between">
                                    <h5 class="">Miért legyél józan? Lorem ipsum dolor sit amet, consectetur. </h5>
                                    <span class=" text-end text-xxl-start">2 napja</span>
                                </div>

                            </a>
                                <a href="" class="video-card row mb-3 ">
                                <div class="col-xxl-5">
                                    <div class="img-container">
                                        <img  src="https://optimatagsag.hu/images/uploads/K%C3%A9perny%C5%91fot%C3%B3%202022-01-09%20-%20du.%208.33.00.png" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-7 d-flex flex-column mt-3 mt-xxl-0  justify-content-between">
                                    <h5 class="">Miért legyél józan? Lorem ipsum dolor sit amet, consectetur. </h5>
                                    <span class=" text-end text-xxl-start">2 napja</span>
                                </div>

                            </a>

                            <h2 class="fw-bolder display-6 mb-3">Program folytatása</h2>

                            <a href="" class="program-card row mb-3 ">
                                <div class="col-xxl-3">
                                    <div class="img-container">
                                        <img  src="{{asset('/img/X-PROGRAM_KepUj.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-9 d-flex flex-column mt-3 mt-xxl-0  justify-content-between">
                                    <h5 class="">1. hónap - 2. hét | RÁHANGOLÓDÁS - Önvizsgálat </h5>
                                    <span class=" text-end text-xxl-start">2 napja</span>
                                </div>

                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </section>




        @include('partials._footer')
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>


    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var inputs = document.querySelectorAll('input[name="query"]');
            inputs.forEach((input) => {
                if (input.style.display !== 'none') { // Az eseménykezelő csak akkor hajtódik végre, ha az elem display tulajdonsága nem 'none'
                    input.addEventListener('blur', function() { // Az input esemény helyett a blur eseményre kell figyelni
                        var results = document.querySelectorAll('.results');
                        results.forEach((result) => {
                            if (result.style.display !== 'none') { // Az eredmények csak akkor jelennek meg, ha az elem display tulajdonsága nem 'none'
                                result.innerHTML = ''; // A találatok törlése az eredmények tartalmából
                            }
                        })

                    });

                    input.addEventListener('input', function() {
                        var query = input.value;
                        if (query.length >= 2) {
                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', '/search?query=' + query);
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    var data = JSON.parse(xhr.responseText);
                                    var results = document.querySelectorAll('.results');
                                    results.forEach((result) => {
                                        if (result.style.display !== 'none') { // Az eredmények csak akkor jelennek meg, ha az elem display tulajdonsága nem 'none'
                                            result.innerHTML = '';
                                            data.forEach(function(video) {
                                                var a = document.createElement('a');
                                                a.textContent = video.title;
                                                a.href = video.link;
                                                a.classList.add('list-group-item')
                                                result.appendChild(a);
                                            });
                                        }
                                    })

                                }
                            };
                            xhr.send();
                        }
                    });
                }
            });
        });


    </script>
@endsection
