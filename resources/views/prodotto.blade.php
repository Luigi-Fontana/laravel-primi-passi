@php
    $prodotti = config('prodotti');
    $prodotto = $prodotti[$id];
@endphp
@extends('layouts.layout')
@section('titolo')
    {{$prodotto['titolo']}}
@endsection
@section('main')
    <main>
        <div class="bg-product">
            <div class="container">
                <div class="product">
                    <h2>{{$prodotto['titolo']}}</h2>
                    <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
                    <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
                    <h3>{!!$prodotto['descrizione']!!}</h3>
                    <h4><a href="{{route('prodotti')}}">Torna ai prodotti</a></h4>
                </div>
            </div>
        </div>
    </main>
@endsection
