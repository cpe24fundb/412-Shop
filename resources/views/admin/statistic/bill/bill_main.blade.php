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
      <div class="card-deck mt-4 px-0">
        <div class="card col-md-12" style="padding:0">
          <div class="card-body">
            <h4 class="card-title">Today<br></h4>
            <h6 class="text-right">( {{ $today->toDateString() }} )</h6>
          </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">No. of transaction : {{ $tcount }}</li>
              <li class="list-group-item">Total sold : {{ $tsold }}</li>
              <li class="list-group-item">Total income : {{ $ttotal }}</li>
            </ul>
          <div class="card-body">
            <a href="./bill/{{ $today->toDateString() }}" class="btn btn-primary">More detail</a>
          </div>
        </div>

        <div class="card col-md-12" style="padding:0">
          <div class="card-body">
            <h4 class="card-title">This week<br></h4>
            <h6 class="text-right">( {{ $today->startOfWeek()->toDateString() }}~{{ $today->endOfWeek()->toDateString() }} )</h6>
          </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">No. of transaction : {{ $wcount }}</li>
              <li class="list-group-item">Total sold : {{ $wsold }}</li>
              <li class="list-group-item">Total income : {{ $wtotal }}</li>
            </ul>
          <div class="card-body">
            <a href="./bill/{{ $today->startOfWeek()->toDateString() }}/{{ $today->endOfWeek()->toDateString() }}" class="btn btn-primary">More detail</a>
          </div>
        </div>

        <div class="card col-md-12" style="padding:0">
        <div class="card-body">
          <h4 class="card-title">This month<br></h4>
          <h6 class="text-right">( {{ $today->format('F') }} )</h6>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">No. of transaction : {{ $mcount }}</li>
            <li class="list-group-item">Total sold : {{ $msold }}</li>
            <li class="list-group-item">Total income : {{ $mtotal }}</li>
          </ul>
        <div class="card-body">
          <a href="./bill/{{ $today->year . "-" . $today->month }}" class="btn btn-primary">More detail</a>
        </div>
      </div>

      <div class="card col-md-12" style="padding:0">
        <div class="card-body">
          <h4 class="card-title">This year<br></h4>
          <h6 class="text-right">( {{ $today->year }} )</h6>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">No. of transaction : {{ $ycount }}</li>
            <li class="list-group-item">Total sold : {{ $ysold }}</li>
            <li class="list-group-item">Total income : {{ $ytotal }}</li>
          </ul>
        <div class="card-body">
          <a href="./bill/{{ $today->year }}" class="btn btn-primary">More detail</a>
        </div>
      </div>
      </div>
    </div>
  </div>

@endsection