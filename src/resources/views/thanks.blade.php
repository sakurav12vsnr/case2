@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="css/app.css">

<div class="thanks-container">
    <div class="thanks-box">
        <div class="thanks-msg">
            会員登録ありがとうございます
        </div>
        <div class="thanks-btn">
            <input type="submit" onclick="location.href='/login'" value="ログインする">
        </div>
    </div>
</div>
@endsection