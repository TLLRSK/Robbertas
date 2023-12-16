//SELECTORS
// Nav
const menuBtn = document.querySelector('.js-topbar__menu-toggler');
const menu = document.querySelector('.js-menu');
const topbar = document.querySelector('.js-topbar')


const cartBtn = document.querySelector('.js-btn--cart')
const cart = document.querySelector('.js-cart');
const cartCloseBtn = document.querySelector('.js-cart__toggler');


//form
const formInputs = document.querySelectorAll('.js-form__field input');

const formName = document.querySelector('.js-form__name');
const formAka = document.querySelector('.js-form__aka');
const formAddress = document.querySelector('.js-form__address');
const formEmail = document.querySelector('.js-form__email');
const formSubmit = document.querySelector('.js-btn--submit');

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

//handle cart
const handleCart = () => {
  cart.classList.toggle('show');
}

const closeCart = () => {
  console.log('holis')
  cart.classList.remove('show');
}

//check if form is filled then change submit state
const changeSubmitState = () => {
    if (formName.value && formAka.value && formAddress.value && formEmail.value && formEmail.value.includes('@') && formEmail.value.includes('.')) {
      console.log('filled');
    } else {
      console.log('unfilled');
    }
  }
  
//set input's placeholder opacity when filled or unfilled field
const isFormFilled = (input) => {
const placeholder = input.nextElementSibling;

input.value == '' ?  placeholder.classList.remove('filled') : placeholder.classList.add('filled'); 
changeSubmitState();
}


//EVENTS

//opening menu
menuBtn.addEventListener('click', handleMenu);

//opening cart
cartBtn.addEventListener('click', handleCart);
//closing cart
cartCloseBtn.addEventListener('click', closeCart);

//checking if input value has some content
formInputs.forEach(input => {
    input.addEventListener('input', () => {
      isFormFilled(input);
    });
  });
