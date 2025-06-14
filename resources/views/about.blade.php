@extends('layout')

@section('content')
<section class="about-page-section">
    <div class="container">
        <div class="about-page d-flex flex-column">
            <h4 class="about-page-title text-center">история бренда «пышки»</h4>
            <div class="about-page-content d-flex flex-column">
                <div class="element d-flex align-items-start">
                    <div class="element-text d-flex flex-column">
                        <p>
                            Мы — команда фудтрака «Пышки», и каждый день мы выходим на улицы города, чтобы радовать вас горячими, свежими, по-домашнему вкусными пышками. У нас нет стационарного кафе — вместо этого мы каждый день в новом месте, чтобы быть ближе к вам.
                        </p>
                        <p>Мы — обычные люди, которые обожают вкусную еду и искреннее общение. У нас в команде пекари, бариста, дизайнеры и просто фанаты своего дела, вместе мы создаём не просто еду, а настроение.</p>
                    </div>
                    <div class="element-image">
                        <img class="element-image" src="/media/about/1.jpg" alt="">
                    </div>
                </div>
                <div class="element d-flex align-items-start justify-content-between">
                    <div class="element-text d-flex flex-column">
                        <h5>Почему пышки?</h5>
                        <p>
                            Пышки — это не просто еда. Это запах детства, тепло утреннего кофе и радость простых вещей. Мы решили вернуть этот вкус, сделав его современным и мобильным. Минимум ожидания, максимум удовольствия!
                        </p>
                        <p>
                            Идея «Пышек» родилась в холодное утро — хотелось чего-то тёплого, вкусного и простого. С тех пор мы прошли путь от первой кастрюли с маслом до полноценного фудтрака. И это только начало!
                        </p>
                    </div>
                    <div class="element-image element-image--sm">
                        <img class="element-image element-image--sm" src="/media/about/2.jpg" alt="">
                    </div>
                    <div class="emp"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
