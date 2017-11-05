@extends('layouts.app')

@section('content') 
  
    @component('components.products_detail', ['product' => $product])
    @endcomponent

@endsection