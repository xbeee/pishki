@extends('layout')

@section('content')
<section class="where-section">
    <div class="container">
        <div class="where d-flex flex-column">
            <h5>расписание</h5>

            <!-- Основной блок с расписанием -->
            <div class="where-content d-flex flex-column">
                <p class="title selected-day-text toggle-list">
                    Выберите день
                    <svg  width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L11.9994 19.9989" stroke="#6B3E1D" stroke-width="3" stroke-linecap="round"/>
                        <path d="M22 2L12.0006 19.9989" stroke="#6B3E1D" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </p>

                <!-- Список дней (изначально скрыт) -->
                <div class="where-content-list flex-column" style="display: none;">
                    <div class="el" data-day="monday">Понедельник</div>
                    <div class="el" data-day="tuesday">Вторник</div>
                    <div class="el" data-day="wednesday">Среда</div>
                    <div class="el" data-day="thursday">Четверг</div>
                    <div class="el" data-day="friday">Пятница</div>
                    <div class="el" data-day="saturday">Суббота</div>
                    <div class="el" data-day="sunday">Воскресенье</div>
                </div>

                <!-- Блоки расписания (изначально скрыты) -->
                <div class="where-content-worktime flex-column day-schedule" id="monday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="tuesday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="wednesday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="thursday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="friday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="saturday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <div class="where-content-worktime flex-column day-schedule" id="sunday" style="display: none;">
                    <div class="d-flex flex-column">
                        <p>Адрес:</p>
                        <p>Уфа ул. Пушкина, 77</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Время работы в понедельник:</p>
                        <p>с 10:00 до 20:00</p>
                    </div>
                </div>

                <!-- Добавьте аналогичные блоки для остальных дней -->
            </div>
        </div>
    </div>
</section>
@endsection
