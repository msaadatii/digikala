@extends('layout.layout-cart')
@section('cart')
  <div class="is-size-3 has-text-centered">
      سفارش شمابا موفقیت ثبت گردید
      <div class="is-size-4 has-text-info">
        کد پیگیری سفارش شما : {{$refid}}
      </div>
  </div>

@endsection
