@extends('layout.layout-landing')
@section('products')
  <h2 class="is-size-3">محصولات سفارش شماره {{$order_id}}</h2>
  <hr>
  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <tr>
      <td>تصویر</td>
      <td>نام محصول</td>
      <td>قیمت</td>
    </tr>
    @foreach ($products as $product)
      <tr>
        <td>
          <a href="{{route('product.show',$product->slug)}}">
          <img width="100px" src="{{asset('img/products/'.$product->slug.'.jpg')}}" alt="Placeholder image">
          </a>
         </td>
        <td>{{$product->name}}</td>
        <td>{{$product->presentPrice($product->price)}} تومان</td>
      </tr>
    @endforeach
  </table>
@endsection
