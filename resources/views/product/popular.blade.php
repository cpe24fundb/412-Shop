@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">HOME</h1>

  @component('components.products_grid', ['products' => $billitems])
  @endcomponent
  
@endsection