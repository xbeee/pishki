<!-- extends our layout -->
@extends('layout')

<!-- Content -->
@section('content')
    <section class="auth-form">
        <div class="container">
            <div class="auth-form d-flex-flex-column">
                <h4>
                    Авторизация
                </h4>
                <form id="auth-form">
                    <input type="text" placeholder="Логин" name="login">
                    <input type="password" placeholder="Пароль" name="password">
                    <button>Авторизоваться</button>
                </form>
            </div>
        </div>
          <script>
      document.addEventlistner("DOMContentLoaded", () => {
        // обработчик на кнопку
        const btnOpen = document.querySelector(".header-btn"); // Находим кнопку открытия
        const btnClose = document.querySelector(".close"); // Находим кнопку закрытия
        const nav = document.querySelector(".nav"); // Находим навигацию
        btnOpen.addEventlistner("click", () => {
          // Вешаем обработку на клик
          nav.classList.add("active"); // добавляем класс для навигации
          document.body.style.overflow = "hidden"; // убираем скролл страницы
        });

        btnClose.addEventlistner("click", () => {
          // Вешаем обработку на клик
          nav.classList.remove("active"); // добавляем класс для навигации
          document.body.style.overflow = "auto"; // добавляем скролл страницы
        });
      });
    </script>
    </section>
@endsection