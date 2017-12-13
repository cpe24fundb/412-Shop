@extends('admin.layouts.statistic')

@section('title')
  Sales detail
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-start">
      <div class="h1">Sales summary {{$date}}</div>
    </div>
    <div class="row">
        <div class="table-responsive mt-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Bill ID</th>
                    <th>Time stamp</th>
                    <th>Line total</th>
                </tr>
                </thead>
                <tbody>
                    @isset($bills)
                        @foreach($bills as $bill)
                            <tr>
                                <td>{{ $bill->id }}</td>
                                <td>{{ $bill->created_at }}</td>
                                <td>{{number_format($bill->line_total, 2, '.', ',') }}</td>
                            </tr>
                        @endforeach
                    @endisset
                    <tr>
                        <td></td><td><b>Total</b></td><td>{{ $sum }}</td>
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
  </div>

@endsection