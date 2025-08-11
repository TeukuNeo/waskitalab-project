const hamburger = document.querySelector('.hamburger-menu');
const navMenu = document.querySelector('nav');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    console.log('click..');
});