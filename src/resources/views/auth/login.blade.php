@extends('layouts.app')

@section('css')
<link rel ="stylesheet" href="{{ asset('css/login.css') }}"/>
@endsection

@section('content')

<div class="login-form__content">
    <div class="login-form__inner">
        <div class="login-form__heading">
            ログイン
        </div>
        <form class="form" action="/login" method="post">
        @csrf
            <div class="login-form__content">

                <div class="form__group">
                    <div class="form__group--text">
                        <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}"/>
                    </div>
                    <div class="form__error">
                <!--エラー実装後入力-->
                @if (session('login_error'))
                    <div class="alert alert-danger">
                        {{ session('login_error') }}
                    </div>
                @endif
                    </div>
                </div>
                <div class="form__group">
                    <div  class="form__group--text">
                        <input type="password" name="password" placeholder="パスワード" />
                    </div>
                    <div class="form__error">
                    <!--エラー実装後入力-->
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                </div>
            </div>
        </form>
        <div class="entry">
            <p class="entry__guide">アカウントをお持ちでない方はこちらから</p>
            <a class="entry__guide--link" href="/register">会員登録</a>
        </div>
    </div>
</div>
@endsection