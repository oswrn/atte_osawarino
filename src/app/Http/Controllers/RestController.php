<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function startRest(Request $request)
    {
        $start_rest = $request->all();//休憩開始打刻処理
        Rest::create($start_rest);
        return redirect('/');
    }

    public function endRest(Request $request)
    {
        $end_rest = $request->all();//休憩終了打刻処理
        Rest::create($end_rest);
        return redirect('/');
    }
}
