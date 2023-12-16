//SELECTORS
// Nav
const menuBtn = document.querySelector('.js-topbar__menu-toggler');
const menu = document.querySelector('.js-menu');
const topbar = document.querySelector('.js-topbar')

//FUNCTIONS

//handle menu

const handleMenu = () => {
    if (menuBtn.checked) {
        menu.classList.add('visible');
        topbar.classList.add('on-menu');
    } else {
        menu.classList.remove('visible');
        topbar.classList.remove('on-menu');
    }
}

//EVENTS

//opening menu
menuBtn.addEventListener('click', handleMenu);
