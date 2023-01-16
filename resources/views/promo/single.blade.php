@extends('layouts.promo')

@section('title', 'single promo page')

@section('main')
    <div class="container"> 
        <h1 class="my-3 text-center">Single promo</h1> 
        <h2>{{ $dtl->title }}</h2>
        <p>{{ $dtl->content }}</p>
        <p>{{ $dtl->price }} $.</p>
        <p><a href="{{ route('index') }}">To main promo list</a></p>
    </div> 
@endsection
 