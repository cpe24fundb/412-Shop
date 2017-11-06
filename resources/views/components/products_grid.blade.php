<div class="row">  
@foreach ($products as $product)

<?php
$left = 0;
$bought = 0;
$product->stocks->each(function($stock) use (&$left){ $left += $stock->pivot->quantity;});
$product->bills->each(function($bill) use (&$bought){ $bought += $bill->pivot->quantity; });
?>

<div class="col-sm-6 col-md-4 mb-4">
  <div class="card">
    <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h4 class="card-title">{{ $product->name }}</h4>
      <p class="card-text">{{ $product->retail_price }}</p>
    </div>
    <div class="card-footer">
      <div class="card-group">
        <div class="card">
          <a href="/product/{{ $product->id }}" class="btn card-link">Detail</a>
        </div>
        <div class="card">
          <p>Left on stock : {{ $left - $bought }}</p>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
</div>