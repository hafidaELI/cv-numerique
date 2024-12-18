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
// Fonction pour partager le lien du profil
function shareProfile() {
    if (navigator.share) {
        navigator.share({
            title: 'Mon Profil',
            text: 'Découvrez mon profil !',
            url: window.location.href, // Partage le lien actuel
        }).then(() => {
            console.log('Profil partagé avec succès !');
        }).catch((error) => {
            console.error('Erreur lors du partage :', error);
        });
    } else {
        alert("La fonctionnalité de partage n'est pas supportée sur ce navigateur.");
    }
}
