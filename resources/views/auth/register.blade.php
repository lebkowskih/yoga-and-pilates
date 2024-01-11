@extends('layouts.app')

@section('content')
<div class="card login-card">
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="first_name"> {{ __('Imię') }}</label>
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
            </div>

            <div class="mb-3">
                <label for="last_name"> {{ __('Nazwisko') }}</label>
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            </div>

            <div class="mb-3">
                <label for="username"> {{ __('Nazwa użytkownika') }}</label>
                <input id="username" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            </div>

            <div class="mb-3">
                <label for="email"> {{ __('Adres email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="mb-3">
                <label for="password"> {{ __('Hasło') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
            </div>

            <div class="mb-3">
                <label for="birthday"> {{ __('Data urodzenia')}}</label>
                <input id="birthday" type="date"  name="birthday">
            </div>

            <div class="d-flex justify-content-center">
                <button class="login-button">
                    {{ __('Zarejestruj się')}}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
