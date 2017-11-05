@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Categories</h1>

  <div class="row">  
  @foreach ($categories as $category)
  <div class="col-sm-6 col-md-4">
    <div class="card">
      <img class="card-img-top" src="@empty($category->image) /image/no_image.svg @endempty {{ $category->image }}" alt="{{ $category->name }}">
      <div class="card-body">
        <h4 class="card-title">{{ $category->name }}</h4>
        <p class="card-text">{{ $category->description }}</p>
      </div>
      <div class="card-body">
        <a href="#" class="card-link">More</a>
      </div>
    </div>
  </div>
  @endforeach
  </div>

@endsection