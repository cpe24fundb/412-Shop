@extends('admin.layouts.manager')

@section('title')
  Users
@endsection

@section('content')
  <h1>Users</h1>

  <div class="card">
    <div class="card-body">
        @isset($user)
          <form action="/shop-admin/manager/user/{{$user->id}}" method="post">
        @else
          <form action="/shop-admin/manager/user" method="post">
        @endisset

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" required placeholder="Yuta Patanumon" @isset($user) value="{{$user->name}}" @endisset>
        </div>
        <div class="form-group">
          <label for="description">Roles</label>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" name="manager_flag" type="checkbox" value="1" @if(isset($user) && $user->manager_flag) checked @endif>
              Manager Role
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" name="founder_flag" type="checkbox" value="1" @if(isset($user) && $user->founder_flag) checked @endif>
              Founder Role
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="name">Total Fund</label>
          <input type="text" class="form-control" name="total_fund" required placeholder="eg. 200.25" @isset($user) value="{{$user->total_fund}}" @endisset>
        </div>
        <div class="form-group">
          <label for="name">Username</label>
          <input type="text" class="form-control" name="username" placeholder="eg. user1" required @isset($user) value="{{$user->username}}" @endisset>
        </div>
        <div class="form-group">
          <label for="name">Password</label>
          <input type="password" class="form-control" name="password" placeholder="HARD RESET PASSWORD">
        </div>


        @isset($user)
          <button type="submit" class="btn btn-warning">Save</button>
          <a href="/shop-admin/manager/user" class="btn btn-info">Cancel</a>
        @else
          <button type="submit" class="btn btn-primary">Create</button>
        @endisset
        </button>
      </form>
    </div>
  </div>

  @isset($users)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Manager Flag</th>
            <th>Founder Flag</th>
            <th>Total Fund</th>
            <th>Username</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>@if($user->manager_flag) Yes @else No @endif</td>
              <td>@if($user->founder_flag) Yes @else No @endif</td>
              <td>{{ $user->total_fund }}</td>
              <td>{{ $user->username }}</td>
              <td>
                <a href="/shop-admin/manager/user/{{ $user->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/user/{{ $user->id }}/delete" class="btn btn-outline-danger">
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