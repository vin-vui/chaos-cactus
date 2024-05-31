document.addEventListener('scroll', function() {
    const hero = document.getElementById('hero');
    const game = document.getElementById('game');
    const gamePosition = game.getBoundingClientRect().top;

    if (gamePosition <= 0) {
        hero.style.opacity = 0;
    } else {
        hero.style.opacity = 1;
    }
});
