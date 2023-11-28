<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function paging()
    {
        return view('attendance');
    }

    public function startWork(Request $request)
    {
        //dd($request);
        $user = Auth::user();//現在認証しているユーザーを取得
        //dd($user);
        $timestamp = Attendance::create([
            'user_id' => $user->id,
            'start_work' => Carbon::now()
        ]);
            return view('stamping');
    }

        //$start_work = Carbon::now();
        //$start_work = $request->all();//勤務開始打刻処理
        //dd($start_work);
        //Attendance::create($start_work);
        //return redirect('/');

    //public function endWork()
    //{
    //    $end_work = $request->all();//勤務終了打刻処理
    //    Attendance::create($end_work);
    //    return redirect('/');
    //}
}
