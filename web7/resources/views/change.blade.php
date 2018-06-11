@extends("layout")

@section('body')
        <div class="row">
            <form action="/user/change" method="post" class="col-lg-6 col-lg-offset-3">
                <div class="form-group">
                    <label>原密码：</label>
                    <input type="password" class="form-control" name="old_password" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>新密码：</label>
                    <input type="password" class="form-control" name="password" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>确认密码：</label>
                    <input type="password" class="form-control" name="password_confirm" placeholder="" required>
                </div>
                <button class="btn btn-primary pull-right" type="submit">修改</button>
            </form>
            </div>
        <br/>
@endsection