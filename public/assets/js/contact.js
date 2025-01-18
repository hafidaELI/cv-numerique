document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        // Récupération des données du formulaire
        const formData = {
            nom: document.getElementById('nom').value,
            prenom: document.getElementById('prenom').value,
            societe: document.getElementById('societe').value,
            email: document.getElementById('email').value,
            telephone: document.getElementById('telephone').value,
            message: document.getElementById('message').value
        };

        try {
            // Sauvegarde dans la base de données
            const response = await fetch('save-message.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            // Affichage du message de confirmation
            formMessage.style.display = 'block';

            if (result.success) {
                formMessage.className = 'mt-3 text-center alert alert-success';
                formMessage.textContent = 'Votre message a bien été envoyé. Je vous recontacterai dans les plus brefs délais.';
                form.reset(); // Réinitialisation du formulaire
            } else {
                formMessage.className = 'mt-3 text-center alert alert-danger';
                formMessage.textContent = 'Une erreur est survenue lors de l\'enregistrement du message, vous pouvez me contacter par email';
            }
        } catch (error) {
            formMessage.style.display = 'block';
            formMessage.className = 'mt-3 text-center alert alert-danger';
            formMessage.textContent = 'Une erreur est survenue lors de l\'enregistrement du message, vous pouvez me contacter par email';
            console.error('Erreur:', error);
        }
    });
});