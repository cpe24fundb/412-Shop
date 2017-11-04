@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Follow Product</h1>

  @component('components.products_grid', ['products' => $products])
  @endcomponent

@endsection