@extends('admin.layouts.manager')

@section('title')
  Notification
@endsection

@section('content')
  <h1>Notification</h1>

  <div class="card">
    <div class="card-body">
        <form action="/shop-admin/manager/notification" method="post">
        
        <div class="form-group">
          <label for="name">Message</label>
          <input type="text" class="form-control" name="message" id="message" placeholder="eg.We have new product!" @isset($notification) value="{{$notification->message}}" @endisset>
        </div>
        <div class="form-group">
          <label for="description">Url</label>
          <input type="text" class="form-control" name="url" id="url" placeholder="http://product.link" @isset($notification) value="{{$notification->url}}" @endisset>
        </div>
        @isset($notification)
          <button type="submit" class="btn btn-warning">Resend</button>
          <a href="/shop-admin/manager/notification" class="btn btn-info">Cancel</a>
        @else
          <button type="submit" class="btn btn-primary">Create</button>
        @endisset
      </form>
    </div>
  </div>

  @isset($notifications)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>Message</th>
            <th>Url</th>
            <th>Status</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($notifications as $notification)
            <tr>
              <td>{{ $notification->id }}</td>
              <td>{{ $notification->created_at }}</td>
              <td>{{ $notification->message }}</td>
              <td>{{ $notification->url }}</td>
              <td>{{ $notification->status }}</td>
              <td>
                <a href="/shop-admin/manager/notification/{{ $notification->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/notification/{{ $notification->id }}/delete" class="btn btn-outline-danger">
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