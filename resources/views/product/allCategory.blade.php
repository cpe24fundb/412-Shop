@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Categories</h1>

  @component('components.products_grid', ['products' => $categories])
  @endcomponent

@endsection