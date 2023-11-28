<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RestController;

Route::get('/login', [AuthController::class, 'getLogin']);//ログインページの表示
Route::post('/login', [AuthController::class, 'postLogin']);//ログイン処理
Route::post('/logout', [AuthController::class, 'getLogout']);//ログアウト処理
Route::get('/register', [AuthController::class, 'getRegister']);//ユーザー新規登録ページの表示
Route::post('/register', [AuthController::class, 'postRegister']);//ユーザー新規登録処理

Route::middleware('auth')->group(function ()
{
Route::get('/', [AuthController::class, 'index']);//打刻画面、ミドルウエア認証済みかチェック
Route::get('/attendance/start', [AttendanceController::class, 'startWork']);//勤務開始打刻
Route::get('/attendance/end', [AttendanceController::class, 'endWork']);//勤務終了打刻
Route::get('/break/start', [RestController::class, 'startRest']);//休憩開始打刻
Route::get('/break/end', [RestController::class, 'endRest']);//休憩終了打刻
});

Route::get('/attendance', [AttendanceController::class, 'paging']);//一覧表示



