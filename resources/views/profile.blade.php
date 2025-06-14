
@extends('layout')

@section('content')
<section class="user-page-section">
    <div class="container">
        <div class="user-page d-flex flex-column">
            <div class="user-page-info d-flex align-items-center justify-content-between">
                <div class="user-page-info-text d-flex align-items-center">
                    <svg width="200" height="200" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="100" fill="#F5D7A3"/>
                        <path d="M123.023 104.398C129.132 99.6182 133.59 93.064 135.779 85.647C137.967 78.23 137.777 70.3191 135.234 63.0148C132.691 55.7104 127.922 49.3759 121.591 44.8926C115.259 40.4093 107.68 38 99.9076 38C92.1352 38 84.5561 40.4093 78.2246 44.8926C71.8932 49.3759 67.1242 55.7104 64.5813 63.0148C62.0384 70.3191 61.848 78.23 64.0364 85.647C66.2249 93.064 70.6836 99.6182 76.792 104.398C66.3251 108.568 57.1923 115.485 50.3673 124.412C43.5423 133.338 39.281 143.939 38.0376 155.085C37.9476 155.898 38.0196 156.722 38.2496 157.508C38.4795 158.294 38.8629 159.027 39.3779 159.666C40.4178 160.956 41.9304 161.782 43.5828 161.963C45.2353 162.143 46.8923 161.664 48.1893 160.63C49.4863 159.595 50.317 158.091 50.4988 156.448C51.867 144.335 57.6745 133.148 66.8119 125.024C75.9493 116.901 87.776 112.41 100.032 112.41C112.288 112.41 124.115 116.901 133.252 125.024C142.39 133.148 148.197 144.335 149.566 156.448C149.735 157.97 150.465 159.377 151.616 160.395C152.767 161.413 154.256 161.972 155.796 161.963H156.482C158.115 161.776 159.608 160.954 160.635 159.678C161.662 158.401 162.14 156.772 161.964 155.147C160.715 143.969 156.431 133.341 149.571 124.401C142.711 115.461 133.534 108.546 123.023 104.398V104.398ZM99.9076 99.9983C94.9784 99.9983 90.1599 98.5447 86.0614 95.8212C81.9629 93.0977 78.7686 89.2267 76.8822 84.6977C74.9959 80.1687 74.5024 75.1851 75.464 70.3772C76.4256 65.5692 78.7993 61.1528 82.2847 57.6865C85.7702 54.2201 90.211 51.8595 95.0455 50.9032C99.8799 49.9468 104.891 50.4376 109.445 52.3136C113.999 54.1896 117.891 57.3664 120.63 61.4424C123.368 65.5184 124.83 70.3105 124.83 75.2126C124.83 81.7862 122.204 88.0905 117.53 92.7388C112.857 97.387 106.517 99.9983 99.9076 99.9983Z" fill="#6B3E1D"/>
                    </svg>
                    <div class="text d-flex flex-column align-items-center">
                        <h5>Иван</h5>
                        <p id="email-secret">van****@mail.ru</p>
                        <button class="edit">изменить</button>
                    </div>
                </div>
                <button class="logout">выйти</button>
            </div>
            <div class="user-page-data d-flex flex-column">
                <div class="history d-flex flex-column">
                    <h5>История заказов</h5>
                    <div class="table-wrapper">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>номер</th>
                                <th>дата</th>
                                <th>блюда</th>
                                <th>стоимость</th>
                                <th>статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1253</td>
                                <td>13.03.2025</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p>пышки (3шт)</p>
                                        <p>пышки (3шт)</p>
                                        <p>пышки (3шт)</p>
                                    </div>
                                </td>
                                <td>250руб.</td>
                                <td>выполнен</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="settings d-flex flex-column">
                    <p class="title">настройки</p>
                    <div class="settings-btn d-flex">
                        <p>Уведомления по почте</p>
                        <div class="theme-switcher">
                            <label class="switch">
                                <input type="checkbox" id="theme-toggle">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--modals-->

<div class="modal modal-logout d-flex align-items-center justify-content-center">
    <div class="modalBckg"></div>
    <div class="modalBlockWrapper d-flex justify-content-center">

        <div class="modalBlock d-flex flex-column">
            <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
            </div>

            <form class="modalBlockForm logout modalBlockFormLogin d-flex flex-column" autocomplete="off">
                @csrf
                <h5>вы хотите выйти <br/>из аккаунта?</h5>
                <div class="btns d-flex">
                    <button type="submit">выйти</button>
                    <button class="modalClose" type="button">отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-edit data d-flex align-items-center justify-content-center">
    <div class="modalBckg"></div>
    <div class="modalBlockWrapper d-flex justify-content-center">

        <div class="modalBlock d-flex flex-column">
            <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
            </div>

            <form class="modalBlockForm edit modalBlockFormLogin d-flex flex-column" autocomplete="off">
                @csrf
                <div class="d-flex flex-column">
                    <p>Изменить имя:</p>
                    <input type="text" name="name" placeholder="Имя" >
                </div>
                <div class="d-flex flex-column">
                    <p>Изменить email:</p>
                    <input type="email" name="email" placeholder="Email" >
                </div>
                <button>сохранить изменения</button>
            </form>
        </div>
    </div>
</div>


@endsection
