
@extends('layout')

@section('content')
<section class="admin-panel">
    <div class="container">
        <div class="admin-panel-content d-flex flex-column">
            <h5 class="title">Админ панель</h5>

            <div class="content d-flex">
                <div class="content-nav d-flex flex-column">
                    <button class="nav-btn active" data-target="users">пользователи</button>
                    <button class="nav-btn" data-target="orders">заказы</button>
                    <button class="nav-btn" data-target="menu">меню</button>
                </div>
                <div class="wrapper">
                    <!-- Таблица пользователей -->
                    <div class="content-table-wrapper" id="users-content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>имя</th>
                                <th>email</th>
                                <th>дата создания аккаунта</th>
                                <th>действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Иван</td>
                                <td>test@mail.ru</td>
                                <td>15.05.2025</td>
                                <td class="edit">
                                    <span class="edit-user">Редактировать</span>
                                    <svg width="1" height="7" viewBox="0 0 1 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" x2="0.5" y2="7" stroke="#6B3E1D"/>
                                    </svg>
                                    <span class="delete-user">Удалить</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Таблица заказов -->
                    <div class="content-table-wrapper" id="orders-content" style="display: none;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>дата</th>
                                <th>блюда</th>
                                <th>стоимость</th>
                                <th>пользователь</th>
                                <th>адресс</th>
                                <th>статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>13.03.2025</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p>пышки (3 шт.)</p>
                                        <p>пышки (3 шт.)</p>
                                    </div>
                                </td>
                                <td>350руб</td>
                                <td>vanya15@mail.ru</td>
                                <td>адресс</td>
                                <td class="status">
                                    <div class="status-current accept">
                                        принят
                                    </div>
                                    <span class="edit-status">
                                        изменить статус
                                        <div class="statuses d-flex flex-column">
                                            <div class="accept">принят</div>
                                            <div class="cooked">готовится</div>
                                            <div class="completed">готов</div>
                                            <div class="gived">выдан</div>
                                            <div class="false">отменен</div>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Таблица меню -->
                    <div class="content-table-wrapper" id="menu-content" style="display: none;">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>название</th>
                                <th>цена</th>
                                <th>вес</th>
                                <th>калории</th>
                                <th>изображение</th>
                                <th>действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Пышка</td>
                                <td>35р.</td>
                                <td>55г.</td>
                                <td>185</td>
                                <td>
                                    <input type="file">
                                </td>
                                <td class="edit">
                                    <span class="edit-item">Редактировать</span>
                                    <svg width="1" height="7" viewBox="0 0 1 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="0.5" x2="0.5" y2="7" stroke="#6B3E1D"/>
                                    </svg>
                                    <span class="delete-item">Удалить</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--modals-->
<div class="modal modal-delete-user d-flex align-items-center justify-content-center">
    <div class="modalBckg"></div>
    <div class="modalBlockWrapper d-flex justify-content-center">

        <div class="modalBlock d-flex flex-column">
            <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
            </div>

            <form class="modalBlockForm logout modalBlockFormLogin d-flex flex-column" autocomplete="off">
                @csrf
                <h5>вы хотите удалить <br/> пользователя “Иван”? </h5>
                <div class="btns d-flex">
                    <button type="submit">удалить</button>
                    <button class="modalClose" type="button">отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-edit-user data d-flex align-items-center justify-content-center">
    <div class="modalBckg"></div>
    <div class="modalBlockWrapper d-flex justify-content-center">

        <div class="modalBlock d-flex flex-column">
            <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
            </div>

            <form class="modalBlockForm edit modalBlockFormLogin d-flex flex-column" autocomplete="off">
                @csrf
                <h5>Редактировать пользователя</h5>
                <div class="d-flex flex-column">
                    <input type="text" name="name" placeholder="Имя" >
                </div>
                <div class="d-flex flex-column">
                    <input type="email" name="email" placeholder="Email" >
                </div>
                <button>применить изменения</button>
            </form>
        </div>
    </div>
</div>

@endsection
