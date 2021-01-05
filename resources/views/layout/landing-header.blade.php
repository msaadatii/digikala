<nav class="navbar navbar-digikala-header" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{URL('/')}}">
      <img src="https://www.digikala.com/static/files/bc60cf05.svg" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    {{--search box --}}
    <form  action="{{route('search')}}" method="GET">
      <div class="dk-searchbox">
        <div class="control  has-icons-left">
          <input name="keyword"  id="keyword" class="input" type="text" placeholder="جستجو در دیجی کالا  ...">
          <span class="icon is-small is-left is-dk-red ">
          <button type="submit" class="button is-danger fas fa-search has-text-white "></button>
          </span>
        </div>
      </div>
    </form>

  </div>

  <div id="navbarMenu" class="navbar-menu">


    <div class="navbar-end">
      <div class="navbar-start">
        <div class="navbar-item has-dropdown is-hoverable">
          @guest
            <a class="navbar-link">
            ورود/ ثبت نام
            </a>
          @else
            <a class="navbar-link">
            {{auth()->user()->name}}
            </a>
          @endguest

          <div class="navbar-dropdown dk-navbar-dropdown">
            @guest
            <a class="button is-dk-green" href="{{route('login')}}">
            ورود به دیجی کالا
            </a>
            <div class="navbar-item">
              کاربر جدید هستید ؟  <a href ="{{route('register')}}"> ثبت نام  <a/>
            </div>
          @else
          <div class="navbar-item">
             لیست سفارشات
           </div>
            <div class="navbar-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('خروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          @endguest
          <hr class="navbar-divider">
          <a class="navbar-item">
              <i class="far fa-user fa-fw"></i> پروفایل
          </a>
          <a class="navbar-item">
              <i class="fas fa-shopping-bag fa-fw"></i>  پیگیری سفارش
          </a>
          </div>
        </div>
      </div>
      <div class="navbar-item">
        @include('layout.cart-section')
      </div>
    </div>
  </div>
</nav>

<nav class="navbar nav-menu-dk" role="navigation" aria-label="main navigation">
  @foreach ($categories as $category)
    <div class="navbar-item  dk-menu-item">
      <a class="has-text-white"
        href="{{route('products',['category'=>$category->slug])}}">
        {{$category->name}}
      </a>
    </div>
  @endforeach
</nav>
<hr>
