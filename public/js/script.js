document.addEventListener('DOMContentLoaded', ()=>{
    const btnOpen = document.querySelector('.header-button');
    const nav = document.querySelector('.sidenav');

    btnOpen.addEventListener('click', ()=>{
        nav.classList.add('active');
        document.body.style.overflow = 'hidden'
    })

})
