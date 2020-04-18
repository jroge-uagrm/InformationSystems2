@extends('layouts.app')


@section('body-class','hold-transition login-page')

@section('content')
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Suscribe</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="content">
                <div class="title m-b-md">
                    Help-Medic
                </div>

            
        </div>
        
    </div>
@endsection