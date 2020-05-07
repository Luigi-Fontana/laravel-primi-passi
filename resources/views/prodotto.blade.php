@php
    $prodotti = config('prodotti');
    $prodotto = $prodotti[$id];
    $left = $id - 1;
    $right = $id + 1;
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
                    @if ($id != 0)
                        <div class="left">
                            <a href="{{route('prodotti.show', $left)}}">&#10094;</a>
                        </div>
                    @endif
                    @if ($id != 11)
                        <div class="right">
                            <a href="{{route('prodotti.show', $right)}}">&#10095;</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
