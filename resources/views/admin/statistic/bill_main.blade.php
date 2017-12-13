@extends('admin.layouts.statistic')

@section('title')
  Income summary
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-start">
      <div class="h1">Income summary</div>
    </div>
    <div class"row">
      <div class="card-deck mt-4">
        <div class="card col-md-12" style="padding:0">
          <div class="card-body">
            <h4 class="card-title">Today</h4>
          </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">No. of transaction : </li>
              <li class="list-group-item">Total income : </li>
            </ul>
          <div class="card-body">
            <a href="#" class="btn btn-primary">More detail</a>
          </div>
        </div>

        <div class="card col-md-12" style="padding:0">
        <div class="card-body">
          <h4 class="card-title">This month</h4>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">No. of transaction : </li>
            <li class="list-group-item">Total income : </li>
          </ul>
        <div class="card-body">
          <a href="#" class="btn btn-primary">More detail</a>
        </div>
      </div>

      <div class="card col-md-12" style="padding:0">
        <div class="card-body">
          <h4 class="card-title">This year</h4>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">No. of transaction : </li>
            <li class="list-group-item">Total income : </li>
          </ul>
        <div class="card-body">
          <a href="#" class="btn btn-primary">More detail</a>
        </div>
      </div>
      </div>
    </div>
  </div>

@endsection