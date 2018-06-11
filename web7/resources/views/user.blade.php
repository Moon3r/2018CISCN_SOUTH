@extends("layout")

@section('body')
<div class="jumbotron user-info">
    <h1 class="user-username">{{ $user['username'] }}</h1>
    <h3 class="user-email">邮箱地址：{{ $user['mail'] }}</h3>
    <h3 class="user-integral">剩余积分：{{ $user['integral'] }}</h3>
    <h4 class="user-info">{{ $info }}</h4>
</div>
@endsection