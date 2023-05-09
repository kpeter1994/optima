@extends('layouts.members-layout')

@section('content')
    <main id="main">
        @include('partials._sidebar')

            <div class="container">
                <div class="row p-lg-5">
                    <div class="pt-5">
                        <h1 class="fs-4 fw-bold mb-3">Optima Napló</h1>
                    </div>


                </div>


            </div>


        @include('partials._footer')
    </main>
@endsection

@section('scripts')
    <script>
        let programBtns = document.querySelectorAll('.btn-program')



        programBtns.forEach(function (programBtn, i){
            let btnProgress = programBtn.getAttribute('data-progress')
            console.log('A btn progress' + btnProgress)
            console.log(i)
            programBtn.style.setProperty('--after-bg-'+i, btnProgress + '%');
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

@endsection
