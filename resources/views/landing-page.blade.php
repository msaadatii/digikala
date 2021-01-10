@extends('layout.layout-landing')
@section('products')
  @include('layout.slider-home')
  <hr>
  <hr>
  <div class="columns is-multiline is-mobile">
@foreach ($products as $product)
    @include('layout.product')
@endforeach
</div>
@endsection
