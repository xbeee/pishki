
@extends('layout')

@section('content')
<section class="menu-page-section">
    <div class="container">
        <div class="menu-page d-flex flex-column">
            <div class="menu-page-header d-flex flex-column">
                <h4 class="text-center">меню</h4>
                <div class="menu-page-category d-flex">
                <!-- добавить класс Active Для активного элемента  -->
                    <div class="menu-page-category-element active">
                        все
                    </div>
                    <div class="menu-page-category-element">
                        пышки
                    </div>
                    <div class="menu-page-category-element">
                        напитки
                    </div>
                </div>
            </div>
            <div class="menu-page-grid">
                <div class="card-el d-flex flex-column align-items-center">
                    <img class="img" src="/media/menu/pishka.png" alt="pishka">
                    <div class="card-el-content d-flex flex-column">
                        <h5>пышка</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                35<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        185ккал.
                                    </div>
                                    <div>
                                        55г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/sinnabon.png" alt="sinnabon">
                    <div class="card-el-content d-flex flex-column">
                        <h5>синнабон</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                80<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        342ккал.
                                    </div>
                                    <div>
                                        105г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/shokopishka.png" alt="shokopishka">
                    <div class="card-el-content d-flex flex-column">
                        <h5>пышка</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                80<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        285ккал.
                                    </div>
                                    <div>
                                        80г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-el d-flex flex-column align-items-center">
                    <img class="img" src="/media/menu/kokosmalina.png" alt="kokosmalina">
                    <div class="card-el-content d-flex flex-column">
                        <h5>малиновая пышка</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                80<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        235ккал.
                                    </div>
                                    <div>
                                        90г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/maliniponchik.png" alt="maliniponchik">
                    <div class="card-el-content d-flex flex-column">
                        <h5>кокосовая пышка</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                80<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        200ккал.
                                    </div>
                                    <div>
                                        105г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/belichokoladpishka.png" alt="belichokoladpishka">
                    <div class="card-el-content d-flex flex-column">
                        <h5>пышка “сгущенка”</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                80<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        285ккал.
                                    </div>
                                    <div>
                                        88г.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-el d-flex flex-column align-items-center">
                    <img class="img" src="/media/menu/koktal_malina.png" alt="koktal_malina">
                    <div class="card-el-content d-flex flex-column">
                        <h5>малиновый лимонад</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                180<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        115ккал.
                                    </div>
                                    <div>
                                        500мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/lemonade_default.png" alt="lemonade_default">
                    <div class="card-el-content d-flex flex-column">
                        <h5>лимонный лимонад</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                150<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        115ккал.
                                    </div>
                                    <div>
                                        500мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/apelsin_koktail.png" alt="apelsin_koktail">
                    <div class="card-el-content d-flex flex-column">
                        <h5>апельсиновый лимонад</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                200<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        150ккал.
                                    </div>
                                    <div>
                                        500мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-el d-flex flex-column align-items-center">
                    <img class="img" src="/media/menu/cofe.png" alt="cofe">
                    <div class="card-el-content d-flex flex-column">
                        <h5>кофе латте</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                200<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        365ккал.
                                    </div>
                                    <div>
                                        400мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/capuch.png" alt="capuch">
                    <div class="card-el-content d-flex flex-column">
                        <h5>кофе капучино</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                200<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        295ккал.
                                    </div>
                                    <div>
                                        400мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-el d-flex flex-column align-items-center">
                    <img src="/media/menu/chai.png" alt="chai">
                    <div class="card-el-content d-flex flex-column">
                        <h5>чай черный</h5>
                        <div class="card-el-content-bottom d-flex justify-content-between align-items-end">
                            <p class="price">
                                100<span>руб</span>
                            </p>
                            <div class="card-el-content-bottom-right d-flex flex-column align-items-end">
                                <button class="inCart-btn">
                                    в корзину
                                </button>
                                <div class="info d-flex">
                                    <div>
                                        50ккал.
                                    </div>
                                    <div>
                                        400мл.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
