@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="search-box">
    <div class="search-form">
        <div class="search-form__item">
            <select class="search-form__item-select" name="place">
                <option value="">All area</option>
            </select>
        </div>
        <div class="search-from__item">
            <select class="search-form__item-select">
                <option value="">All genre</option>
            </select>
        </div>
        <div class="search-form__item-icon">
            <img src="images/search.svg" width="26" height="26">
        </div>
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" name="keyword" placeholder="Search...">
        </div>
    </div>
</div>
<div class="card">
@foreach ($shops as $shop)
    <div class="card-container">
        <div class="card-img">
            <img src= "{{ $shop->img_src }}">
        </div>
        <div class="card-content">
            <h2 class="card-content_name">
                {{ $shop->name }}
            </h2>
            <div class="card-content_tag">
                <ul class="card-content_tag-list">
                    <li class="card-content_tag-item">
                        #{{ $shop->place }}
                    </li>
                    <li class="card-content_tag-item">
                        #{{ $shop->food }}
                    </li>
                </ul>
            </div>
            <div class="card-content_btn">
                <div class="detail-btn">
                    <a href="/detail/:{{$shop->id}}"><button type="submit" class="btn-success">詳しく見る</button></a>
                </div>
                <div class="like-btn">
                    <img src="images/heart.svg" width="30" height="30">
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection