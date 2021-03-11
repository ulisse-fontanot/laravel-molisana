@extends('layouts.app')

@section('title', 'sezione dettagli')

@section('content')
    <section id="dettaglio">
        <img src="{{ $prodotti['src-h'] }}" alt="{{ $prodotti['titolo'] }}">
        <img src="{{ $prodotti['src-p'] }}" alt="{{ $prodotti['titolo'] }}">
        <div id="specifiche">
            <h2>{{ $prodotti['titolo'] }}</h2>
            <h2>TEMPO DI COTTURA: {{ $prodotti['cottura'] }}</h2>
            <h2>PESO: {{ $prodotti['peso'] }}</h2>
        </div>
        <p>{{ $prodotti['descrizione'] }}</p>
    </section>
@endsection