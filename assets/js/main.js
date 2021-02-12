const body = document.querySelector('body');
const respondLinks = document.querySelectorAll('a[href="#respond"]');
const contactLinks = document.querySelectorAll('a[href="#contact"]');
const closeLinks = document.querySelectorAll('a[href="#close"]');

function showOverlay(overlay){
  body.classList.add('show-' + overlay);
}

function hideOverlays(overlay){
  body.classList.remove('show-respond');
  body.classList.remove('show-contact');
}

respondLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    showOverlay('respond');
  });
});

contactLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    showOverlay('contact');
  });
});

closeLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    hideOverlays();
  });
});