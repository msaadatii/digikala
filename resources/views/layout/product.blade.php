<div class="column is-one-quarter">
  <a href='{{route('product.show',$product->slug)}}'>
  <div class="card dk-product-card">
    <div class="card-image">
      <figure class="image is-4by3">
        <img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Placeholder image">
       </figure>
     </div>
    <div class="card-content dk-card-content">
      <div class="media">
        <div class="media-content">
          <p class="title is-6 dk-card-product-title has-text-grey">{{$product->name}}</p>
          <p class="subtitle is-6 dk-card-product-title has-text-danger">{{$product->presentPrice($product->price)}} تومان </p>
        </div>
       </div>
    </div>
  </div>
 </a>
</div>
