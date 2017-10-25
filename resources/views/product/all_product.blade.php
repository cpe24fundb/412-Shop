@extends('layouts.app')

@section('content') 
<div class="container">
  <div class="page-header">
    <h1>All Products</h1>
  </div>
</div>
<!-- $c = 0;                                                                            // count for 1 row
                                                                                        // remove foreach BC: Error [1]
if ($c == 0){                                                                           // [if] for first colum in row with start [div row]
<div class="row">                                                                       // start [div row]
  <div class="col-sm-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">      </div>                                           // remove variable BC: Error [2]
      <div class="panel-body">
        <img src="" style="width:200px high:300px"></img>
      </div>
      <div class="panel-footer"><strong>     </strong></div>                            // [2]
    </div> 
  </div>
}
else if ($c == 3){                                                                      // [if] for last colum in row with end [div row] why 3? BC: 1 row should have only 3 goods to show 
$c = 0;                                                                                 // set count to 0 
  <div class="col-sm-6 col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">      </div>                                           // [2]
      <div class="panel-body">
        <img src="" style="width:200px high:300px"></img>
      </div>
      <div class="panel-footer"><strong>      </strong></div>                           // [2]
    </div> 
  </div>
</div>                                                                                  // end [div row]
}else {                                                                                 // other case 
  $c++;                                                                                 // increase count by 1
<div class="col-sm-6 col-md-3"> 
  <div class="panel panel-default">
    <div class="panel-heading">       </div>                                            // [2]
    <div class="panel-body">
      <img src="" style="width:200px high:300px"></img>
    </div>
    <div class="panel-footer"><strong>      </strong></div>                             // [2]
  </div> 
</div>
}                                                                                       // remove endforeach BC: Error [1]
 -->
@endsection