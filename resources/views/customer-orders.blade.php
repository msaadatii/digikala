@extends('layout.layout-landing')
@section('products')
  <h2 class="is-size-3">سفارشات </h2>
  <hr>
  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <tr>
      <td>شماره سفارش</td>
      <td>تاریخ سفارش </td>
      <td>تعداد محصولات</td>
      <td></td>
    </tr>
    @foreach($orders as $order)
      <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->created_at}}</td>
        <td>
          @php
            echo count(json_decode($order->product_ids)) ;
          @endphp
        </td>
        <td>
        <a href="{{route('order.products' ,$order->id)}}" class="button is-info">نمایش محصولات این سفارش</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
