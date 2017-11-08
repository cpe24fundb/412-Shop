@extends('layouts.app')

@section('content') 
    
    <h1 class="mt-3">Products - {{$product->name}}</h1>
    <div class="row">
            <div class="col-sm-8 col-md-6">
                <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
            </div>
        <div class="col-sm-8 col-md-6">
<<<<<<< HEAD
                <h2 class="mt-3"><b> price per unit - {{$product->retail_price}}</b></h2>
                <h2 class="mt-3"><b> @if($product->balance()) on stock - {{ $product->balance() }} @else <a class="text-danger">OUT OF STOCK</a> @endif</b></h2>
=======
                <h2 class="mt-3"><b> price per unit - {{number_format($product->retail_price, 2, '.', ',')}}</b></h2>
>>>>>>> 8371c0c0d19cae99e906b20d35954785316e44cd
                <h3 class="mt-3"><b> description </b></h3>
                <p style="color:grey text-indent: 10px"> {{$product->description}} </p>
        </div>
    </div>

@endsection