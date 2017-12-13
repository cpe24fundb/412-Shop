@extends('admin.layouts.statistic')

@section('title')
  Income summary
@endsection

@section('content')
  <h1>Popular Products</h1>
  <h2>Today</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Balance</th>
    </tr>
  </thead>
    <tbody>

    </tbody>
  </table>

  <h2>This Week</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Product</th>
      <th>Quantity</th>
      <th>Balance</th>
    </tr>
  </thead>
    <tbody>

    </tbody>
  </table>
  <div class="container">
  <div class="row">
      <div class='col-sm-6'>
          <div class="form-group">
              <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
      </div>
      <script type="text/javascript">
          $(function () {
              $('#datetimepicker1').datetimepicker();
          });
      </script>
  </div>
</div>

@endsection