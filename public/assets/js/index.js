// Fonction pour gérer le scroll de la navbar mobile
document.addEventListener('DOMContentLoaded', function () {
    let lastScrollTop = 0;
    const bottomNavbar = document.querySelector('.bottom-navbar');

    window.addEventListener('scroll', function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll vers le bas
            bottomNavbar.style.transform = 'translateY(100%)';
        } else {
            // Scroll vers le haut
            bottomNavbar.style.transform = 'translateY(0)';
        }

        lastScrollTop = scrollTop;
    });
});

// Ajout de la classe active au lien de navigation actuel
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function () {
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});