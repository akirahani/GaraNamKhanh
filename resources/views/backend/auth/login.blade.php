 
@include('backend.layouts.head')
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
<body style="background-image: url('/assets/images/backadmin.jpg')">
    <div class="container">
        <div class="d-flex justify-content-center " style="height:90%">
            <div class="card">
                <div class="card-header">
                    <h3> Đăng nhập</h3>
                </div>
                <div class="card-body"  >
                    <form method="POST" action="{{ route('login') }}" style="padding: 5% ">
                        @csrf
                        <div class="input-group form-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <input id="email" type="email" placeholder="username"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" placeholder="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" hidden>
                            
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
</body>