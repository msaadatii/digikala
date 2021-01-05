@extends('layout.layout-landing')
@section('products')
  <div class="is-size-4 notification">
    نتایج جستجو برای : {{request()->input('keyword')}}
  </div>
  <hr>
  <div class="columns is-multiline is-mobile">
    @foreach ($products as $product)
        @include('layout.product')
    @endforeach
  </div>
 {{$products->appends(request()->input())->links()}}

@endsection
