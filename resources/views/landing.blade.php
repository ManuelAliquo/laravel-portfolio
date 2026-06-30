@extends('layouts.app')
@section('content')

<div class="container mt-5 pt-5">
    <h1 class="welcome text-center">WELCOME TO<br><b>MANUEL'S PORTFOLIO</b></h1>

    @guest
    <div class="text-center mt-4">
        <p class="fs-5">Login or Register to see all my projects!</p>
        <button class="btn btn-success fs-4 me-2 px-3">
            <a class="text-decoration-none text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
        </button>
        <button class="btn btn-success fs-4 ms-2 px-3">
            <a class="text-decoration-none text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
        </button>
    </div>
    @else
    <div class="text-center mt-5">
        <button class="btn btn-success fs-4 me-2 px-3">
            <a class="text-decoration-none text-light"
            href="{{route('projects.index')}}">{{ __('My Projects') }}</a>
        </button>
        <button class="btn btn-success fs-4 ms-2 px-3">
            <a class="text-decoration-none text-light" href="{{ route('about') }}">{{ __('About Me') }}</a>
        </button>
    </div>
    @endguest
</div>

@endsection