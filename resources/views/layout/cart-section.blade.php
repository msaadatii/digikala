<div class="buttons">
  <a class="button is-outlined is-dk-green" href="{{route('cart.index')}}">
    <i class="fa fa-shopping-cart"></i>
    <strong>سبد خرید  </strong>
    @if(Cart::instance('default')->count()>0)
    <strong class="has-background-danger">{{Cart::instance('default')->count()}} </strong>
    @endif
  </a>
</div>
