@extends('admin.layouts.statistic')

@section('title')
  Daily
@endsection

@section('content')
  <h1>Sale report</h1>
  <form action="/shop-admin/statistic/daily"  method="post">
        <div  class="form-group">
            <label for="name">Date</label>
            <input type="date" class="form-control" name="time"  placeholder="eg. 2017-11-04">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
  </form>
  <h2> Date {{$time}} </h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Balance</th>
    </tr>
  </thead>
    <tbody>
      @foreach($daily as $bill)
      <tr>
        <td>{{ $bill->product->name }}</td>
        <td>{{ $bill->quantity }}</td>
        <td>{{ $bill->product->balance() }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection