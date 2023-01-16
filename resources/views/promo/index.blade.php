@extends('layouts.promo')

@section('title', 'main promo index page')

@section('main')
    <div class="container"> 
    <h1 class="my-3 text-center">Promo list</h1>
        @if (count($promo) > 0)
        <table class="table table-striped"> 
            <thead> 
                <tr> 
                    <th>Good name</th> 
                    <th>Price, $.</th> 
                    <th>Details</th> 
                </tr> 
            </thead> 
            <tbody>
                @foreach ($promo as $item) 
                <tr> 
                    <td><h3>{{ $item->title }}</h3></td> 
                    <td>{{ $item->price }}</td> 
                    <td> 
                    <a href="{{ route('details', ['dtl' => $item->id]) }}">See more...</a> 
                    </td> 
                </tr> 
                @endforeach
            </tbody> 
        </table> 
        @endif
    </div> 

@endsection
   

