@extends("layout")

@section('body')
        <div class="row">
            <form action="/login" method="post" class="col-lg-6 col-lg-offset-3">
                <div class="form-group">
                    <label>用户名：</label>
                    <input type="text" class="form-control" name="username" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>密码：</label>
                    <input type="password" class="form-control" name="password" placeholder="" required>
                </div>

                <div>
                    <label>验证码 ( {{ $ques }} )：</label><br/>
                    <canvas id="vtt_captcha" width="680" height="460" rel="{{ $uuid }}"></canvas>
                    <input type="hidden" id="captcha_x" name="captcha_x" value="">
                    <input type="hidden" id="captcha_y" name="captcha_y" value="">
                </div>
                <p></p>
                <a class="btn btn-warning" href="/pass/reset">找回密码</a>
                <button class="btn btn-primary pull-right" type="submit">登录</button>
            </form>
            </div>
        <br/>
@include("captcha")
@endsection