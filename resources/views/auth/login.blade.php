@extends('auth.auth_layout')
@section('content')
  <section class="hero is-fullheight">
          <div class="hero-body">
              <div class="container has-text-centered">
                  <div class="column is-4 is-offset-4">
                      <h3 class="title has-text-grey">ورود</h3>
                      <div class="box">
                          <figure class="avatar">
                              <img width="150px" src="{{asset('img/auth_icon.jpg')}}">
                          </figure>
                           <form method="POST" action="{{ route('login') }}">
                                @csrf
                              <div class="field">
                                  <div class="control">
                                      <input id="email" name="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" placeholder="ایمیل" value="{{ old('email') }}" required autofocus>
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="field">
                                  <div class="control">
                                      <input id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="رمز عبور">
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              <div class="field">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    مرا به خاطر بسپار
                                </label>
                              </div>
                              <button type="submit" class="button is-primary is-fullwidth">
                                  ورود به دیجی کالا
                              </button>
                              @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      کلمه عبورم را فراموش کرده ام !
                                  </a>
                              @endif
                          </form>
                      </div>
                      <p class="has-text-grey">
                          <a href="{{route('register')}}">ثبت نام</a> &nbsp;·&nbsp;
                          <a href="{{route('landing-page')}}">بازگشت به فروشگاه</a> &nbsp;·&nbsp;
                      </p>
                  </div>
              </div>
          </div>
      </section>

@endsection
