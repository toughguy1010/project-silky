// cartToggleMenu
var openCartMenu = document.querySelector('.cart-btn')
var cartMenu = document.querySelector('.xoo-wsc-modal')
console.log(openCartMenu)
openCartMenu.addEventListener('click', openMenu)

function openMenu() {
    cartMenu.classList.add("xoo-wsc-cart-active")
    console.log(cartMenu)
}

var closeCartMenu = document.querySelector('.xoo-wsch-close').addEventListener("click", closeMenu)

function closeMenu() {
    cartMenu.classList.toggle("cart-menu-open")
}

var wcsContainer = document.querySelector('.xoo-wsc-items-count')
    // console.log(wcsContainer)