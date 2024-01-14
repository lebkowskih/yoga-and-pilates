@extends('layouts.app')

@section('content')
<div class="p-5 text-center bg-image" id="hero">
    <p class="text-start" style="font-size: 80px; font-weight: 900;">ZADBAJ O CIAŁO</p>
    <p class="text-start" style="font-size: 180px; font-weight: 900; margin-top: -80px;">I DUSZĘ</p>
    <div class="text-start" id="radius-button-container">
        <a href="{{ route('login') }}">
            <button class="radius-button">ZACZNIJ PRZYGODĘ</button>
        </a>
    </div>
</div>
@endsection

