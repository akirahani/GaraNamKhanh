{{-- @extends('layouts.app')

@section('content') --}}
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Member Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('member.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}



@include('mobile.layouts.head')

<div class="login-bg access-login"></div>
<div class="container login-area">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0">
                <h5 class="bot-20 sec-tit center white-text"><img style="width:164px;background: #3a3a3a;" src="{!!asset('img/namkhanhoto.png')!!}"></h5>
                <form method="POST" action="{{ route('member.login.submit') }}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s10 offset-s1">
                            <input id="email3" name="email" type="email" class="validate">
                            <label for="email3">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10 offset-s1">
                            <input id="pass3" name="password" type="password" class="validate">
                            <label for="pass3">Mật khẩu</label>
                        </div>
                    </div>
                    <div class="row center">
                        <button class="waves-effect waves-light btn-large btn-primary" type="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('mobile.layouts.footer')


