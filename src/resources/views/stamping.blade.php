@extends('layouts.nav')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamping.css') }}" />
@endsection

@section('content')
<div class="stamping-form__content">
    <div class="stamping-form__inner">
            <div class="alert alert-success">
            </div>
        <div class="stamping__heading">
            <h2 class="stamping__user">{{ Auth::user()->name }} さんお疲れ様です!</h2>
        </div>
        <table class="stamping__table">
            <tr>
                <form class="form-work-button" action="/attendance/start" method="get">
                @csrf
                    <td class="stamping__button"><button class="start_work-button__submit" type="submit" name="start_work">勤務開始</button></td>
                </form>
                <form class="form-end_work" action="/attendance/end" method="get">
                @csrf
                    <td class="stamping__button"><button class="end_work-button__submit" type="submit" name="end_work">勤務終了</button></td>
                </form>
                </tr>
                <tr>
                <form class="form-start_rest" action="/break/start" method="get">
                @csrf
                    <td class="stamping__button"><button class="start_rest-button__submit" type="submit" name="start_rest">休憩開始</button></td>
                </form>
                <form class="form-end_rest" action="/break/end" method="get">
                @csrf
                    <td class="stamping__button"><button class="end_rest-button__submit" type="submit" name="end_rest">休憩終了</button></td>
                </form>
                </tr>
            </table>
    </div>
</div>
@endsection