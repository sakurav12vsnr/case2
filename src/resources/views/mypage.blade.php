@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@if( Auth::check() )
<p class="welcome">{{Auth::user()->name}}さん</p>
@endif
<div class="mypage-container">
    <div class="booking-inf">
        <h2 class="booking-cnt">
            予約状況
        </h2>
    </div>
    <div class="favorite-list">
        <h2 class="favorite-cnt">
            お気に入り店舗
        </h2>
    </div>
</div>
@endsection