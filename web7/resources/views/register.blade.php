@extends("layout")

@section('body')
        <div class="row">
            <form action="/register" method="post" class="col-lg-6 col-lg-offset-3">
                <div class="form-group">
                    <label>用户名：</label>
                    <input type="text" class="form-control" name="username" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>邮箱：</label>
                    <input type="email" class="form-control" name="mail" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>密码：</label>
                    <input type="password" class="form-control" name="password" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>确认密码：</label>
                    <input type="password" class="form-control" name="password_confirm" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>推荐人：</label>
                    <input type="text" class="form-control" name="invite_user" placeholder="">
                </div>
                 <div>
                    <label>验证码 ( {{ $ques }} )：</label><br/>
                    <canvas id="vtt_captcha" width="680" height="460" rel="{{ $uuid }}"></canvas>
                    <input type="hidden" id="captcha_x" name="captcha_x" value="">
                    <input type="hidden" id="captcha_y" name="captcha_y" value="">
                </div>
                <button class="btn btn-primary pull-right" type="submit">注册</button>
            </form>
            </div>
        <br/>
@include("captcha")
@endsection