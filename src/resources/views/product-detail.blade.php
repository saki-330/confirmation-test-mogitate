@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
@endsection

@section('main')
    <form class="detail-form__update">
        @csrf
        <div class="detail-list">
            <p class="detail-title">
                <span class="detail-title-list">商品一覧</span>＞キウイ
            </p>
            <div class="detail-content">
                <div class="product-img">
                    <div class="product-img-src">
                        <img src="" alt="">
                    </div>
                    <input type="file" name="file" class="form__item-input-file">
                </div>
                <div class="product-text">
                    <div class="detail-form__item">
                        <p class="form__item-label">商品名</p>
                        <input type="text" name="name" class="form__item-input" value="{{ old('name') }}">
                    </div>
                    <div class="detail-form__item">
                        <p class="form__item-label">値段</p>
                        <input type="text" name="price" class="form__item-input" value="{{ old('price') }}">
                    </div>
                    <div class="detail-form__item">
                        <p class="form__item-label">季節</p>
                        <div class="checkbox-season">
                            <input type="checkbox" name="season" class="form__item-input-season" 
                            value="春"{{ is_array(old("checkbox")) && in_array("春", old("checkbox"), true)?' checked' : '' }}>春
                            <input type="checkbox" name="season" class="form__item-input-season"
                            value="夏"{{ is_array(old("checkbox")) && in_array("夏", old("checkbox"), true)?' checked' : '' }}>夏
                            <input type="checkbox" name="season" class="form__item-input-season" 
                            value="秋"{{ is_array(old("checkbox")) && in_array("秋", old("checkbox"), true)?' checked' : '' }}>秋
                            <input type="checkbox" name="season" class="form__item-input-season" 
                            value="冬"{{ is_array(old("checkbox")) && in_array("冬", old("checkbox"), true)?' checked' : '' }}>冬
                        </div>
                    </div>
                </div>

@endsection