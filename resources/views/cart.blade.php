@extends('layout')


@section('content')
<section class="cart-page-section">
    <div class="container">
        <div class="cart-page d-flex justify-content-between align-items-start">
            <div class="cart-page-form d-flex flex-column">
                <h5 class="title">
                    Оформление заказа
                </h5>
                <div class="data-form d-flex flex-column">
                    <p class="data-form-title">Получатель</p>
                    <div class="data-form-fields d-flex flex-column">
                        <div class="input">
                            <p>Имя</p>
                            <input type="text" name="name" placeholder="Имя"/>
                        </div>
                        <div class="input">
                            <p>email</p>
                            <input type="email" name="email" placeholder="Email"/>
                        </div>
                    </div>
                </div>

                <div class="type-delivery d-flex justify-content-between">
                    <button class="type-delivery-btn active">
                        самовывоз
                    </button>
<!--                    Добавить класс active для подсвечивания-->
                    <button class="type-delivery-btn">
                        доставка
                    </button>
                </div>
                <!--       Здесь по сути динамически будет менятся дата         -->
                <div class="delivery d-flex flex-column">
                    <h5 class="delivery-title">Самовывоз</h5>
                    <p class="delivery-desc">Ваш заказ будет ждать вас по адресу:</p>
                    <div class="delivery-table d-flex flex-column">
                        <h5 class="text-center">понедельник</h5>
                        <div class="delivery-table-content d-flex flex-column">
                            <div class="d-flex flex-column">
                                <p>Адрес</p>
                                <span>Уфа, ул. Пушкина, 77</span>
                            </div>
                            <div class="d-flex flex-column">
                                <p>Время</p>
                                <span>с 10.00 до 20.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-type d-flex flex-column">
                    <h5>Способ оплаты</h5>
                    <div class="payment-type-btns d-flex">
                        <button class="payment-type-btn active">
                            наличные
                        </button>
                        <!--                    Добавить класс active для подсвечивания-->
                        <button class="payment-type-btn">
                            по карте
                        </button>
                    </div>
                </div>
                <button class="create-order-btn">
                    Оформить заказ
                </button>
            </div>

            <div class="cart-page-list d-flex flex-column">
                <div class="products d-flex flex-column">
                    <div class="products-el d-flex">
                        <img src="/media/menu/chai.png" alt="cart product">
                        <div class="products-el-info d-flex flex-column">
                            <p class="products-el-name">
                                пышка
                            </p>
                            <div class="products-el-info-bottom d-flex justify-content-between align-items-end">
                                <div class="price d-flex align-items-end">
                                    <p>35</p>
                                    <span>руб</span>
                                </div>
                                <div class="count d-flex">
                                    <div class="minus cu-p">
                                        -
                                    </div>
                                    <div class="count-text">
                                        1
                                    </div>
                                    <div class="plus cu-p">
                                        +
                                    </div>
                                </div>
                                <svg class="cu-p" width="36" height="40" viewBox="0 0 36 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 32C14.5304 32 15.0391 31.7893 15.4142 31.4142C15.7893 31.0391 16 30.5304 16 30V18C16 17.4696 15.7893 16.9609 15.4142 16.5858C15.0391 16.2107 14.5304 16 14 16C13.4696 16 12.9609 16.2107 12.5858 16.5858C12.2107 16.9609 12 17.4696 12 18V30C12 30.5304 12.2107 31.0391 12.5858 31.4142C12.9609 31.7893 13.4696 32 14 32ZM34 8H26V6C26 4.4087 25.3679 2.88258 24.2426 1.75736C23.1174 0.632141 21.5913 0 20 0H16C14.4087 0 12.8826 0.632141 11.7574 1.75736C10.6321 2.88258 10 4.4087 10 6V8H2C1.46957 8 0.960859 8.21071 0.585786 8.58579C0.210714 8.96086 0 9.46957 0 10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H4V34C4 35.5913 4.63214 37.1174 5.75736 38.2426C6.88258 39.3679 8.4087 40 10 40H26C27.5913 40 29.1174 39.3679 30.2426 38.2426C31.3679 37.1174 32 35.5913 32 34V12H34C34.5304 12 35.0391 11.7893 35.4142 11.4142C35.7893 11.0391 36 10.5304 36 10C36 9.46957 35.7893 8.96086 35.4142 8.58579C35.0391 8.21071 34.5304 8 34 8ZM14 6C14 5.46957 14.2107 4.96086 14.5858 4.58579C14.9609 4.21071 15.4696 4 16 4H20C20.5304 4 21.0391 4.21071 21.4142 4.58579C21.7893 4.96086 22 5.46957 22 6V8H14V6ZM28 34C28 34.5304 27.7893 35.0391 27.4142 35.4142C27.0391 35.7893 26.5304 36 26 36H10C9.46957 36 8.96086 35.7893 8.58579 35.4142C8.21071 35.0391 8 34.5304 8 34V12H28V34ZM22 32C22.5304 32 23.0391 31.7893 23.4142 31.4142C23.7893 31.0391 24 30.5304 24 30V18C24 17.4696 23.7893 16.9609 23.4142 16.5858C23.0391 16.2107 22.5304 16 22 16C21.4696 16 20.9609 16.2107 20.5858 16.5858C20.2107 16.9609 20 17.4696 20 18V30C20 30.5304 20.2107 31.0391 20.5858 31.4142C20.9609 31.7893 21.4696 32 22 32Z" fill="#6B3E1D"/>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
                <div class='clear-cart-btn d-flex justify-content-end align-items-center cu-p'>
                    <p>Очистить корзину</p>
                    <svg width="36" height="40" viewBox="0 0 36 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 32C14.5304 32 15.0391 31.7893 15.4142 31.4142C15.7893 31.0391 16 30.5304 16 30V18C16 17.4696 15.7893 16.9609 15.4142 16.5858C15.0391 16.2107 14.5304 16 14 16C13.4696 16 12.9609 16.2107 12.5858 16.5858C12.2107 16.9609 12 17.4696 12 18V30C12 30.5304 12.2107 31.0391 12.5858 31.4142C12.9609 31.7893 13.4696 32 14 32ZM34 8H26V6C26 4.4087 25.3679 2.88258 24.2426 1.75736C23.1174 0.632141 21.5913 0 20 0H16C14.4087 0 12.8826 0.632141 11.7574 1.75736C10.6321 2.88258 10 4.4087 10 6V8H2C1.46957 8 0.960859 8.21071 0.585786 8.58579C0.210714 8.96086 0 9.46957 0 10C0 10.5304 0.210714 11.0391 0.585786 11.4142C0.960859 11.7893 1.46957 12 2 12H4V34C4 35.5913 4.63214 37.1174 5.75736 38.2426C6.88258 39.3679 8.4087 40 10 40H26C27.5913 40 29.1174 39.3679 30.2426 38.2426C31.3679 37.1174 32 35.5913 32 34V12H34C34.5304 12 35.0391 11.7893 35.4142 11.4142C35.7893 11.0391 36 10.5304 36 10C36 9.46957 35.7893 8.96086 35.4142 8.58579C35.0391 8.21071 34.5304 8 34 8ZM14 6C14 5.46957 14.2107 4.96086 14.5858 4.58579C14.9609 4.21071 15.4696 4 16 4H20C20.5304 4 21.0391 4.21071 21.4142 4.58579C21.7893 4.96086 22 5.46957 22 6V8H14V6ZM28 34C28 34.5304 27.7893 35.0391 27.4142 35.4142C27.0391 35.7893 26.5304 36 26 36H10C9.46957 36 8.96086 35.7893 8.58579 35.4142C8.21071 35.0391 8 34.5304 8 34V12H28V34ZM22 32C22.5304 32 23.0391 31.7893 23.4142 31.4142C23.7893 31.0391 24 30.5304 24 30V18C24 17.4696 23.7893 16.9609 23.4142 16.5858C23.0391 16.2107 22.5304 16 22 16C21.4696 16 20.9609 16.2107 20.5858 16.5858C20.2107 16.9609 20 17.4696 20 18V30C20 30.5304 20.2107 31.0391 20.5858 31.4142C20.9609 31.7893 21.4696 32 22 32Z" fill="#6B3E1D"/>
                    </svg>

                </div>
                <div class="promo d-flex flex-column">
                    <div class="input d-flex flex-column position-relative">
                        <p>Вести промокод</p>
                        <input type="text" name="promo" >
                        <div class="clear cu-p">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.1426 1L1.00044 15.1421" stroke="#6B3E1D" stroke-width="2" stroke-linecap="round"/>
                                <path d="M1 1L15.1421 15.1421" stroke="#6B3E1D" stroke-width="2" stroke-linecap="round"/>
                            </svg>

                        </div>
                    </div>
                    <p class="promo-summary">Ваша скидка: 500руб.</p>
                </div>
                <div class="summary d-flex flex-column">
                    <div class="summary-info d-flex flex-column align-items-end">
                        <p class="d-flex justify-content-between w-100">
                            Всего: <span>3500р.</span>
                        </p>
                        <p class="d-flex justify-content-between w-100">
                            Cкидка/Промокод: <span>3500р.</span>
                        </p>
                    </div>
                    <p class="summary-price d-flex justify-content-between">Итого: <span>4000р.  </span></p>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
