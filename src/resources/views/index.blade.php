@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
    <div class="index-upper">
        <p class="title">商品一覧</p>
        <a class="link__button" href="/products/register">+ 商品を追加</a>
    </div>

    <div class="wrapper">
        <aside class="sideber">
            <form class="search-form" action="/products/search" method="get">
                <div class="search-form__item">
                    <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword' )}}">
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
        </aside>
        <div class="content">
            <div class="card-wrapper">
                <div class="card-row">
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                </div>
                <div class="card-row">
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                    <div class="fruis-card">
                        <div class="card-img">
                            <img src="" alt="" />
                        </div>
                        <div class="card-text">
                            <p class="text"></p>
                            <p class="text"></p>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
@endsection