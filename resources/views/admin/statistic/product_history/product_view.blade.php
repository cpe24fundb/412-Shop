@extends('admin.layouts.manager')

@section('title')
  Product
@endsection

@section('content')
  <h1>Product</h1>
  <form action="/shop-admin/statistic/product"  method="post">
    <div class="form-group">
        <label>#</label>
          <select name = "product_id">
            @foreach($products as $product)
              <option value="{{$product->id}}">{{ $product->id }}</option>
            @endforeach
          </select>
    </div>
    <div class="form-group">
        <label for="name">Start Date</label>
        <input type="date" class="form-control" name="date_start"  placeholder="eg. 2016-11-04">
    </div>
    <div class="form-group">
        <label for="name">Finish Date</label>
        <input type="date" class="form-control" name="date_end"  placeholder="eg. 2017-11-04">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>

  <h2> Date {{$date}} </h2>
  <table class="table table-hover">
  <thead>
    <tr>
    <th>#</th>
    <th>Quantity</th>
    <th>Sale Date</th>
    </tr>
  </thead>
    <tbody>
      @foreach($bills as $bill)
      <tr>
      <td>{{ $bill->bill_id}}</td>
      <td>{{ $bill->quantity }}</td>
      <td>{{ $bill->created_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
@endsection