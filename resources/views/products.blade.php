@extends('layout.layout-landing')
@section('products')

  <div class="products_header">
    <h1 class="has-text-weight-bold is-size-3">{{$categoryName}}</h1>
    <hr>
    <div>
      <span> مرتب سازی براساس : </span>
  <a href="{{route('products',['category'=>request()->category,'sort'=>'low_hight','page'=>$products->currentPage() ])}}"class="tag is-link">ارزانترین </a> |
  <a href="{{route('products',['category'=>request()->category,'sort'=>'hight_low','page'=>$products->currentPage() ])}}"class="tag is-link" >گرانترین </a>
</div>
</div>
  <hr>
  <div class="columns is-multiline is-mobile">
@foreach ($products as $product)
    @include('layout.product')
@endforeach
</div>

{{$products->appends(request()->input())->links()}}

@endsection
