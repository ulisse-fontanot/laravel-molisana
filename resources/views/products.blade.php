@extends('layouts.app')

@section('title', 'sezione prodotti')

@section('content')
    <section id="container">
        @foreach($prodotti as $prodotto)
            <div id="prodotto">
                <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}">
                <div id="layover">
                    <h2>{{ $prodotto['titolo'] }}</h2>
                </div>
            </div>
        @endforeach
    </section>
@endsection