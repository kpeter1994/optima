@extends('layouts.app')

@section('class')
    bg-fixed-image
@endsection

@section('content')
<div class="container d-flex justify-content-center p-3 p-lg-5 my-5" id="register">
    <div class="card p-card glass-card w-lg-50">
        <h1 class="text-center">Legyél Optima Tag!</h1>
        <p class="text-center mb-3">1/3 - Regisztrálj, hogy beléphess az oldalra.</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="name" required>
                <label for="name" >{{ __('Vezetéknév') }}</label>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="email" class="form-control" id="email" required>
                <label for="email" >{{ __('E-mail-cím') }}</label>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <label for="password" >{{ __('Jelszó') }}</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required>
                <label for="password-confirm" >{{ __('Jelszó megerősítése') }}</label>
            </div>
            <div class="register-container card bg-gray-dark p-card mb-3">
                <p class="small">A Fiók létrehozása gombra kattintva Ön megerősíti, hogy, elfogadja az <a href="">Általános szerződési feltételeket</a> , és elismeri, hogy olvasta az
                    <a href="">Adatvédelmi Szabályzatot</a>.</p>
                <button type="submit" class="btn btn-primary">FIÓK LÉTREHOZÁSA</button>
            </div>

        </form>
    </div>

</div>
@endsection
