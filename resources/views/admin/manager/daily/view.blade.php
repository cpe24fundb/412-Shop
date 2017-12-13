@extends('admin.layouts.manager')

@section('title')
  Daily
@endsection

@section('content')
  <h1>Daily</h1>

  <div class="card">
    <div class="card-body">
        @isset($daily)
          <form action="/shop-admin/manager/daily/{{$daily->id}}" method="post">
            <h2>Daily ID {{ $daily->id }}</h2>
            @foreach($daily->items as $key => $item)
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
                  <a href="/shop-admin/manager/daily/{{$daily->id}}/item/{{$item->product_id}}/delete" class="btn-btn-danger"><i class="fa fa-trash-o fa-lg"></i></a>
                </div>
              </div>
            </div>  
            @endforeach
            
            <div class="mt-2">
              <button type="submit" class="btn btn-warning">Save</button>
              <a href="/shop-admin/manager/daily" class="btn btn-outline-primary">Cancel</a>
            </div>
          </form>

          <form action="/shop-admin/manager/daily/{{$daily->id}}/item" method="post">
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
              </div>
            </div>  
            <div class="mt-2">
              <button type="submit" class="btn btn-primary">Add</button>
              <button type="reset" class="btn btn-outline-primary">Reset</button>
            </div>
          </form>
            
        @else
          <form action="/shop-admin/manager/daily" method="post">
            <button type="submit" class="btn btn-primary">New Daily</button>
          </form>
        @endisset
    </div>
  </div>

  @isset($dailies)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>For date</th>
            <th>Items</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($dailies as $daily)
            <tr>
              <td>{{ $daily->id }}</td>
              <td>{{ $daily->created_date }}</td>
              <td>{{ $daily->products->count() }}</td>
              <td>
                <a href="/shop-admin/manager/daily/{{ $daily->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/daily/{{ $daily->id }}/delete" class="btn btn-outline-danger">
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