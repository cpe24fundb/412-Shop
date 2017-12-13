@extends('layouts.app')

@section('content') 
    
    <h1 class="mt-3">Products - {{$product->name}}</h1>
    <div class="row">
            <div class="col-sm-8 col-md-6">
                <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
            </div>
        <div class="col-sm-8 col-md-6">
        <h2 class="mt-3"><b> price per unit - {{number_format($product->retail_price, 2, '.', ',')}}</b></h2>
                <h3 class="mt-3"><b> @if($product->balance()) on stock - {{ $product->balance() }} @else <a class="text-danger">OUT OF STOCK</a> @endif</b></h3>
                <h3 class="mt-3"><b> description </b></h3>
                <h5> {{$product->description}}</h5>
        </div>
    </div>

@endsection