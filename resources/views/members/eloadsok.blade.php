@extends('layouts.members-layout')

@section('content')
    <main id="main d-flex">
        @include('partials._sidebar')
        <section id="trailers" class="">
            <div class="container-90 p-lg-3">
                <div class="pt-6">
                    <a class="category-btn active-category" href="">Eredeti Előadások</a>
                    <a class="category-btn" href="">Segítő Előadások</a>
                </div>

                    <div class="row mt-5 video-list">
                        <h1 class="text-white fw-bolder display-5">Eredeti előadások</h1>
                        <p>52 előadás a felépüés zónáiról és eszközeiről...</p>
                        @foreach($videos as $video)
                            <div class="px-2 py-4 col-12 col-md-6 col-lg-4 col-xxl-3 video">
                                <a class="swiper-slide" href="{{$video->link}}">
                                    <img src="{{$video->img}}" alt="">
                                    <div class="swiper-content card-description">
                                        <p>{{$video->title}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>

                    </div>



        @include('partials._footer')
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', () => {
            const videoList = document.querySelector('.video-list');
            const videoListHeight = videoList.offsetHeight;
            const scrollTop = document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const distanceFromBottom = videoListHeight - (scrollTop + windowHeight);

            if (distanceFromBottom <= 0) {
                const nextPageUrl = "{{ $nextPageUrl }}";
                if (nextPageUrl) {
                    fetch(nextPageUrl)
                        .then(response => response.text())
                        .then(html => {
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(html, 'text/html');
                            const newVideos = doc.querySelectorAll('.video-list .video');

                            newVideos.forEach(video => {
                                videoList.appendChild(video);
                            });

                            const newNextPageUrl = doc.querySelector('.pagination .next a');
                            if (newNextPageUrl) {
                                const link = document.createElement('a');
                                link.setAttribute('href', newNextPageUrl.getAttribute('href'));
                                link.innerHTML = 'Továbbiak betöltése';
                                videoList.appendChild(link);
                            }
                        });
                }
            }
        });
    </script>
    <script>
        let offcanvas = document.getElementById('offcanvasScrolling')
        let main = document.getElementsByTagName('main')[0]
        let toggle = document.querySelector(".open-sidebar")
        let insideHeader = document.querySelector('.inside-header')

        if (localStorage.getItem('isOpen') === 'true') {
            main.classList.add('main-ms-280');
            offcanvas.classList.add('show');
            insideHeader.classList.add('header-w-not-full')
        } else {
            main.classList.remove('main-ms-280');
            offcanvas.classList.remove('show');
            insideHeader.classList.add('header-w-full')
        }

        toggle.addEventListener('click', function () {
            main.classList.add('main-animation');
            main.classList.toggle('main-ms-280');
            offcanvas.classList.toggle('show');
            insideHeader.classList.toggle('header-w-not-full')
            insideHeader.classList.toggle('header-w-full')
            localStorage.setItem('isOpen', offcanvas.classList.contains('show'));
        });

        let soberDays = document.querySelector('.sober-days')
        soberDays = parseInt(soberDays.textContent)
        const root = document.documentElement;

        function addAvatarColor (soberDays){
            let red = 0
            let green = 100
            let blue = 255
            if (soberDays < 155){
                green = green + soberDays
            }else if (soberDays > 155 && soberDays < 410 ){
                green = 255
                blue = blue - (soberDays - 155)
            }else if(soberDays > 410){
                green = 255
                blue = 0
            }


            let avatarColor = `rgb(${red},${green},${blue})`

            return avatarColor
        }

        console.log(soberDays)
        root.style.setProperty('--avatar-color',addAvatarColor(soberDays))

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
