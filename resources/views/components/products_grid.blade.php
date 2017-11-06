<div class="row">  
@foreach ($products as $product)

<?php
$balance = $product->balance();
$result = ($balance != 0) ? 'On stock : '.$balance :'OUT OF STOCK';
?>

<div class="col-sm-6 col-md-4 mb-4">
  <div class="card">
    <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h4 class="card-title">{{ $product->name }}</h4>
      <p class="card-text">{{ $product->retail_price }}</p>
    </div>
    <div class="card-footer ">
      <div class="card-group">
        <div class="card">
          <a href="/product/{{ $product->id }}" class="btn card-link">Detail</a>
        </div>
        <div class="card">
          <p class="btn" style="text-align:center; margin-bottom: 0;">{{ $result }}</p>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
</div>