<h1 class="mt-3">Products - {{$product->name}}</h1>
<div class="row">
        <div class="col-sm-8 col-md-6">
            <img class="card-img-top" src="@empty($product->image) /image/no_image.svg @endempty {{ $product->image }}" alt="{{ $product->name }}">
        </div>
    <div class="col-sm-8 col-md-6">
            <h2 class="mt-3"><b> price per unit - {{$product->retail_price}}</b></h2>
            <h3 class="mt-3"><b> description </b></h3>
            <p style="color:grey text-indent: 10px"> {{$product->description}} </p>
    </div>
</div>

