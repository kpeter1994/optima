@extends('layouts.main')

@section('class')
    bg-fixed-image
@endsection

@section('content')

    <section class="hero">
        <div class="container px-5 pb-5 mb-5">
            <div class="hero-content">
                <span class="optima-title">OPTIMA ONLINE</span>
                <h1>Leszokás kényelmesen</h1>
                <p class="text-lg text-lg lead"><span class="fw-bold fs-4 d-block">Ha Te akarod megmondani,  hogyan mondasz igent  a Jó(zanság)ra!</span>
                    <br> Az Optima Online egy praktikus tudás- és eszköztár, amelyet Dénes útmutatásával használhatsz…</p>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tudj meg többet Dénesről</button>
                <div class="mt-3 video-responsive w-100">
                    <iframe src="https://player.vimeo.com/video/815550187?h=72d5d82f25"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <p> Egy Optimás vallomása....</p>
                </div>
            </div>
        </div>
        <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kicsoda Dudits Dénes?</h1>
                        <button type="button" class="btn-close bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-0">
                            <div class="col-lg-8 p-3">
                                <p>Dénes több mint 20 éve foglalkozik szenvedélybetegekkel, és emberek százainak segített már talpra
                                    állni a függőségből. Nem csupán könyvekből tanulta a segítő szakmát: saját súlyos drog- és
                                    alkoholfüggőségét legyőzve, a Ráckeresztúri Drogterápiás Otthon és a Nemzeti Drogmegelőzési Iroda
                                    munkatársaként alapozta meg szakmai tapasztalatait, majd létrehozta Magyarország első magán
                                    addiktológiai egészségközpontját. Emellett az Egyesült Államokban elsajátította a szenvedélybetegek
                                    hozzátartozóit segítő intervenció módszerét, és közreműködött a módszer hazai elterjesztésében.
                                    Sikeres segítőként, az Életmentő könyv szerzőjeként, az Online Támogatócsoport létrehozójaként és
                                    az Optima Online alapítójaként, sokat szerepel a médiában, így az elmúlt évtizedben a Józanság
                                    népszerűsítésének meghatározó alakjává vált.</p>
                                <p><b>Dénes hitvallása: Mindenkinek lehet segíteni abban, hogy rászokjon a Józanságra!</b></p>
                            </div>
                            <div class="col-lg-4">
                                <img class="img-fluid p-2 p-lg-5" src="img/dudits-v2.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2 mt-3">Optima Programok</h2>
                    <p>Az Programok menüben olyan interaktív önsegítő programokat találsz, amelyek a változáshoz szükséges különféle készségek fejlesztését segítik.</p>
                    <p>A saját felületeden használható programok főbb elemei:</p>
                    <ul class="text-start">
                        <li>Ütemezett tematikus feladatok</li>
                        <li>Speciális útmutatók</li>
                        <li> Programnapló</li>
                        <li>Hangulatmonitor</li>
                        <li>Sóvárgásmonitor</li>
                        <li>Józanságmonitor</li>
                        <li>Tanúsítvány</li>
                        <li>Archívum</li>
                    </ul>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-1">Tudj meg többet az OPTIMA Rendszerről</button>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                    <img class="read-more-img" src="{{asset('/img/about/programok.png')}}" alt="programok">
                </div>
            </div>

        </div>
        <div class="modal fade modal-xl" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mi az az OPTIMA rendszer?</h1>
                        <button type="button" class="btn-close bg-white rounded-pill" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row m-0">
                            <div class="col-lg-7 p-3">
                                <p>Az <b>OPTIMA</b> Rendszer egyrészt segít meghatározni, hogy hol tartasz a szenvedélybetegségből való
                                    felépülésben, másrészt segít alkalmazni az optimális életvitel kialakítását és fenntartását
                                    megkönnyítő eszközöket.</p>
                                <ul>
                                    <li>Ha használod az OPTIMA Rendszert, akkor tudod, hogy a felépülésed szempontjából a
                                        Fejlődési zónában, az Optima-zónában vagy épp a Veszélyzónában vagy-e, és mit érdemes
                                        tenned.</li>
                                    <li>Ha használod az <b>OPTIMA</b> Rendszert, akkor tudod, hogy az <br><b>O</b>ptimalizáció (állapotrendezés), a
                                        <br><b>P</b>revenció (megelőzés), a <br><b>T</b>erápia (segítségkérés), az <br><b>I</b>ntervenció (segítés), a
                                        <br><b>M</b>otiváció
                                        (indíttatás) és az <br><b>A</b>daptáció (alkalmazkodás) mind olyan eszközök, amelyekkel elősegítheted
                                        a felépülésedet, illetve optimálissá teheted az Életedet.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <img class="img-fluid p-2 p-lg-5" src="img/optima-programok.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/eloadasok.png')}}" alt="előadások">
                </div>
                <div class="col-lg-6  p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Előadások</h2>
                    <p>Az Előadások menüpont a különleges tematikus előadások helye.</p>
                    <p>Van már itt egy 52 részes előadássorozat, hogy minden héten tanulhass valami újat.</p>
                    <p>De rendszeresen újabb segítő előadásokkal jelentkezem, amelyek a szerhasználatról való leszokás és a józanságra való leszokás egy-egy fontos vetületéről szólnak – példákkal, praktikus tanácsokkal és gyakorlatokkal.</p>
                    <p>Mindez azért, hogy minél jobban kiaknázhasd az OPTIMA Rendszer előnyeit!</p>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-dark">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6  p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Útmutatók</h2>
                    <p>Az Útmutatók menüpontra kattintva, útmutatást kaphatsz, gyakorolhatsz és motivációra találhatsz:</p>
                    <ul>
                        <li>Már most 120 terjedelmesebb olvasmány – hasznos tanácsokkal</li>
                        <li>Folyamatosan bővülő feladatlaptár már 52 feladatlappal – praktikus gyakorlatokkal</li>
                        <li>Jelenleg is több mint 650 motivációs üzenet – ösztönző gondolatokkal</li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/utmutatok.png')}}" alt="utmutatók">
                </div>

            </div>

        </div>
    </section>

    <section class="">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/tudasbazis.png')}}" alt="Tudásbázis">
                </div>
                <div class="col-lg-6  p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Tudásbázis</h2>
                    <p>A Tudásbázis menüpontban rád vár egy gazdag és folyamatosan bővülő videó- és audiótár.</p>
                    <ul>
                        <li>Dénes előadásai, útmutatásai, válaszai</li>
                        <li>Izgalmas beszélgetések más szakemberekkel</li>
                    </ul>
                    <p>Nézd a videókat, ha túl fáradt lennél ahhoz, hogy olvass, de szükséged van egy kis lelki táplálékra.</p>
                    <p>Használd a hanganyagokat, hogy az autóban ülve vagy épp kocogás közben is hallhass valamit, ami akár sorsfordító felismerésekhez vezethet!</p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-dark">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 text-center text-lg-start fs-5">
                    <h2 class="display-2">Napló</h2>
                    <p>A Napló menüben találsz egy multifunkcionális eszközt, amellyel…</p>
                    <ul>
                        <li>Nyomon követheted, hogy mióta élsz józan életet…</li>
                        <li>A gondolataidról és az érzéseidről feljegyzéseket készíthetsz…</li>
                        <li>Egy naptárban megjelölheted, ha esetleg megcsúsztál vagy visszaestél…</li>
                        <li>És folyamatosan láthatod, hogy az életvezetésed szempontjából éppen milyen Zónában vagy…</li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                    <img class="read-more-img" src="{{asset('/img/about/naplo.png')}}" alt="programok">
                </div>
            </div>

        </div>
    </section>
    <section class="">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/teszt.png')}}" alt="Teszt">
                </div>
                <div class="col-lg-6  p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Teszt</h2>
                    <p>A Teszt menüpontra kattintva, eljuthatsz az Optima Tesztet tartalmazó oldalra, hogy a tesztet kitöltve, képben lehess az állapotoddal és a fejlődéseddel kapcsolatban.</p>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-dark">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 p-2 p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Csoport</h2>
                    <p>A Csoport menüponton keresztül csatlakozhatsz a zárt Optima Csoporthoz, amelyben nemcsak más Optimásokkal tarthatod a kapcsolatot, hanem Velem is.</p>
                    <p>Minden héten legalább 2 alkalommal élőben bejelentkezek, hogy közvetlenül is segíthessek – az Optima Live-val vagy az Optima Szobában tartott kötetlen csoporttalálkozó keretében.</p>
                    <p>Ezenkívül van még Optima Extra bejelentkezés is és kérdezz-felelek is!</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                    <img class="read-more-img" src="{{asset('/img/about/csoport.png')}}" alt="csoport">
                </div>
            </div>

        </div>
    </section>
    <section class="">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/bonuszok.png')}}" alt="Bonuszok">
                </div>
                <div class="col-lg-6  p-2 p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Bónuszok</h2>
                    <p>A Bónusz menüponton keresztül ezeket hasznosíthatod:</p>
                    <ul>
                        <li>Az ingyenes személyes konzultáció lehetősége</li>
                        <li> Exkluzív hanganyagok az akaraterőről és a józan mámorról</li>
                        <li>Meg egy könyv, amelyből jobban megismerhetsz engem, és erőt meríthetsz</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-dark">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 p-2 p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Hozzátartozóknak</h2>
                    <p>A Hozzátartozóknak menüpontban
                        hozzáférhetsz a <i>Meg tudom menteni</i>
                        programunkhoz – hogy a hozzátartozó fejével is
                        gondolkozni tudj. Ha pedig hozzátartozó vagy,
                        akkor megtudhatod, hogyan segíthetsz a
                        szerettednek!</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5">
                    <img class="read-more-img" src="{{asset('/img/about/hozzatartozoknak.png')}}" alt="Hozzátartozóknak">
                </div>
            </div>

        </div>
    </section>
    <section class="">
        <div class="container p-2 p-lg-5">
            <div class="row m-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center p-5 text-center">
                    <img class="read-more-img" src="{{asset('/img/about/blog.png')}}" alt="Blog">
                </div>
                <div class="col-lg-6  p-2 p-lg-5 text-center text-lg-start fs-5">
                    <h2 class="display-2">Blog</h2>
                    <p>A Blog menüpontban találod a blogbejegyzéseim gyűjteményét.</p>
                </div>
            </div>

        </div>
    </section>

    @include('partials._CTA')
@endsection

@section('scripts')


@endsection
