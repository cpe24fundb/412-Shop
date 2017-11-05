<div class="row">  
@foreach ($products as $product)
<div class="col-sm-6 col-md-4 mb-4">
  <div class="card">
    <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h4 class="card-title">{{ $product->name }}</h4>
      <p class="card-text">{{ $product->retail_price }}</p>
    </div>
    <div class="card-footer">
      <a href="/product/{{ $product->id }}" class="card-link">Detail</a>
    </div>
  </div>
</div>
@endforeach
</div>