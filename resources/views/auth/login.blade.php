@extends('layouts.app')

@section('class')
    bg-fixed-image
@endsection

@section('content')


    <div class="container d-flex justify-content-center my-5" id="login">
        <form method="POST" class="card p-card glass-card login-card " action="{{ route('login') }}">
            <h1 class="text-center fw-bold mb-3">Bejelentkezés</h1>
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="f" id="email" required>
                <label class="text-white" for="floatingInput">{{ __('E-mail cím') }}</label>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" placeholder="f" id="password" class="form-control" required>
                <label for="password" >{{ __('Jelszó') }}</label>

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <div class="button-container">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Bejelentkezés') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Elfelejtett jelszó?') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="mb-3 d-flex gap-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Emlékezzen rám') }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="entering" id="entering" {{ old('entering') ? 'checked' : '' }}>

                    <label class="form-check-label" for="entering">
                        {{ __('Belépve maradok') }}
                    </label>
                </div>


            </div>
            <hr>

            <div class="register-in-form d-flex gap-2 align-items-center mb-3">
                <p>Még nincs Optima fiókod?</p>
                <a class="btn btn-outline-primary" href="/register">Regisztrálok</a>
            </div>

        </form>
    </div>


@endsection
