@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">HOME</h1>

  <div class="row">  
    @foreach ($billitems as $billitem)
    <div class="col-sm-6 col-md-4">
      <div class="card">
        <img class="card-img-top" src="/image/no_image.svg" alt="{{ $billitem->product->name }}">
        <div class="card-body">
          <h4 class="card-title">{{ $billitem->product->name }}</h4>
          <p class="card-text">{{ $billitem->product->retail_price }}</p>
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