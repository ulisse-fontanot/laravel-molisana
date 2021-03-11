@extends('layouts.app')

@section('title', 'sezione prodotti')

@section('content')
    <section id="container">
        @foreach($prodotti as $key => $prodotto)
            <a href="{{ route('pagina-dettagli', ['index' => $key])}}">
                <div id="prodotto">
                    <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}">
                    <div id="layover">
                        <h2>{{ $prodotto['titolo'] }}</h2>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection