<div class="row">  
@foreach ($products as $product)
<div class="col-sm-6 col-md-4 mb-4">
  <div class="card">
    <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
    <div class="card-body">
      <h4 class="card-title">{{ $product->name }}</h4>
      <p class="card-text">{{ number_format($product->retail_price, 2, '.', ',') }}</p>
    </div>
    <div class="card-footer ">
      <div class="card-group">
        <div class="card">
          <a href="/product/{{ $product->id }}" class="btn card-link">Detail</a>
        </div>
        <div class="card">
          <p style="text-align:center; margin-bottom: 0;" class="btn"> @if($product->balance()) On Stock : {{ $product->balance() }} @else <a class="text-danger">OUT OF STOCK</a> @endif </p>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach
</div>