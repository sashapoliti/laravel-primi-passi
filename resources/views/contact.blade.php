@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1 class="text-uppercase text-center my-5">
        <a href="/">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        contatti
    </h1>
    <ul>
        <li>1 - {{ $user['name']}} {{ $user['surname'] }}</li>
    </ul>
</main>

@endsection