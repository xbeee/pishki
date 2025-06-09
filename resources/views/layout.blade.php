<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Пышечки</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">
        <!--  fonts  -->
        <link rel="stylesheet" href="/fonts/stylesheet.css">
        <!--   javascript    -->
        <script type="module" src="/js/script.js"></script>
        <link rel="stylesheet" href="/bootstrap-5.3.6-dist/css/bootstrap.min.css">
        <script type="module" src="/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('header')
        @yield('content')
        <div class="modal modal-login d-flex align-items-center justify-content-center fromAskMeConsultation">
            <div class="modalBckg"></div>
            <div class="modalBlockWrapper d-flex justify-content-center">

                <div class="modalBlock d-flex flex-column">
                    <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                        <img class="modalBlockHeaderLogo" src="/media/modal/logo.png" alt="logo">
                        <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
                    </div>

                    <div class="modalBlockTitle d-flex flex-column">
                        <h4>вход по почте</h4>
                        <p>только для зарегистрированных пользователей</p>
                    </div>
                    <form class="modalBlockFormLogin d-flex flex-column" autocomplete="off">
                        @csrf
                        <div class="fields d-flex flex-column">
                            <input type="email" name="email" required placeholder="Электронная почта">
                            <input type="password" name="password" required placeholder="Пароль">
                            <button type="submit">войти</button>
                        </div>
                        <div class="fields-bottom d-flex flex-column">
                            <p>если у вас нет аккаунта вы можете зарегестрироваться</p>
                            <button class="redirect-btn register">регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal modal-register d-flex align-items-center justify-content-center fromAskMeConsultation active">
            <div class="modalBckg"></div>
            <div class="modalBlockWrapper d-flex justify-content-center">

                <div class="modalBlock d-flex flex-column">
                    <div class="modalBlockHeader d-flex align-items-center justity-content-between">
                        <img class="modalBlockHeaderLogo" src="/media/modal/logo.png" alt="logo">
                        <img class="modalClose" src="/media/modal/close-icon.svg" alt="close">
                    </div>
                    <div class="modalBlockTitle d-flex flex-column">
                        <h4>регистрация</h4>
                    </div>
                    <form class="modalBlockFormRegister d-flex flex-column" autocomplete="off">
                        @csrf
                        <div class="fields d-flex flex-column">
                            <input type="text" name="name" required placeholder="Ваше имя">
                            <input type="email" name="email" required placeholder="Электронная почта">
                            <input type="password" name="password" required placeholder="Пароль" minlength="6">
                            <div class="checkbox d-flex align-items-center  ">
                                <input type="checkbox" name="policy" required>
                                <p>согласие на обработку персональных данных</p>
                            </div>
                            <button type="submit">зарегистрироваться</button>
                        </div>
                        <div class="fields-bottom d-flex flex-column">
                            <p>уже есть аккаунт?</p>
                            <button class="redirect-btn login">войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
