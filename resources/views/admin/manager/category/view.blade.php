@extends('admin.layouts.manager')

@section('title')
  Category
@endsection

@section('content')
  <h1>Category</h1>

  <div class="card">
    <div class="card-body">
        @isset($category)
          <form action="/shop-admin/manager/category/{{$category->id}}" method="post">
        @else
          <form action="/shop-admin/manager/category" method="post">
        @endisset
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="eg. Food" @isset($category) value="{{$category->name}}" @endisset>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description" id="description" placeholder="Something you can eat" @isset($category) value="{{$category->description}}" @endisset>
        </div>
        @isset($category)
          <button type="submit" class="btn btn-warning">Save</button>
          <a href="/shop-admin/manager/category" class="btn btn-info">Cancel</a>
        @else
          <button type="submit" class="btn btn-primary">Create</button>
        @endisset
        </button>
      </form>
    </div>
  </div>

  @isset($categories)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>name</th>
            <th>description</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ str_limit($category->description, 40) }}</td>
              <td>
                <a href="/shop-admin/manager/category/{{ $category->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/category/{{ $category->id }}/delete" class="btn btn-outline-danger">
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