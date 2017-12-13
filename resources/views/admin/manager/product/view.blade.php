@extends('admin.layouts.manager')

@section('title')
  Product
@endsection

@section('content')
  <h1>Product</h1>

  <div class="card">
    <div class="card-body">
        @isset($product)
          <form action="/shop-admin/manager/product/{{$product->id}}" method="post">
        @else
          <form action="/shop-admin/manager/product" method="post">
        @endisset

        <div class="form-group">
          <label for="name">IAN</label>
          <input type="text" class="form-control" name="ian" id="ian" required placeholder="eg. 761210005305" @isset($product) value="{{$product->ian}}" @endisset>
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" required placeholder="eg. Food" @isset($product) value="{{$product->name}}" @endisset>
        </div>
        <div class="form-group">
          <label for="description">Category</label>
          <select class="form-control" name="category" placeholder="select category of this product" required>
            @foreach($categories as $category)
              <option value="{{$category->id}}" @if(isset($product) && $category->id == $product->product_category_id) selected @endif>{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="name">Retail Price</label>
          <input type="text" class="form-control" name="retail_price" placeholder="eg. 20.25" required @isset($product) value="{{$product->retail_price}}" @endisset>
        </div>
        <div class="form-group">
          <label for="name">Image</label>
          <input type="name" class="form-control" name="image" placeholder="link to image">
        </div>


        @isset($product)
          <button type="submit" class="btn btn-warning">Save</button>
          <a href="/shop-admin/manager/product" class="btn btn-info">Cancel</a>
        @else
          <button type="submit" class="btn btn-primary">Create</button>
        @endisset
      </form>
    </div>
  </div>

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
            <th>Image</th>
            <th>Action</th>
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
              <td><a href="{{ $product->image }}"><img src="{{ $product->image }}" class="img-thumbnail rounded" style="max-height: 4rem;"></a></td>
              <td>
                <a href="/shop-admin/manager/product/{{ $product->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/product/{{ $product->id }}/delete" class="btn btn-outline-danger">
                  <li class="fa fa-trash-o fa-lg"></li>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endisset
            
@endsection