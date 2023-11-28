@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
@endsection

@section('content')
<div class="attendance">
    <div class="attendance__inner">
        <ul class="attendance-header">
            <li class="attendance-header__before"> < </li>
            <li class="attendance-header__data">日付</li>
            <li class="attendance-header__next"> > </li>
        </ul>
        <div class="attendance-table">
            <table class="attendance-table__inner">
                <tr class="attendance-table__row">
                    <th class="attendance-table__header">
                        <span class="list-item">名前</span>
                        <span class="list-item">勤務開始</span>
                        <span class="list-item">勤務終了</span>
                        <span class="list-item">休憩時間</span>
                        <span class="list-item">勤務時間</span>
                    </th>
                </tr>
                <tr class="attendance-table__row"><!--実装2―3トップページ用-->
                    <td class="attendance-table__item"></td>
                    <td class="list-start_work"></td>
                    <td class="list-end_work"></td>
                    <td class="list-work"></td>
                    <td class="list-break"></td>
                </tr>
            </table>
        </div>
        <div class="attendance-paging">
            <ul class="paging-list">
                <li> < </li>
                <li> 1 </li>
                <li> 2 </li>
                <li> 3 </li>
                <li> > </li>
            </ul>
        </div>
    </div>
</div>
@endsection