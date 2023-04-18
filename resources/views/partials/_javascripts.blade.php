@yield('scripts')
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            // Ha az ablak szélessége legalább 768px
            1000: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // Ha az ablak szélessége legalább 1024px
            1350: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        },

        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script src="{{asset('/js/script.js')}}"></script>
