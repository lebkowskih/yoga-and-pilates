@extends('layouts.app')

@section('content')
<div class="card login-card">
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('E-mail') }}</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Hasło') }}</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Zapamiętaj mnie') }}
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="login-button">
                    {{ __('Zaloguj się')}}
                </button>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a class="btn" href="{{ route('password.request') }}">
                        {{ __('Zapomniałeś hasła?') }}
                    </a>
                @endif
            </div>

            <div>
                <a class="btn" href="{{ route('register') }}">
                    {{ __('Nie posiadasz konta? Wciśnij tutaj')}}
                </a>
            <div>
        </form>
    </div>
</div>
@endsection
