@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="shop-inf">
    <div class="shop-detail">
        <div class="shop-ttl">
            <a href="/" class="arrow-button"></a>
            <h2 class="shop-name">
                {{ $shop->name }}
            </h2>
        </div>
        <div class="shop-img">
            <img src="{{ $shop->img_src }}" width="100%">
        </div>
        <div class="shop-content_tag">
            <ul class="card-content_tag-list">
                <li class="card-content_tag-item">
                    #{{ $shop->place }}
                </li>
                <li class="card-content_tag-item">
                    #{{ $shop->food }}
                </li>
            </ul>
        </div>
        <div class="shop-explanation">
            {{ $shop->detail }}
        </div>
    </div>
    <div class="reservation">
        <h2 class="booking-ttl">
            予約
        </h2>
        <form action="/done" method="post" name="booking-form" id="booking-form">
            @csrf
            <input name="date" type="date" value="">
            @error('date')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <select name="time">
                <option value="">選択してください</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
            </select>
            @error('time')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <select name="number">
                <option value="">選択してください</option>
                <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                <option value="6">6人</option>
                <option value="7">7人</option>
                <option value="8">8人</option>
                <option value="9">9人</option>
                <option value="10">10人</option>
            </select>
            @error('number')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
            <div class="booking-conf">
                <div class="booking-detail">
                    <span class="booking-container">
                        Shop <p id="shop-name">{{ $shop->name }}</p>
                    </span>
                    <span class="booking-container">
                        Date <p id="date"></p>
                    </span>
                    <span class="booking-container">
                        Time <p id="time"></p>
                    </span>
                    <span class="booking-container">
                        Number <p id="number"></p><p for="">人</p>
                    </span>
                </div>
            </div>
            <div class="booking-btn">
                <input type="submit" value="予約する">
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/detail.js') }}"></script>

@endsection