document.addEventListener('DOMContentLoaded', ()=>{
    const btnOpen = document.querySelector('.header-button');
    const nav = document.querySelector('.sidenav');
    const bckg = document.querySelector('.sidenavBckg');
    btnOpen.addEventListener('click', ()=>{
        nav.classList.add('active');
        document.body.style.overflow = 'hidden'
    });

    bckg.addEventListener('click', ()=>{
        nav.classList.remove('active');
        document.body.style.overflow = 'auto'
    })

});


document.addEventListener("DOMContentLoaded", ()=>{
    const redirectToLoginBtn = document.querySelector(".redirect-btn.login");
    const redirectToRegisterBtn = document.querySelector(".redirect-btn.register");
    const authModal = document.querySelector('.modal-login');
    const registerModal = document.querySelector('.modal-register');
    const logoutModal = document.querySelector('.modal-logout');
    const editModal = document.querySelector('.modal-edit');
    const deleteUserModal = document.querySelector('.modal-delete-user');
    const deleteItemModal = document.querySelector('.modal-delete-item');
    const editUserModal = document.querySelector('.modal-edit-user');
    const editItemModal = document.querySelector('.modal-edit-item');
    const createItemModal = document.querySelector('.modal-add-item');
    const close = document.querySelectorAll('.modalClose');
    const authOpenBtn = document.querySelector('.header-auth-btn');

    authOpenBtn?.addEventListener("click", ()=>{
        authModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    })

    close.forEach(item => {
        item.addEventListener("click", ()=>{
            authModal?.classList.remove('active');
            registerModal?.classList.remove('active');
            logoutModal?.classList.remove('active');
            editModal?.classList.remove('active');
            deleteUserModal?.classList.remove('active');
            editUserModal?.classList.remove('active');
            editItemModal?.classList.remove('active');
            deleteItemModal?.classList.remove('active');
            createItemModal?.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    })

    redirectToLoginBtn.addEventListener("click", ()=>{
        authModal.classList.add('active');
        registerModal.classList.remove('active');
    });

    redirectToRegisterBtn.addEventListener("click", ()=>{
        authModal.classList.remove('active');
        registerModal.classList.add('active');
    });

    document.querySelector('.logout')?.addEventListener("click", ()=>{
        logoutModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    document.querySelector('.edit')?.addEventListener("click", ()=>{
        editModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    document.querySelector('.delete-user')?.addEventListener("click", ()=>{
        deleteUserModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    document.querySelector('.edit-user')?.addEventListener("click", ()=>{
        editUserModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    document.querySelector('.delete-item')?.addEventListener("click", ()=>{
        deleteItemModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    document.querySelector('.edit-item')?.addEventListener("click", ()=>{
        editItemModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    document.querySelector('.add-item-btn')?.addEventListener("click", ()=>{
        createItemModal.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

})


// forms
document.addEventListener("DOMContentLoaded", ()=>{
    const registerForm = document.querySelector('.modalBlockFormRegister');

    registerForm.addEventListener('submit', (e)=>{
        e.preventDefault();

        const fd = new FormData(registerForm);

        fetch('/api/register', {
            body: fd,
            method: "POST"
        }).then(resp => resp.json())
            .then(result => {
                if(result.status === 409){
                    alert('Пользователь с таким email уже существует');
                }else{
                    window.location.href = '/'
                }
            })
            .catch(e =>{
                alert('Ошибка сервера. Повторите попытку!' + e);
            })
        ;
    });
});

document.addEventListener("DOMContentLoaded", ()=>{
    const loginForm = document.querySelector('.modalBlockFormLogin');

    loginForm.addEventListener('submit', (e)=>{
        e.preventDefault();

        const fd = new FormData(loginForm);


        fetch('/api/login', {
            body: fd,
            method: "POST"
        }).then(resp => resp.json())
            .then(result => {
                if(result.status_code === 409){
                    alert(result.message);
                }else{
                    window.location.href = '/'
                }
            })
            .catch((e)=>{
                alert('Ошибка сервера. Повторите попытку! ' + e);
            })
        ;
    });
});




// обработка крч на форму при оставлении заявки
document.addEventListener('DOMContentLoaded', function() {
    // Обработка кнопки "Оформить заказ"
    const createOrderBtn = document.querySelector('.create-order-btn');
    if (createOrderBtn) {
        createOrderBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Собираем данные формы
            const orderData = {
                customer: {
                    name: document.querySelector('input[name="name"]').value,
                    email: document.querySelector('input[name="email"]').value
                },
                delivery: {
                    type: document.querySelector('.type-delivery-btn.active').textContent.trim().toLowerCase(),

                    // Здесь по сути данные динамечески должны подставляться, но тк базы данных нет то не могу сделать
                    // address: "Уфа, ул. Пушкина, 77", //
                    // time: "с 10.00 до 20.00" //
                },
                payment: {
                    type: document.querySelector('.payment-type-btn.active').textContent.trim().toLowerCase()
                },
                products: getCartProducts(),
                promo: document.querySelector('input[name="promo"]').value,
                total: getOrderTotal()
            };

            // Валидация
            if (!orderData.customer.name) {
                alert('Пожалуйста, введите ваше имя');
                return;
            }

            if (!orderData.customer.email) {
                alert('Пожалуйста, введите ваш email');
                return;
            }

            // Отправка данных
            sendOrderData(orderData);
        });
    }

    // Обработчики для переключения типа доставки
    const deliveryTypeBtns = document.querySelectorAll('.type-delivery-btn');
    deliveryTypeBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            deliveryTypeBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Здесь можно добавить логику для изменения блока с информацией о доставке
        });
    });

    // Обработчики для переключения типа оплаты
    const paymentTypeBtns = document.querySelectorAll('.payment-type-btn');
    paymentTypeBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            paymentTypeBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Функция для получения товаров из корзины
    function getCartProducts() {
        const products = [];
        const productElements = document.querySelectorAll('.products-el');

        productElements.forEach(el => {
            products.push({
                name: el.querySelector('.products-el-name').textContent.trim(),
                price: parseInt(el.querySelector('.price p').textContent),
                quantity: parseInt(el.querySelector('.count-text').textContent),
                image: el.querySelector('img').src
            });
        });

        return products;
    }

    // Функция для получения общей суммы заказа
    // function getOrderTotal() {
    //     const totalElement = document.querySelector('.summary-price span');
    //     return parseInt(totalElement.textContent);
    // }

    // Функция для отправки данных на сервер
    function sendOrderData(orderData) {
        fetch('/api/orders', { // замень на настоящий endpoint
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(orderData)
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data =>{
                console.log('Order created:', data);
            //     Логика что делаем дальше
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при оформлении заказа. Пожалуйста, попробуйте еще раз.');
            });
    }

    // Обработчик для очистки корзины
    // Эти кнопки по сути на сервер будут отправлять данные, для изменения корзины, тк корзина хранится в бд
    // поэтмоу этот код бесплозеный
    // const clearCartBtn = document.querySelector('.clear-cart-btn');
    // if (clearCartBtn) {
    //     clearCartBtn.addEventListener('click', function() {
    //         // Логика очистки корзины
    //         document.querySelector('.products').innerHTML = '';
    //         updateOrderSummary();
    //     });
    // }
    //
    // // Обработчики для изменения количества товаров
    // document.querySelectorAll('.plus').forEach(btn => {
    //     btn.addEventListener('click', function() {
    //         const countElement = this.parentElement.querySelector('.count-text');
    //         countElement.textContent = parseInt(countElement.textContent) + 1;
    //         updateOrderSummary();
    //     });
    // });
    //
    // document.querySelectorAll('.minus').forEach(btn => {
    //     btn.addEventListener('click', function() {
    //         const countElement = this.parentElement.querySelector('.count-text');
    //         const currentCount = parseInt(countElement.textContent);
    //         if (currentCount > 1) {
    //             countElement.textContent = currentCount - 1;
    //             updateOrderSummary();
    //         }
    //     });
    // });
    //
    // // Функция для обновления итоговой суммы
    // function updateOrderSummary() {
    //     let subtotal = 0;
    //     document.querySelectorAll('.products-el').forEach(el => {
    //         const price = parseInt(el.querySelector('.price p').textContent);
    //         const quantity = parseInt(el.querySelector('.count-text').textContent);
    //         subtotal += price * quantity;
    //     });
    //
    //     // Здесь можно добавить логику для учета скидки по промокоду
    //     const discount = 0; // Временное значение
    //
    //     document.querySelector('.summary-info p:nth-child(1) span').textContent = subtotal + 'р.';
    //     document.querySelector('.summary-info p:nth-child(2) span').textContent = discount + 'р.';
    //     document.querySelector('.summary-price span').textContent = (subtotal - discount) + 'р.';
    // }
});


// swiper slider на отзывы
document.addEventListener('DOMContentLoaded', function() {
    const reviewsSlider = new Swiper('.reviews-slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return `<span class="${className}"></span>`;
            },
        },
    });
});


// js на выбор рейтинга
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating-value');
    let currentRating = 0;
    let hoverRating = 0;

    stars.forEach(star => {
        star.addEventListener('mouseenter', function() {
            hoverRating = parseInt(this.getAttribute('data-value'));
            updateStars();
        });

        star.addEventListener('mouseleave', function() {
            hoverRating = 0;
            updateStars();
        });

        star.addEventListener('click', function() {
            currentRating = parseInt(this.getAttribute('data-value'));
            ratingInput.value = currentRating;
            updateStars();
        });
    });

    function updateStars() {
        const activeRating = hoverRating || currentRating;

        stars.forEach(star => {
            const starValue = parseInt(star.getAttribute('data-value'));
            const fill = star.querySelector('.star-fill');

            if (starValue <= activeRating) {
                fill.style.opacity = '1';
            } else {
                fill.style.opacity = '0';
            }
        });
    }
});


// АДМИНПАНЕЛЬ
document.addEventListener('DOMContentLoaded', function() {
    const navButtons = document.querySelectorAll('.nav-btn');
    const contentSections = document.querySelectorAll('.content-table-wrapper');

    navButtons.forEach(button => {
        button.addEventListener('click', function() {
            navButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            contentSections.forEach(section => {
                section.style.display = 'none';
            });

            const targetId = this.getAttribute('data-target') + '-content';
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.style.display = 'block';
                if(targetSection.getAttribute('id') === 'menu-content'){
                    document.querySelector('.add-item-btn').style.display = 'block';
                }else{
                    document.querySelector('.add-item-btn').style.display = 'none';
                }
            }
        });
    });

    if (navButtons.length > 0) {
        navButtons[0].click();
    }
});


//расписание
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.toggle-list');
    const daysList = document.querySelector('.where-content-list');
    const dayElements = document.querySelectorAll('.el');
    const allSchedules = document.querySelectorAll('.day-schedule');
    const selectedDayText = document.querySelector('.selected-day-text');

    // Обработчик клика по SVG
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();

            // Скрываем все расписания при открытии списка
            allSchedules.forEach(schedule => {
                schedule.style.display = 'none';
            });

            // Переключаем видимость списка
            daysList.style.display = daysList.style.display === 'none' ? 'flex' : 'none';
        });
    }

    // Обработчик клика по дню недели
    dayElements.forEach(el => {
        el.addEventListener('click', function() {
            const dayId = this.getAttribute('data-day');
            const dayName = this.textContent;

            // Обновляем текст выбранного дня
            selectedDayText.textContent = dayName;

            // Скрываем список
            daysList.style.display = 'none';

            // Показываем расписание выбранного дня
            document.getElementById(dayId).style.display = 'flex';
        });
    });

    // Закрытие списка при клике вне его области
    document.addEventListener('click', function(e) {
        if(daysList){
            if (!daysList?.contains(e.target) && e.target !== toggleBtn) {
                daysList.style.display = 'none';
            }
        }
    });
});


// категории
document.addEventListener('DOMContentLoaded', function() {
    const menuGrid = document.querySelector('.menu-page-grid');
    const categoryContainer = document.querySelector('.menu-page-category');
    const allCards = document.querySelectorAll('.card-el');

    // 1. Собираем все уникальные категории из карточек
    const categories = new Set();
    allCards.forEach(card => {
        categories.add(card.dataset.category);
    });

    // 2. Создаем кнопки категорий
    function renderCategories() {
        // Добавляем кнопку "Все"
        const allButton = document.createElement('div');
        allButton.className = 'menu-page-category-element active';
        allButton.textContent = 'все';
        allButton.dataset.filter = 'all';
        categoryContainer.appendChild(allButton);

        // Добавляем остальные категории
        categories.forEach(category => {
            const button = document.createElement('div');
            button.className = 'menu-page-category-element';
            button.textContent = category;
            button.dataset.filter = category;
            categoryContainer.appendChild(button);
        });
    }

    // 3. Логика фильтрации
    function filterCards(category) {
        allCards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });

        // Обновляем активную кнопку
        document.querySelectorAll('.menu-page-category-element').forEach(btn => {
            btn.classList.toggle('active', btn.dataset.filter === category);
        });
    }

    // 4. Инициализация
    renderCategories();

    // Обработчики кликов на категории
    categoryContainer.addEventListener('click', function(e) {
        if (e.target.classList.contains('menu-page-category-element')) {
            filterCards(e.target.dataset.filter);
        }
    });

    // Инициализируем показ всех карточек
    filterCards('all');
});
