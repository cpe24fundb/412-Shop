@extends('admin.layouts.manager')

@section('title')
  Stocks
@endsection

@section('content')
  <h1>Stocks</h1>

  <div class="card">
    <div class="card-body">
        @isset($stock)
          <form action="/shop-admin/manager/stock/{{$stock->id}}" method="post">
            <h2>Stock ID {{ $stock->id }}</h2>
            @foreach($stock->items as $key => $item)
            <div class="form-control mt-1">
              <div class="form-row align-items-center">
                <div class="col-auto">
                  <label class="sr-only">Product</label>
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="item[{{$key}}][product_id]" required>
                    @foreach($products as $product)
                      <option value="{{ $product->id }}" @if($product->id == $item->product_id) selected @endif>{{ $product->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-auto">
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">Price</div>
                    <input type="text" class="form-control" placeholder="eg. 10.25" name="item[{{$key}}][price]" required value="{{ $item->price }}">
                  </div>
                </div>
                <div class="col-auto">
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">Quantity</div>
                    <input type="text" class="form-control" placeholder="eg. 1" name="item[{{$key}}][quantity]" required value="{{ $item->quantity }}">
                  </div>
                </div>
                <div class="col-auto">
                  <a href="/shop-admin/manager/stock/{{$stock->id}}/item/{{$item->product_id}}/delete" class="btn-btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
                </div>
              </div>
            </div>  
            @endforeach
            
            <div class="mt-2">
              <button type="submit" class="btn btn-warning">Save</button>
              <a href="/shop-admin/manager/stock" class="btn btn-outline-primary">Cancel</a>
            </div>
          </form>

          <form action="/shop-admin/manager/stock/{{$stock->id}}/item" method="post">
            <div class="form-control my-4">
              <div class="form-row align-items-center">
                <div class="col-auto">
                  <label class="sr-only">Product</label>
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="product_id">
                    <option></option>
                    @foreach($products as $product)
                      <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-auto">
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">Price</div>
                    <input type="text" class="form-control" placeholder="eg. 10.25" name="price">
                  </div>
                </div>
                <div class="col-auto">
                  <div class="input-group mb-2 mb-sm-0">
                    <div class="input-group-addon">Quantity</div>
                    <input type="text" class="form-control" placeholder="eg. 1" name="quantity">
                  </div>
                </div>
              </div>
            </div>  
            <div class="mt-2">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="reset" class="btn btn-outline-primary">Reset</button>
            </div>
          </form>
            
        @else
          <form action="/shop-admin/manager/stock" method="post">
            <button type="submit" class="btn btn-primary">New Stock List</button>
          </form>
        @endisset
    </div>
  </div>

  @isset($stocks)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>By</th>
            <th>Value</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($stocks as $stock)
            <tr>
              <td>{{ $stock->id }}</td>
              <td>{{ $stock->created_at }}</td>
              <td>{{ $stock->updated_at }}</td>
              <td>{{ $stock->user->name }}</td>
              <td>{{ number_format($stock->line_total, 2, '.', ',') }}</td>
              <td>
                <a href="/shop-admin/manager/stock/{{ $stock->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/stock/{{ $stock->id }}/delete" class="btn btn-outline-danger">
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