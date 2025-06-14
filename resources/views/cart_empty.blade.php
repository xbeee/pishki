
@extends('layout')

@section('content')
<section class="cart-page-empty-section">
    <div class="container">
        <div class="cart-page-empty d-flex flex-column align-items-start">
            <h4>корзина пуста</h4>
            <p>Чтобы сделать заказ нужно добавить товар в карзину</p>
            <a href="/menu">к меню</a>
        </div>
    </div>
</section>
@endsection
