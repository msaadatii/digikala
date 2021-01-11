@extends('layout.layout-landing')
@section('products')
  <section class="hero is-fullwidth">
          <div class="hero-body ">
              <div class="container has-text-centered">
                  <div class="column is-4 is-offset-4">
                      <h3 class="title has-text-grey">اطلاعات کاربری</h3>

                      @if(session()->has('msg'))
                        <div class="notification is-success">
                          {{session()->get('msg')}}
                        </div>
                      @endif

                      <div class="box">
                          <form method="POST" action="{{ route('user.update') }}">
                              @method('patch')
                              @csrf
                              {{---name--}}
                              <div class="field">
                                  <div class="control">
                                      <input placeholder="نام" id="name" type="text" class="input is-large form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name',$user->name) }}" required autofocus>
                                      @if ($errors->has('name'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                            {{--email--}}
                              <div class="field">
                                  <div class="control">
                                      <input placeholder="ایمیل" id="email" type="email" class="input is-large form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email',$user->email) }}" required>
                                      @if ($errors->has('email'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                              {{--password--}}
                              <div class="field">
                                  <div class="control">
                                      <input placeholder="رمز عبور"  id="password" type="password" class="input is-large form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >
                                      @if ($errors->has('password'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                            {{---password_confirmation--}}
                            <div class="field">
                                <div class="control">
                                    <input placeholder="تکرار رمز عبور" id="password-confirm" type="password" class="input is-large form-control" name="password_confirmation">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="button is-primary is-fullwidth">
                                      ویرایش
                                    </button>
                                </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>

@endsection
