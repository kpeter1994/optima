@extends('layouts.main')

@section('class')
    bg-fixed-image
@endsection

@section('content')
<section id="order" class="p-lg-4">
    <div class="container" >
        <div class="row py-5">
            <div class="mb-4">
                <h2 class="text-center fs-1">Legyél Optima Tag!</h2>
                <p class="text-center">
                    2/3 - Válassz csomagot és kezd el haszálni
                </p>
            </div>

           <div class="switch d-flex flex-column a">
               <p>Díjfizetési gyakoriság</p>
               <div class="switch-button-box">
                   <button type="button" class="toggle-btn active-toggle" id="annual">Éves</button>
                   <button type="button" class="toggle-btn" id="monthly">Havi</button>
               </div>
           </div>

            <div class="col-lg-4 p-3">
                <div class="card dark-glass-card bg-gradient mb-4 p-5">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold">Póbaidőszak</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><span>Ingyenes</span><small class="text-body-secondary fw-light">/5 napig</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Optima Csoport</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Ingyenes konzultációs lehetőség</li>
                            <li><i class="fa-regular fa-circle me-2"></i>Hozzátartozói önsegítő program</li>
                            <li><i class="fa-regular fa-circle me-2"></i>2 havi ingyenes tagság</li>
                        </ul>
                        <a href="/order-end" class="w-100 btn btn-lg btn-outline-primary rounded-pill text-uppercase">Tovább</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="card dark-glass-card bg-gradient p-5 mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold">Optima Standard</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><span class="standard-price">49 000 Ft</span><small class="text-body-secondary fw-light">/év</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-regular fa-circle me-2   "></i>Optima Csoport</li>
                            <li><i class="fa-regular fa-circle me-2   "></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Ingyenes konzultációs lehetőség</li>
                            <li><i class="fa-regular fa-circle me-2   "></i>Hozzátartozói önsegítő program</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>2 havi ingyenes tagság</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary rounded-pill text-uppercase">Tovább</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-3">
                <div class="card dark-glass-card bg-gradient p-5  mb-4">
                    <div class="card-header border-none bg-transparent py-3">
                        <h4 class="my-0 fw-bold">Optima Exkluzív</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"><span class="exclusive-price">69 000 Ft</span><small class="text-body-secondary fw-light">/év</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Online</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Optima Csoport</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Offline csoporttalálkozók</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Ingyenes konzultációs lehetőség</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>Hozzátartozói önsegítő program</li>
                            <li><i class="fa-solid fa-circle-check me-2 text-primary"></i>2 havi ingyenes tagság</li>
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

    <script>
        const paymentBtns = {
            annual: {
                elem: document.getElementById('annual'),
                selected: true
            },
            monthly: {
                elem: document.getElementById('monthly'),
                selected: false
            },
            setCardContent(selectedPeriod) {
                let standardPrice = document.querySelector('.standard-price')
                let exkluzivPrice = document.querySelector('.exclusive-price')

                if (selectedPeriod === 'annual') {
                    standardPrice.innerHTML = "49 000 Ft"
                    exkluzivPrice.innerHTML = "69 000 Ft"
                    standardPrice.parentElement.querySelector('.text-body-secondary').innerHTML = '/év'
                    exkluzivPrice.parentElement.querySelector('.text-body-secondary').innerHTML = '/év'
                } else if (selectedPeriod === 'monthly') {
                    standardPrice.innerHTML = "4 900 Ft"
                    exkluzivPrice.innerHTML = "6 900 Ft"
                    standardPrice.parentElement.querySelector('.text-body-secondary').innerHTML = '/hó'
                    exkluzivPrice.parentElement.querySelector('.text-body-secondary').innerHTML = '/hó'
                }
            },
            init() {
                this.annual.elem.addEventListener('click', () => {
                    this.annual.selected = true
                    this.monthly.selected = false
                    this.annual.elem.classList.add('active-toggle')
                    this.monthly.elem.classList.remove('active-toggle')
                    this.setCardContent('annual')
                })
                this.monthly.elem.addEventListener('click', () => {
                    this.annual.selected = false
                    this.monthly.selected = true
                    this.monthly.elem.classList.add('active-toggle')
                    this.annual.elem.classList.remove('active-toggle')
                    this.setCardContent('monthly')
                })
            }
        }

        paymentBtns.init()

    </script>
@endsection
