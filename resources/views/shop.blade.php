@extends('layout')

@section("nazivStranice")
    Prodavnica
@endsection


@section("sadrzajStranice")
    <p>Dobrodosli u moj Shop</p>


    @foreach($products as $product)

    @if($product == 'iPhone 15 Pro' || $product == 'iPhone 14')
        <p>{{ $product }} - SUPER SNIZENJE</p>

    @else

        <p>{{ $product }}

    @endif


    @endforeach

@endsection
