@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">All Products</h1>

  @component('components.show_product_list', ['products' => $products])
  @endcomponent

@endsection