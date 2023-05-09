@extends('layouts.members-layout')

@section('content')
    <main id="main d-flex">
        @include('partials._sidebar')
        <section id="trailers" class="">
            <div class="space-filler"></div>
            <div class="container-90 p-lg-3">
                <div class="pt-lg-6 d-flex justify-content-center gap-1 justify-content-lg-start">
                    <a class="category-btn active-category" href="">Eredeti Előadások</a>
                    <a class="category-btn" href="">Segítő Előadások</a>
                </div>

                    <div class="row m-0 pt-3 pt-lg-5 video-list px-3">
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




    </script>
@endsection
