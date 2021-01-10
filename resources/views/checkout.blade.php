@extends('layout.layout-cart')
{{--i didn't ccreate new layout because layout of checkout is same whith layout of cart--}}
@section('cart')
<div class="columns">
    <div class="column dk-cart-right-panel">
      <div class="box">
        <form action="{{route('checkout.pay')}}" method="post">
          <table class="table is-fullwidth">
            <tr>
              <td colspan="2"><input type="text" name="name" placeholder="نام و نام خانوادگی تحویل گیرنده" class="input"></td>
            </tr>
            <tr>
              <td><input type="number" name="phone" placeholder="شماره تلفن همراه گیرنده " class="input"></td>
              <td><input type="number" name="zipcode" placeholder="کدپستی" class="input"></td>
            </tr>
            <tr>
            <td colspan="2"><input type="text" name="address" placeholder="آدرس پستی دقیق" class="input"></td>
            </tr>
          </table>
      </div>
      <div class="box">
        محصولات مرسوله :
        <hr>
        <div class="columns is-multiline">
          @foreach (Cart::content() as $item)
            <div class="column">
              <div class="cart" style="width:80px;">
                <img width="85px" src="{{asset('img/products/'.$item->model->slug.'.jpg')}}">
                {{$item->model->name}}
              </div>
            </div>
           @endforeach
        </div>
      </div>
    </div>
    <div class="column dk-cart-left-panel is-one-third">
      <table class="table is-fullwidth">
        @csrf
          <tr>
              <td> جمع سبد خرید </td> <td> {{$newSubTotal}} تومان </td>
          </tr>
          <tr>
              <td> مالیات </td><td>{{$newTax}} تومان </td>
          </tr>
          <tr  class="has-text-link">
              <td>جمع نهایی</td><td>{{$newTotal}} تومان </td>
          </tr>
          <tr>
            @if(session()->has('coupon'))
              <table class="table is-fullwidth">
                <tr>
                  <td> کد تخفیف </td>
                  <td>
                  <span>{{session()->get('coupon')['code']}}</span>
                  </td>
                </tr>
                <tr>
                        <td> مقدار تخفیف </td><td>{{$discount}}</td>
                </tr>
              </table>
              @endif
          </tr>
      </table>
    <hr>
     <button type="submit" class="button is-info is-fullwidth "style="padding:25px;" >مرحله بعدی </button>
      </div>
    </form>
 </div>
@endsection
