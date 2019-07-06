@extends('layouts.template')

@section('content')
    <h1>La page d'accueil de mon application</h1>


    <div>Venez tester !!!</div>


    <ul>
        @foreach($articles as $id => $nom)
            <li><a href="/article/{{ $id }}">{{ $nom }}</a></li>
        @endforeach
    </ul>

@endsection