@extends('admin.layouts.manager')

@section('title')
  Dashboard
@endsection

@section('content')
  <h1>Dashboard</h1>

  <div class="row">
    <div class="col-4">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h4 class="card-title">{{ $balance }} Baht</h4>
          <p class="card-text"><b>Current Balance</b></p>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card bg-info text-white">
        <div class="card-body">
          <h4 class="card-title">{{ $sellCount }}</h4>
          <p class="card-text"><b>Sell Count</b></p>
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card bg-warning text-white">
        <div class="card-body">
          <h4 class="card-title">{{ $inStock }}</h4>
          <p class="card-text"><b>Left In Stock</b></p>
        </div>
      </div>
    </div>
  </div>

@endsection