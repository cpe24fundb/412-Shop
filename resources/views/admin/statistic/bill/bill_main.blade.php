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
      <div class="card-group mt-4 px-0">
        <div class="card col-md-3 col-sm-6" style="padding:0">
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

        <div class="card col-md-3 col-sm-6" style="padding:0">
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

        <div class="card col-md-3 col-sm-6" style="padding:0">
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

      <div class="card col-md-3 col-sm-6" style="padding:0">
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

  <!-- Nav tabs -->
  <div class="container pt-3">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="home" role="tabpanel">...</div>
      <div class="tab-pane" id="profile" role="tabpanel">..ss.</div>
      <div class="tab-pane" id="messages" role="tabpanel">...</div>
      <div class="tab-pane" id="settings" role="tabpanel">...</div>
    </div>
  </div>

@endsection

@section('js')
  <script type="text/javascript" src="/js/moment.js"></script>
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
      $(function () {
          $('#datetimepicker10').datetimepicker({
              viewMode: 'years',
              format: 'YYYY'
          });
      });
  </script>

    
  
@endsection