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


// HEADER DESCRIPTION CHANGER
const desc = document.querySelector('.logodesc');
const texts = [
  'Design Engineer.',
  'Dad.'
]
let i = 0;
let textIndex = 0;
const speed = 50;
const pauseDuration = 5000;

texts.unshift(desc.innerHTML);

function deleteText() {
  if (i <= texts[textIndex].length) {
    desc.innerHTML = texts[textIndex].substring(0, texts[textIndex].length - i) + "▏";
    i++;
    setTimeout(deleteText, speed);
  } else {
    i = 0;
    textIndex = textIndex + 1 == texts.length ? 0 : textIndex + 1;
    typeText();
    return;
  }
}

function typeText() {
  if (i <= texts[textIndex].length) {
    desc.innerHTML = texts[textIndex].substring(0, i) + "▏";
    i++;
    setTimeout(typeText, speed);
  } else {
    desc.innerHTML = texts[textIndex].substring(0, desc.innerHTML.length - 1);
    i = 0;
    setTimeout(deleteText, pauseDuration);
    return;
  }
}

setTimeout(deleteText, pauseDuration);