
const changeBtn = document.getElementById('color-changer')
let darkThems = document.querySelectorAll('.bg-dark')
let logo = document.getElementById('logo')

changeBtn.addEventListener('click',function (){
    darkThems.forEach(darkThem => {
        darkThem.classList.toggle('bg-white')
    })

})


let offcanvas = document.getElementById('offcanvasScrolling')
let main = document.getElementsByTagName('main')[0]
let toggle = document.querySelector(".open-sidebar")
let insideHeader = document.querySelector('.inside-header')
let screenWidth = window.innerWidth || document.documentElement.clientWidth;


if (localStorage.getItem('isOpen') === 'true') {
    main.classList.add('main-ms-280');
    if (screenWidth > 760){
        offcanvas.classList.add('show');
    }else if (screenWidth <= 760){
        offcanvas.classList.remove('show');
    }
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


