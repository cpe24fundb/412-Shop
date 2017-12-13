@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">HOME</h1>

  <h2 class="mt-3">Daily Product</h2>
  @component('components.products_grid', ['products' => $productsDaily])
  @endcomponent
  
  <h2 class="mt-3">Popular Product</h2>
  @component('components.products_grid', ['products' => $productsPop])
  @endcomponent

@endsection