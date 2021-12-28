@extends('layouts.app')

@section('content')
<div class="signup_container">
    <h2>Signup</h2>
    @include('inc.error')
    <form method="post">
        @csrf
        <div>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="氏名">
        </div>
        <div>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="メールアドレス"> 
        </div>
        <div>
            <input type="password" name="password" placeholder="パスワード">
        </div>
        {{-- <div>
            <input type="password" name="re_password" placeholder="パスワードを再入力">
        </div> --}}
        <div>
            <input type="submit" value="登録する" class="submit_button">
        </div>
    </form>
</div>
@endsection