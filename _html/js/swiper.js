//swiper
import Swiper from 'swiper';

//DETAILS LIST
const detailsList = [
  { image: '../images/shop/product--large/product-test-thumbnail-1.png' },
  { image: '../images/shop/product--large/product-test-thumbnail-1.png' },
  { image: '../images/shop/product--large/product-test-thumbnail-1.png' },
  { image: '../images/shop/product--large/product-test-thumbnail-1.png' },
];

var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});

//RELATED PRODUCTS
const relatedProductsList = [
    { name: 'product 1', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
    { name: 'product 2', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
    { name: 'product 3', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
    { name: 'product 4', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
    { name: 'product 5', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
    { name: 'product 6', image: '../images/shop/product--large/product-test-thumbnail-1.png' },
];
  


let productText = '';
relatedProductsList.forEach(function(product, index) {
	productText = productText + `
    <div class="swiper-slide" data-index="${index}">
        <div class="img">
            <a class="link--img" href="">   
              <img class="img--zoom-in" src="${product.image}"/>
            </a>
        </div>

        <a href="./shop_product-details.html" class="link link--related-product">
          <h3 class="h--s weight--400">${product.name}</h3>
        </a>
    </div>
    `;
});

document.querySelector('.product-swiper .swiper-wrapper').innerHTML = productText;

document.querySelectorAll('.swiper-slide').forEach(function(slide) {
	slide.addEventListener('click', function() {
		const index = slide.dataset.index;
	});
});

///

const productSwiper = new Swiper('.product-swiper', {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 48,
  });