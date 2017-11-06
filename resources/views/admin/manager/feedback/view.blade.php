@extends('admin.layouts.manager')

@section('title')
  Feedback
@endsection

@section('content')
  <h1>Feedback</h1>

  @isset($feedback)
  <div class="card">
    <div class="card-body">
        <h4 class="card-title">From <u>{{ $feedback->name }}</u> ({{ $feedback->created_at }})</h4>
        <p class="card-text">{{ $feedback->comment }}</p>
    </div>
  </div>
  @endisset

  @isset($feedbacks)
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>From</th>
            <th>Comment</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($feedbacks as $feedback)
            <tr>
              <td>{{ $feedback->id }}</td>
              <td>{{ $feedback->created_at }}</td>
              <td>{{ $feedback->name }}</td>
              <td>{{ str_limit($feedback->comment, 40) }}</td>
              <td>
                <a href="/shop-admin/manager/feedback/{{ $feedback->id }}" class="btn btn-outline-primary">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                </a>
                <a href="/shop-admin/manager/feedback/{{ $feedback->id }}/delete" class="btn btn-outline-danger">
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