@extends('layouts.app')

@section('content')
    <div class="row align-items-start p-3">
        <div class="col-3">
            @include('components.sidebar')
        </div>
        <div class="col-9">
            {{ $slot }}
        </div>
    </div>
@endsection