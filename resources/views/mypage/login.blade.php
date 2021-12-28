@extends('layouts.app')

@section('content')
@include('inc.message')

    <div class="login_container">
        <h2>Login</h2>
        @include('inc.error')
        <form method="post">
            @csrf
            <div>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス"> 
            </div>
            <div>
                <input type="password" name="password" placeholder="パスワード">
            </div>
            <div>
                <input type="submit" value="ログイン" class="submit_button">
            </div>
        </form>
        <p>
            <a href="/signup"><i class="fas fa-user-plus"></i> 新規ユーザー登録</a>
        </p>
    </div>
@endsection