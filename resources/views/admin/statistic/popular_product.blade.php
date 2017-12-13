@extends('admin.layouts.statistic')

@section('title')
  Top Products
@endsection

@section('content')
  <h1>Popular Products</h1>
  <h2>Today</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Balance</th>
    </tr>
  </thead>
    <tbody>
      @foreach($todayPopularProduct as $bill)
      <tr>
        <td>{{ $bill->product->name }}</td>
        <td>{{ $bill->quantity }}</td>
        <td>{{ $bill->product->balance() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <h2>This Week</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Balance</th>
    </tr>
  </thead>
    <tbody>
      @foreach($weekPopularProduct as $bill)
      <tr>
        <td>{{ $bill->product->name }}</td>
        <td>{{ $bill->quantity }}</td>
        <td>{{ $bill->product->balance() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection