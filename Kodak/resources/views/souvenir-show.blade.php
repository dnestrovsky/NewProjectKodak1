@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <div class="inner-width">
        <div class="product-item">
            <div class="product-img">
                <a href="">
                    <img src="{{ Storage::url($souvenir->image) }}">
                </a>
            </div>
            <div class="product-list">
                <h3>{{ $souvenir->name }} | {{ $souvenir->name_ro }}</h3>
                <span class="price">Дата создания: {{ date('d F Y', strtotime($souvenir->created_at)) }}</span>
                <div class="actions">
                    <div class="add-to-cart">
                        <a href="" class="cart-button">Удалить</a>
                    </div>
                    <div class="add-to-links">
                        <a href="" class="wishlist"></a>
                        <a href="" class="compare"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
