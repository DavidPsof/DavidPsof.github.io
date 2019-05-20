@extends('layouts.baseHtml')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Shmotify
            </div>

            <div class="links">
                @foreach($discs as $disc)
                    <div class="block">
                        <a href="/plate/{{ $disc->id }}/edit/">{{ $disc->Name }}</a>
                        <span>{{ $disc->Genre }}</span>
                        <span>{{ $disc->Text }}</span>
                        <a id="del" href="/plate/{{ $disc->id }}/delete/">удалить</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
