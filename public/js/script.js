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
})


// forms
document.addEventListener("DOMContentLoaded", ()=>{
    const registerForm = document.querySelector('.modalBlockFormRegister');

    registerForm.addEventListener('submit', (e)=>{
        event.preventDefault();

        const fd = new FormData(registerForm);

        fetch('/api/register', {
            body: fd,
            method: "POST"
        }).then(resp => resp.json())
            .then(result => {
                if(result.status === 500){
                    alert('Ошибка сервера. Повторите попытку!');
                }else if(result.status === 409){
                    alert('Пользователь с таким email уже существует');
                }else{
                    window.location.href = '/'
                }
            });
    });
});

document.addEventListener("DOMContentLoaded", ()=>{
    const loginForm = document.querySelector('.modalBlockFormLogin');

    loginForm.addEventListener('submit', (e)=>{
        event.preventDefault();

        const fd = new FormData(loginForm);

        if(fd.get('password').length < 6){
            alert('Пароль должен быть более 6 символов1')
            return;
        }

        fetch('/api/login', {
            body: fd,
            method: "POST"
        }).then(resp => resp.json())
            .then(result => {
                if(result.status === 500){
                    alert('Ошибка сервера. Повторите попытку!');
                }else if(result.status === 403){
                    alert('Неверный логин или пароль');
                }else{
                    window.location.href = '/'
                }
            });
    });
});
