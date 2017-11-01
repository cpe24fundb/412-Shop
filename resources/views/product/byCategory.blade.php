@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">By Products Categories - {{$category}}</h1>

  <div class="row">  
    @foreach ($products as $product)
    <div class="col-sm-6 col-md-3">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="/image/no_image.svg" alt="{{ $product->name }}">
        <div class="card-body">
          <h4 class="card-title">{{ $product->name }}</h4>
          <p class="card-text">{{ $product->retail_price }}</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Detail</a>
          <a href="#" class="card-link">Follow</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection