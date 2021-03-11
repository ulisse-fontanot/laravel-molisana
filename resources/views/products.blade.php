@extends('layouts.app')

@section('title', 'sezione prodotti')

@section('content')
    <div id="container">
        @foreach($prodotti as $tipo => $prodotto)
            <h2>{{ $tipo }}</h2>
            <section id="container-prodotto">
                @foreach($prodotto as $key => $pasta)
                    <a href="{{ route('pagina-dettagli', ['index' => $key])}}">
                        <div id="pasta">
                            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
                            <div id="layover">
                                <h2>{{ $pasta['titolo'] }}</h2>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
        @endforeach
    </div>
@endsection