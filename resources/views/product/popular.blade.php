@extends('layouts.app')

@section('content') 
  
  <h1 class="mt-3">HOME</h1>

  @component('components.show_product_list', ['products' => $billitems])
  @endcomponent
  
@endsection