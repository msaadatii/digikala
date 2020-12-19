@extends('layout.layout-landing')
@section('products')
  <div class="columns is-multiline is-mobile">
@foreach ($products as $product)
    @include('layout.product')
@endforeach
</div>
@endsection
