const open = document.querySelector('.menu-open');
const close = document.querySelector('.menu-close');
const menu = document.querySelector('.menu-container');

function openMenu() {
  menu.classList.add('open');
}

function closeMenu() {
  menu.classList.remove('open');
}

open.addEventListener('click', openMenu);
close.addEventListener('click', closeMenu);