// cartToggleMenu
var openCartMenu = document.querySelector('.cart-btn').addEventListener("click", openMenu)
var cartMenu = document.querySelector('.cart-box')

function openMenu() {
    cartMenu.classList.add("cart-menu-open")
}

var closeCartMenu = document.querySelector('.cart-toggle-btn').addEventListener("click", closeMenu)

function closeMenu() {
    cartMenu.classList.toggle("cart-menu-open")
}