@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}"/>
@endsection

@section('content')

<div class="entry-form__content">
    <div class="entry-form__inner">
        <div class="entry-form__heading">
            会員登録
        </div>
        <form class="form" action="/register" method="post">
            @csrf
            <div class="entry-form__content">
                <div class="entry-form__group">
                    <div class="form__content--text">
                        <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="entry-form__group">
                    <div class="form__content--text">
                        <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="entry-form__group">
            <div class="form__content--text">
                        <input type="password" name="password"  placeholder="パスワード" />
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
                <div class="entry-form__group">
                    <div class="form__content--text">
                        <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">会員登録</button>
            </div>
        </form>
        <div class="login">
            <p class="login__guide">アカウントをお持ちの方はこちらから</p>
            <a class="login__guide--link" href="/login">ログイン</a>
        </div>
    </div>
</div>
@endsection
