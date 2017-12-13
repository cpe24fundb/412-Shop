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
            <h6 class="text-right">( {{ $today->format("Y/m/d") }} )</h6>
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
            <h6 class="text-right">( {{ $today->startOfWeek()->format("Y/m/d") }} ~ {{ $today->endOfWeek()->format("Y/m/d") }} )</h6>
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
        <a class="nav-link active" data-toggle="tab" href="#spD" role="tab">Specific Date</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#rD" role="tab">Range Date</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Mn" role="tab">Month</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#Yr" role="tab">Year </a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

      <div class="tab-pane active" id="spD" role="tabpanel">
        <div class="container mt-3">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <div>Select date</div>
                  <div class='input-group date' id='datetimepickerSD'>
                      <input type='text' class="form-control" id="dateDS"/>
                      <span class="input-group-addon">
                          <span class="fa fa-calendar">
                          </span>
                      </span>
                      <button type="button" onclick="SDgo()" class="btn btn-default ml-2">Search</button>
                  </div>
                 
              </div>
            </div>
        </div>
        </div>
      </div>

      <div class="tab-pane" id="rD" role="tabpanel">
        <div class="container mt-3">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <div>From</div>
              <div class='input-group date' id='datetimepickerRD1'>
                <input type='text' class="form-control" id="dateDRA"/>
                <span class="input-group-addon">
                  <span class="fa fa-calendar">
                   </span>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <div>To</div>
              <div class='input-group date' id='datetimepickerRD2'>
                <input type='text' class="form-control" id="dateDRB"/>
                  <span class="input-group-addon">
                      <span class="fa fa-calendar">
                      </span>
                  </span>
                  <button type="button" onclick="RDgo()" class="btn btn-default ml-2">Search</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="tab-pane" id="Mn" role="tabpanel">
        <div class="container mt-3">
            <div class="col-sm-6">
              <div class="form-group">
              <div>Select month</div>
                  <div class='input-group date' id='datetimepickerMN'>
                      <input type='text' class="form-control" id="dateDM"/>
                      <span class="input-group-addon">
                          <span class="fa fa-calendar">
                          </span>
                      </span>
                      <button type="button" onclick="MDgo()" class="btn btn-default ml-2">Search</button>
                  </div>
              </div>
            </div>
        </div>
      </div>

      <div class="tab-pane" id="Yr" role="tabpanel">
        <div class="container mt-3">
            <div class="col-sm-6">
              <div class="form-group">
              <div>Select year</div>
                  <div class='input-group date' id='datetimepickerYR'>
                      <input type='text' class="form-control" id="dateDY"/>
                      <span class="input-group-addon">
                          <span class="fa fa-calendar">
                          </span>
                      </span>
                      <button type="button" onclick="YDgo()" class="btn btn-default ml-2">Search</button>
                  </div>
              </div>
            </div>
        </div>
      </div>

    </div>
  </div>

@endsection

@section('js')
  <script type="text/javascript" src="/js/moment.js"></script>
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#datetimepickerSD').datetimepicker({
          icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-arrow-up",
              down: "fa fa-arrow-down"
          },
          format: 'YYYY-MM-DD'
      });

      $('#datetimepickerRD1').datetimepicker({
          icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-arrow-up",
              down: "fa fa-arrow-down"
          },
          format: 'YYYY-MM-DD'
      });
      $('#datetimepickerRD2').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            format: 'YYYY-MM-DD'
        });
        $("#datetimepickerRD1").on("dp.change", function (e) {
            $('#datetimepickerRD2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepickerRD2").on("dp.change", function (e) {
            $('#datetimepickerRD2').data("DateTimePicker").maxDate(e.date);
        });

      $('#datetimepickerMN').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
        },
        format: 'YYYY-MM'
      });

      $('#datetimepickerYR').datetimepicker({
          icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-arrow-up",
              down: "fa fa-arrow-down"
          },
          format: 'YYYY'
      });

    });

    function SDgo(){
      window.location.href = 'bill/' + $('#dateDS').val();
    };
    function RDgo(){
      window.location.href = 'bill/' + $('#dateDRA').val() + '/' + $('#dateDRB').val();
    };
    function MDgo(){
      window.location.href = 'bill/' + $('#dateDM').val();
    };
    function YDgo(){
      window.location.href = 'bill/' + $('#dateDY').val();
    };
  </script>

    
  
@endsection