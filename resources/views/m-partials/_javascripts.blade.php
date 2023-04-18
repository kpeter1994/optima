@yield('scripts')

<script>
    /*main-content padding*/
    let mainContent = document.querySelector('.main-content')
    let footer = document.querySelector('.footer')
    let toggle = document.querySelector('.toggle')
    let navigation = document.querySelector('.navigation')
    let dropdown = document.querySelector('.dropdown')
    let header = document.querySelector('.header')

    function removeClassOnResize() {
        if (window.innerWidth > 600) {
            navigation.classList.add('active');
        }
    }

    function getMainContentPadding(){
        if (navigation.classList.contains('active')){
            mainContent.classList.add('main-content-p')
            header.classList.add('main-header-m')
            footer.classList.add('main-header-m')
        }else {
            mainContent.classList.remove('main-content-p')
            header.classList.remove('main-header-m')
            footer.classList.remove('main-header-m')
        }
    }

    document.addEventListener('DOMContentLoaded', function (){
        removeClassOnResize()
        getMainContentPadding()
    } )


    toggle.addEventListener('click',function (){
        navigation.classList.toggle('active')
        getMainContentPadding()
    })

    document.addEventListener('click',function (event){
        if (!navigation.contains(event.target) && (!toggle.contains(event.target))) {
            navigation.classList.remove('active')
            getMainContentPadding()
        }
    })
    navigation.addEventListener('mouseover',function (){
        navigation.classList.add('active-hover')
    })

    navigation.addEventListener('mouseout',function (){
        navigation.classList.remove('active-hover')
    })


    /*Lenyíló menu*/

    dropdown.addEventListener('click', function (event){
        dropdown.classList.toggle('dropdown-active')
        event.stopPropagation()
    })

    document.addEventListener('click',function (event){
        if (!dropdown.contains(event.target)){
            dropdown.classList.remove('dropdown-active');
        }
    })


</script>
