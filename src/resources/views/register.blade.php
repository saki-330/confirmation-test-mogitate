@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('main')
    <p class="title">商品登録</p>
    <div class="register-content">
        <form class="register-form" action="/products/register" method="post">
            @csrf
            <div class="register-form__item">
                <p class="form__item-label">
                    商品名
                    <span class="form__item-label-required">必須</span>
                </p>
                <input type="text" name="name" class="form__item-input" placeholder="商品名を入力">
            </div>
            <div class="register-form__item">
                <p class="form__item-label">
                    値段
                    <span class="form__item-label-required">必須</span>
                </p>
                <input type="text" name="price" class="form__item-input" placeholder="値段を入力">
            </div>
            <div class="register-form__item">
                <p class="form__item-label">
                    商品画像
                    <span class="form__item-label-required">必須</span>
                </p>
                <input type="file" name="file" class="form__item-input-file">
            </div>
            <div class="register-form__item">
                <p class="form__item-label">
                    季節
                    <span class="form__item-label-required">必須</span>
                    <span class="form__item-label-multiple">複数選択可</span>
                </p>
                <div class="checkbox-season">
                    <input type="checkbox" name="season" class="form__item-input-season" value="春">春
                    <input type="checkbox" name="season" class="form__item-input-season" value="夏">夏
                    <input type="checkbox" name="season" class="form__item-input-season" value="秋">秋
                    <input type="checkbox" name="season" class="form__item-input-season" value="冬">冬
                </div>
            </div>
            <div class="register-form__item">
                <p class="form__item-label">
                    商品説明
                    <span class="form__item-label-required">必須</span>
                </p>
                <textarea name="description" cols="40" rows="5"></textarea>
            </div>
            <div class="button-wrapper">
                <a class="link__button" href="/products">戻る</a>
                <div class="register__button">
                    <button class="register__button-submit" type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>

@endsection