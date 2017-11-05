@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Categories</h1>

  <div class="row">  
  @foreach ($categories as $category)
  <div class="col-sm-6 col-md-4 mb-4">
    <div class="card">
      <div class="card-body"> 
        <h4 class="card-title">{{ $category->name }}</h4>
        <p class="card-text">{{ $category->description }}</p>
      </div>
      <div class="card-body"> 
        <a href="/category/{{ $category->id }}" class="btn btn-primary" style="width:100%">See More ({{ $category->products->count() }})</a>
      </div>
    </div>
  </div>
  @endforeach
  </div>

@endsection