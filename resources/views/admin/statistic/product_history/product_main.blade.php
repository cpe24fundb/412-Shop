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


  @isset($products)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>IAN</th>
            <th>Name</th>
            <th>Category</th>
            <th>Retail Price</th>
            <th>balance</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->ian }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->productCategory->name }}</td>
              <td>{{number_format($product->retail_price, 2, '.', ',') }}</td>
              <td>{{$product->balance() }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endisset
            
@endsection