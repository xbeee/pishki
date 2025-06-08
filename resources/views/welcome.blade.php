
@extends('layout')

@section('content')
    <section class="main-page">
        <div class="container">
            <div class="main-page-content d-flex flex-column align-items-center">
                <div class="main-page-slogan d-flex flex-column align-items-center">
                    <div class="first d-flex align-items-end">
                        <p>наши</p>
                        <span>пышки</span>
                        <p>едут</p>
                    </div>
                    <p>к тебе</p>
                </div>
                <div class="main-page-content-image d-flex flex-column align-items-center">
                    <div class="wrap position-relative">
                        <img src="/media/main/main-image.png" alt="image">
                        <p class="text text-1">сделано с <br/> любовью</p>
                        <p class="text text-2">ничего лишнего <br/> — только вкус</p>
                        <p class="text text-3">пышно и по-<br/>настоящему</p>
                        <p class="text text-4">натуральные <br/> ингридиенты</p>
                    </div>
                    <a href="/menu" class="main-page-content-image-link">Смотреть меню</a>
                </div>
            </div>
        </div>

    </section>
@endsection
