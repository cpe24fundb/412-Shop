@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">All Products</h1>

  @component('components.products_grid', ['products' => $products])
  @endcomponent

@endsection