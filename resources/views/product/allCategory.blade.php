@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">Categories</h1>

  @component('components.show_product_list', ['products' => $categories])
  @endcomponent

@endsection