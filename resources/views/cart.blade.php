@extends('layout.layout-cart')

@section('cart')
  @if (session()->has('success_message'))
    <div class="notification  is-success" >
      {{session()->get('success_message')}}
    </div>
  @endif

  @if (session()->has('error_message'))
    <div class="notification  is-danger" >
      {{session()->get('error_message')}}
    </div>
  @endif

  @if (count($errors)>0)
    @foreach($errors->all() as $error)
      <li> {{$error}}</li>
    @endforeach
  @endif
  @if (Cart::count()>0)
    <div class="is-size-3">
      سبد خرید
    </div>
      <hr>


    <div class="columns">

            <div class="column dk-cart-right-panel">
              <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <tr>
                  <td>تصویر</td>
                  <td>نام</td>
                  <td>قیمت</td>
                  <td>تعداد</td>
                  <td>عملیات</td>
                </tr>
              @foreach (Cart::content() as $item)
                <tr>
                  <td>
                     <a href="{{route('product.show',$item->model->slug)}}">
                       <img width="150px" src="{{asset('img/products/'.$item->model->slug.'.jpg')}}">
                     </a>
                  </td>
                  <td> {{$item->name}}</td>
                  <td> {{$item->model->presentPrice($item->subtotal)}}</td>
                  <td>
                      <div class="select is-rounded">
                        <select class="quantity" data-id="{{$item->rowId}}">
                          @for ($i=1 ; $i < 10+1; $i++)
                              <option value="{{$i}}" {{$item->qty == $i ?'selected':''}}>{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                  </td>
                  <td>
                    {{--delete one product from cart--}}
                    <form action ="{{route('cart.destroy',$item->rowId)}}"method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <button type="submit" class="button is-danger is-outlined  "><i class="fas fa-trash fa-1x fa-fw"></i></button>
                      <span class="is-size-6 has-text-grey n"> حذف </span>
                    </form>
                    {{--save one product one later--}}
                    <form action ="{{route('cart.saveForLater',$item->rowId)}}"method="post">
                      {{csrf_field()}}
                      <button type="submit" class="button is-info is-outlinedn"><i class="fas fa-save fa-1x fa-fw"></i> </button>
                      <span class="is-size-6 has-text-grey ">ذخیره در لیست خرید بعدی</span>
                    </form>
                  </td>
                </tr>
              @endforeach
            </table>
            </div>

            <div class="column dk-cart-left-panel is-one-third">


                      <table class="table is-fullwidth">
                      <tr>
                        <td> جمع سبد خرید </td> <td> {{$newSubTotal}} تومان </td>
                     </tr>
                     <tr>
                         <td> مالیات </td><td>{{$newTax}} تومان </td>
                     </tr>
                     <tr  class="has-text-link">
                         <td>جمع نهایی</td><td>{{$newTotal}} تومان </td>
                     </tr>
                      </table>


                      @if(session()->has('coupon'))
                        <table class="table is-fullwidth">
                          <tr>
                                  <td> کد تخفیف </td>
                                  <td>
                                      <span>{{session()->get('coupon')['code']}}</span>
                                      <form action="{{route('coupon.destroy')}}" method="post" style ="display : inline ">
                                      {{csrf_field()}}
                                      {{method_field('delete')}}
                                      <input  class="has-text-danger" type="submit" value="حذف" >
                                      </form>
                                  </td>
                          </tr>
                          <tr>
                                  <td> مقدار تخفیف </td><td>{{$discount}}</td>
                          </tr>

                        </table>
                       @else

                              <div class="">
                                  <form action="{{route('coupon.store')}}" method="post">
                                      {{csrf_field()}}
                                      <input type="text" name="coupon_code" placeholder="کد تخفیف ؟ " class="input">
                                      <button type="submit" class="button is-success is-fullwidth" name="button">اعمال تخفیف</button>
                                  </form>
                              </div>
                       @endif
                       <hr>
                       <button type ="button" name="button" class="button is-success is-fullwidth">مرحله بعدی </button>
               </div>
         </div>

    <div class="">
      <hr>
      <div class="is-size-4">
      لیست خرید بعدی
      </div>
       <hr>
          <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
          @foreach (Cart::instance('saveForLater')->content() as $item)
         <tr>
           <td>
              <a href="{{route('product.show',$item->model->slug)}}">
                <img width="150px" src="{{asset('img/products/'.$item->model->slug.'.jpg')}}">
              </a>
           </td>
           <td> {{$item->name}}</td>
           <td> {{$item->price}}</td>
           <td>
             {{--delete one product from cart--}}
             <form action ="{{route('cart.destroySavedForLater',$item->rowId)}}"method="post">
               {{csrf_field()}}
               {{method_field('DELETE')}}
               <button type="submit" class="button is-danger is-outlined"><i class="fas fa-trash fa-1x fa-fw"></i></button>
               <span class="is-size-6 has-text-grey"> حذف </span>
             </form>
             {{--save one product one later--}}
             <form action ="{{route('cart.switchFromSaveToCart',$item->rowId)}}"method="post">
               {{csrf_field()}}
               <button type="submit" class="button is-success is-outlined"><i class="fas fa-cart-plus fa-1x fa-fw"></i> </button>
               <span class="is-size-6 has-text-grey">افزودن به سبد خرید </span>
             </form>
           </td>
         </tr>
         @endforeach
         </table>
    </div>
  @else
  <div class=" empty-cart has-background-light">
    <i class="fas fa-shopping-cart fa-5x has-text-info"></i>
    <div class="is-size-3">
    سبد خرید شما خالی است !
  </div>
  <hr>
  <a class="button is-info">
  ورود به حساب کاربری
  </a>
  <hr>
  <div class="">
    کاربر جدید هستید ؟
    <a href="" class=" is-success">ثبت نام در دیجی کالا </a>
  </div>
  <hr>
  <a href="{{route('products')}}">ادامه فرآیند خرید </a>
  <hr>
  </div>
  <h1  class="is-size-5"> لیست خرید بعدی : </h1>
  <hr>
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    @foreach (Cart::instance('saveForLater')->content() as $item)
   <tr>
     <td>
        <a href="{{route('product.show',$item->model->slug)}}">
          <img width="150px" src="{{asset('img/products/'.$item->model->slug.'.jpg')}}">
        </a>
     </td>
     <td> {{$item->name}}</td>
     <td> {{$item->price}}</td>
     <td>
       <div class="dk-table-cart">
       {{--delete one product from cart--}}
       <form action ="{{route('cart.destroySavedForLater',$item->rowId)}}"method="post">
         {{csrf_field()}}
         {{method_field('DELETE')}}
         <button type="submit" class="button is-danger is-outlined"><i class="fas fa-trash fa-1x "></i></button>
         <span class="is-size-6 has-text-grey">حذف</span>
       </form>
       {{--save one product one later--}}
       <form action ="{{route('cart.switchFromSaveToCart',$item->rowId)}}"method="post">
         {{csrf_field()}}
         <button type="submit" class="button is-success is-outlined"><i class="fas fa-cart-plus fa-1x "></i> </button>
         <span class="is-size-6 has-text-grey">افزودن به سبد خرید </span>
       </form>
     </div>
     </td>
   </tr>
   @endforeach
   </table>
@endif
<meta name="csrf-token" content="{{ csrf_token() }}">
  @endsection









@section('extra-js')

  <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  <script type="text/javascript">

  const classname = document.querySelectorAll('.quantity')
  Array.from(classname).forEach(function(element){


  const id = element.getAttribute('data-id')
    element.addEventListener('change',function(){
          axios.patch(`cart/${id}`, {
          quantity: this.value
        })
        .then(function (response) {
          console.log(response);
          window.location.href = "{{route('cart.index')}}"
        })
        .catch(function (error) {
          console.log(error);
        });


    })
  });
  </script>
@endsection
