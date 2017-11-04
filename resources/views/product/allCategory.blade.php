@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Categories</h1>

  <div class="row">  
    @foreach ($categories as $category)
    <div class="col-sm-6 col-md-3">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="/image/no_image.svg" alt="{{ $category->name }}">
        <div class="card-body">
          <h4 class="card-title">{{ $category->name }}</h4>
          <p class="card-text">{{ $category->description }}</p>
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