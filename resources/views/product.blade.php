@extends('layout.layout-product')
@section('product-details')
<div class="columns dk-product" >
 <div class="column " style="margin:20px;">
   <figure class="image is-3by2">
    <img  src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Placeholder image">
  </figure>
 </div>
  <div class="column auto" style="margin:20px;">
  <div class="has-text-black">
     <span class="title is-5">{{$product->name}}</span>
   </div>
  <div class=" has-text-grey-light">{{$product->details}}</div>
  <hr>
  <div class="has-text-danger">{{$product->presentPrice($product->price)}} تومان </div>
  <hr>
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
   <div class="column auto  " style="margin:20px;">
  <span class="title is-6"> ویژگی های محصول : </span>
  <hr>
     <ul>
      @foreach ($features as $feature)
        <li> {{$feature->name}} :  {{$feature->value}}</li>

      @endforeach
     </ul>
    </div>
 </div>
<hr>
 <div class ="columns dk-product">
  <div class ="column is-one-third" style="text-align:center;  margin: auto;">
   <i class="fas fa-pen-fancy fa-7x has-text-danger"></i>
  </div>
  <div class ="column">
    <div class="is-size-4 ">
      نقد و بررسی اجمالی  :
    </div>
    <hr>
     {{$product->description}}
   </div>
</div>
<hr>
<div class="dk-product">
  <div class="is-size-4 " style="padding:10px">
    محصولات دیگر  :
  </div>
  <hr>
  <div class="columns">
   @foreach ($mightAlsoLike as $product)
    @include('layout.product')
   @endforeach
  </div>
</div>
@endsection
