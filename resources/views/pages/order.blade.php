@extends('layouts.main')

@section('class')
    bg-fixed-image
@endsection

@section('content')
<section id="order" class="p-lg-4">
    <div class="container" >
        <div class="row py-5">
            <div class="mb-4">
                <h2 class="text-center fs-1">Legyél Te is Optimás!</h2>
                <p class="text-center">
                    2/3 - Válassz előfizetést, és Optimalizálj!
                </p>
                    <div class="col-lg-4 offset-lg-4 p-2">
                        <div class="card dark-glass-card bg-gradient mb-4 p-5 p-md-3 p-xl-5">
                            <div class="card-header border-none bg-transparent pt-2">
                                <h4 class="my-0 fw-bold text-center">Optima <br><span class="text-primary">Póbaidőszak</span></h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title fw-bold text-center"><span>Ingyenes</span><small class="text-body-secondary fw-light"> (5 napig)</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                                    <li><i class="fa-regular fa-circle me-2"></i>Konzultációs lehetőség</li>
                                    <li><i class="fa-regular fa-circle me-2"></i>Optima Csoport</li>
                                    <li><i class="fa-regular fa-circle me-2"></i>Offline csoporttalálkozók</li>
                                    <li><i class="fa-regular fa-circle me-2"></i>Hozzátartozói program</li>

                                </ul>
                                <a href="/order-end" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</a>
                            </div>
                        </div>
                    </div>

            </div>



            <div class="col-lg-3 p-2">
                <div class="card dark-glass-card bg-gradient  p-5 p-md-3 p-xl-5 mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bol text-center fw-bold">Optima <span class="text-primary">Standard</span> havi</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h1 class="card-title pricing-card-title text-center"><span class="standard-price">4 900 Ft</span><small class="text-body-secondary fw-light">/hó</small></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Konzultációs lehetőség</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Optima Csoport</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Hozzátartozói program</li>

                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="card dark-glass-card bg-gradient  p-5 p-md-3 p-xl-5 mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold text-center">Optima <span class="text-primary">Standard</span> éves</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-center p-0">
                        <h1 class="card-title pricing-card-title text-center"><span class="standard-price">49 000 Ft</span><small class="text-body-secondary fw-light">/év</small></h1>
                        <div class="text-center"><span class="bg-warning p-1  text-dark fw-bold rounded rounded-1 py-1 px-2">9 720 Ft megtakarítás </span><span class="bg-warning p-1  text-dark fw-bold rounded rounded-1 py-1 px-2">évente</span></div>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Konzultációs lehetőség</li>
                            <li><i class="fa-regular fa-circle me-2   "></i>Optima Csoport</li>
                            <li><i class="fa-regular fa-circle me-2   "></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Hozzátartozói program</li>

                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 p-2">
                <div class="card dark-glass-card bg-gradient  p-5 p-md-3 p-xl-5  mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold text-center">Optima <span class="text-primary">Exkluzív</span> havi</h4>

                    </div>
                    <div class="card-body p-0">
                        <h1 class="card-title pricing-card-title text-center"><span class="exclusive-price">6 900 Ft</span><small class="text-body-secondary fw-light">/hó</small></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Konzultációs lehetőség</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Csoport</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Hozzátartozói program</li>

                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="card dark-glass-card bg-gradient p-5 p-md-3 p-xl-5  mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold text-center">Optima <span class="text-primary">Exkluzív</span> éves</h4>

                    </div>
                    <div class="card-body p-0">
                        <h1 class="card-title pricing-card-title text-center"><span class="exclusive-price">69 000 Ft</span><small class="text-body-secondary fw-light">/év</small></h1>
                        <div class="text-center"><span class="bg-warning p-1  text-dark fw-bold rounded rounded-1 py-1 px-2">13 800 Ft megtakarítás</span> <span class="bg-warning py-1 px-2  text-dark fw-bold rounded rounded-1">évente</span></div>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Konzultációs lehetőség</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Csoport</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Hozzátartozói program</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection



@section('scripts')

@endsection
