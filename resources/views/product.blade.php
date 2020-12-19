@extends('layout.layout-product')
@section('product-details')
<div class="columns dk-product">
 <div class="column">
<img src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Placeholder image">
  </div>
  <div class="column is-half ">
  <div>{{$product->name}}</div>
  <div class="is-size-7">{{$product->details}}</div>
  <hr>
  <div class="has-text-danger">{{$product->presentPrice($product->price)}} تومان </div>
  <div class ="">
    <form  action="{{route('cart.store')}}" method="post">
      {{csrf_field()}}
      {{--product informatssion--}}
      <input type="hidden" name="id" value="{{$product->id}}">
      <input type="hidden" name="name" value="{{$product->name}}">
      <input type="hidden" name="price" value="{{$product->price}}">
      <button type="submit" name="button" class ="button is-dk-green"><i class="fas fa-shopping-cart fa-fw"></i> افزودن به سبد خرید </button>
    </form>

  </div>
   </div>
   <div class="column auto">
     ویژگی های محصول :
     <ul>
      @foreach ($features as $feature)
        <li> {{$feature->name}} : {{$feature->value}}</li>

      @endforeach
     </ul>
    </div>
 </div>
<hr>
 <div class ="columns dk-product">
  <div class ="column is-one-third">
   <i class="fas fa-pen-fancy fa-4x has-text-danger"></i>
  </div>
  <div class ="column">
     {{$product->description}}
   </div>
</div>
<hr>
<div class="dk-product">
  <div class="is-size-4">
    محصولات مرتبط  :
  </div>
  <hr>
  <div class="columns">
   @foreach ($mightAlsoLike as $product)
    @include('layout.product')
   @endforeach
  </div>
</div>
@endsection
