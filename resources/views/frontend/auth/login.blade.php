
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


