document.addEventListener('scroll', function() {
    const hero = document.getElementById('hero');
    const game = document.getElementById('game');
    const navbar = document.getElementById('navbar');
    const gamePosition = game.getBoundingClientRect().top;
    const heroPosition = hero.getBoundingClientRect().top;

    if (gamePosition <= 0) {
        hero.style.opacity = 0;
    } else {
        hero.style.opacity = 1;
    }
    if (heroPosition <= 0) {
        navbar.style.opacity = 0.8;
    } else {
        navbar.style.opacity = 1;
    }

});

document.getElementById('page-home').classList.add('group');
document.getElementById('page-game').classList.add('group');
document.getElementById('page-press').classList.add('group');
document.getElementById('page-shop').classList.add('group');


