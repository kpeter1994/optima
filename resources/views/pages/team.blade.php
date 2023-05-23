@extends('layouts.main')

@section('class')
    bg-fixed-image
@endsection

@section('content')

    <div class="container">
        <h1 class="display-2 text-white text-center mt-3 mb-3">Ismerd meg az optima csapatot!</h1>

        <div class="row">
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="https://optimatagsag.hu/images/dudits-denes.jpg" alt="Dudits Dénes">
                    </div>

                    <div class="accordion" id="accordionExample_1">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                        <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_1" class="accordion-collapse collapse" data-bs-parent="#accordionExample_1">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/fulop-anita.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_2">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_2" class="accordion-collapse collapse" data-bs-parent="#accordionExample_2">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/szilagyi-zsuzsa.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_3">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_3" class="accordion-collapse collapse" data-bs-parent="#accordionExample_3">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/feher-bea.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_4">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_4" class="accordion-collapse collapse" data-bs-parent="#accordionExample_4">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/gonczi-gabor.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_6">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_5" class="accordion-collapse collapse" data-bs-parent="#accordionExample_6">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/molnar-irisz.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_7">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="true" aria-controls="collapse_6">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_6" class="accordion-collapse collapse" data-bs-parent="#accordionExample_7">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-4 offset-lg-4">
                <div class="p-card text-center team-card">
                    <div class="d-flex justify-content-center align-items-center">
                        <img  src="https://optimatagsag.hu/images/dudits-andras.jpg" alt="Dudits Dénes">
                    </div>
                    <div class="accordion" id="accordionExample_8">
                        <div class="accordion-item border-none">
                            <h2 class="accordion-header">
                                <span class="text-white fw-bold fs-5">Dudits Dénes</span>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="true" aria-controls="collapse_7">
                                    <span class="fw-bold text-primary">terápiás programigazgató </span>
                                </button>
                            </h2>
                            <div id="collapse_7" class="accordion-collapse collapse" data-bs-parent="#accordionExample_8">
                                <div class="accordion-body">
                                    <h2 class="fs-6">Terápiás programigazgató, szociális munkás, intervencionista</h2>
                                    <p>
                                        Dudits Dénes, aki több mint 20 éve foglalkozik szenvedélybetegekkel, emberek százainak segített már talpra állni a függőségből. Dénes nem csupán könyvekből tanulta a segítő szakmát: először saját súlyos drog- és alkoholfüggőségét győzte le, majd 7 éves szakmai gyakorlattal a háta mögött 2005-ben létrehozta Magyarország első magán addiktológiai egészségközpontját. Ismeri az összes olyan eszközt, amellyel valaki képes lehet megszabadulni káros szokásaitól. És nemcsak beszél a legkülönfélébb módszerekről, hanem számtalan embernek meg is tanította már használni azokat.
                                    </p>
                                    <p>Dénes legnagyobb erőssége, hogy éli is azt, amit átad, és pontosan tudja, mit éreznek azok, akik meg akarnak válni a függőségüktől. Tanácsadói stílusát határozottság és gyakorlatiasság, valamint a kliensek feltétel nélküli elfogadása jellemzi.
                                    </p>
                                    <p>Ha úgy érzed, a káros szokásaid bizony akadályoznak abban, hogy olyan minőségű életet élhess, amelyre igazán vágysz, akkor Dénes Neked is tud segíteni – mégpedig jól bevált stratégiákkal és technikákkal.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('partials._CTA')
@endsection

@section('scripts')


@endsection
