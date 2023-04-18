@extends('layouts.main')

@section('class')
    bg-fixed-image
@endsection

@section('content')

    <section class="hero hero-bgc-img">
        <div class="container px-lg-5">
            <div class="hero-content">
                <span class="optima-title">OPTIMA ONLINE</span>
                <h1>Segítőfelület függőknek</h1>
                <p class="text-lg text-lg">Szeretnél kevesebb alkoholt fogyasztani? Jó lenne kevesebb szert  használni? <br>Le akarsz szokni?
                    <br>Ez a tudás- és eszköztár segít a céljaidat megvalósítani!</p>
                <a href="/register" class="btn btn-primary">Próbáld ki ingyen</a>
                <a class="btn-more" href="/rolunk">Tudj meg többet <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <section class="py-lg-5" id="promo-video">
        <div class="container d-flex justify-content-center px-lg-5">
            <div class="card bg-dark bg-gradient mb-3 overflow-hidden" >
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body p-card">
                            <h5 class="card-title display-2 text-center text-lg-start">Többet nyersz,<br> mint gondolnád...</h5>
                            <p class="card-text text-center text-lg-start lead">Ha te is szeretnél jobban élni, érdemes végiggondolnod, hogy az ivási és/vagy a szerhasználati
                                szokásaid megváltoztatása ebben hogyan tud neked segíteni.</p>
                            <p class="card-text text-center text-lg-start lead">Nem akarsz bajba kerülni… Nem akarsz szégyenkezni… Nem akarsz szenvedni…</p>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative video-img ">
                        <img src="img/video-hero.jpg" class="img-fluid rounded-end" alt="...">
                        <button type="button" class="play-btn text-white play" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-black">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nem kell, hogy szar legyen!</h1>
                            <button type="button" class="btn-close bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-black video-responsive">
                            <iframe src="https://player.vimeo.com/video/810970596?h=c4b2d80def" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            <p><a href="https://vimeo.com/810970596">Homesick</a> from <a href="https://vimeo.com/wolflight">Will Seefried</a> on <a href="https://vimeo.com">Vimeo</a>.</p>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-p ">
        <div class="container px-lg-5">
            <h2 class="display-2 text-white text-center mb-4">Optima Blog</h2>
            <div class="grid-container">
                <div class="grid-card">
                    <img src="https://optimatagsag.hu/storage/canvas/images/bbvCl6ohz7C50YFC96tbHhxqBOyUtvCRnMsIBuBP.webp" alt="/blog/iszik-a-ferjem">
                    <div class="blog-card-content ">
                        <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                        <br>
                        <a class="article-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                        <p class="d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                    </div>
                </div>
                <div class="grid-card">
                    <img src="https://optimatagsag.hu/storage/canvas/images/MRlWTAqJ4tMjIkK7Cc0rFj2mw8ngVQj5ZlR8s7Rd.png" alt="/blog/iszik-a-ferjem">
                    <div class="blog-card-content">
                        <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                        <br>
                        <a class="article-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                    </div>
                </div>
                <div class="grid-card">
                    <img src="https://optimatagsag.hu/storage/canvas/images/zXTHbu9aUvHYbZ7mtBHMhXb5Am640fcHYMx50vH5.png" alt="">
                    <div class="blog-card-content">
                        <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                        <br>
                        <a class="article-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                    </div>
                </div>
                <div class="grid-card">
                    <img src="https://optimatagsag.hu/storage/canvas/images/59bTf9TVZmi5rWBeDaL8T08dMxAakIzIzbBhMIBC.png" alt="">
                    <div class="blog-card-content">
                        <a href="#" class="badge text-bg-secondary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Alkohol</a>
                        <br>
                        <a class="article-title underline-animation" href="">Változni, hogy az "értékeiddel" összhangba tudj kerülni..</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae tem.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="bg-dark green-light">
        <div class="container p-lg-5">
            <div class="row  p-2 p-lg-3">
                <div class="col-lg-6 d-flex flex-column justify-content-center p-2 p-lg-5">
                    <div class="text-primary fs-1 text-center text-lg-start">
                        <i class="fa-solid fa-hand-holding-medical"></i>
                    </div>
                    <h2 class="display-2 text-white text-center text-lg-start">Hogyan segít <br> az Optima Online?</h2>
                    <p class=" lead text-center text-lg-start">
                        Az Optima Online az a tudás- és eszköztár, amelynek minden eleme arra szolgál, hogy az
                        alkohollal és/vagy a szerekkel kapcsolatos kihívások teljesítését számodra megkönnyítse:
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/rolunk" class="btn btn-outline-primary">Tudj meg többet</a>
                    </div>
                </div>
                <img class="col-lg-6 img-fluid p-2 p-lg-5" src="img/hogyan-segit.png" alt="">
            </div>

        </div>
    </section>
    <section id="trailers" class="mt-5">
        <div class="container p-lg-5">
            <h2 class="display-2 text-white mb-3 text-center text-lg-start mb-3">Videók a videótárból</h2>
            <div class="swiper mySwiper">
                <h3 class="display-6">Előadások érintetteknek</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-3.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-1.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-2.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-3.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper mySwiper">
                <h3 class="display-6">Útmutatások hozzátartozóknak</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-2.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-1.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-2.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-3.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper mySwiper">
                <h3 class="display-6">Beszélgetések mindenkinek</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-4.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-1.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-2.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src="img/trailers/trailer-3.jpg" alt="">
                        <div class="swiper-content">
                            <p>Amit a hagyományos terápián nem mondanak el a családnak...</p>
                            <a class="video-btn" href="">Belenézek<i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    @include('partials._CTA')
@endsection

@section('scripts')
    <script src="https://player.vimeo.com/api/player.js"></script>
    <script>
        let player = new Vimeo.Player(document.querySelector('iframe'));
        let playBtns = document.querySelectorAll('.play')
        let closeBtns = document.querySelectorAll('.btn-close')

        playBtns.forEach(playBtn => {
            playBtn.addEventListener('click', function (event){
                event.stopPropagation()
                player.play()
            })
        })

        closeBtns.forEach(closeBtn => {
            closeBtn.addEventListener('click', function (){
                player.pause()
            })
        })

        document.addEventListener('click', function (event){
            let modalContents = document.querySelectorAll('.modal-content')

            modalContents.forEach(modalContent => {
                if (modalContent !== event.target && !modalContent.contains(event.target)){
                    player.pause()
                }
            })
        })


    </script>
@endsection
