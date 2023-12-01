<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getRegister()//ユーザー新規登録ページの表示
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)//ユーザー新規登録処理
    {
        $register = $request->only(['name', 'email', 'password']);
        User::create($register);
        return view('stamping');
    }

    public function getLogin()//ログインページの表示
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)//ログイン処理
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('stamping')->with('login_success','ログイン成功しました！');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています',
        ]);
    }

    public function index()//打刻ページ表示
    {
        return view('stamping');
    }

    public function getLogout()//ログアウト処理
    {
        Auth::logout(); // ユーザーのログアウト

        return redirect('/login')->with('logout_success', 'ログアウトしました'); // ログアウト後にログインページにリダイレクト
    }
}
