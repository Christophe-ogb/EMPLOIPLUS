document.addEventListener('DOMContentLoaded', function() {
    // Initialisation de la carte
    const map = L.map('map').setView([6.4485, 2.3554], 15); // Coordonnées d'Abomey-Calavi
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([6.4485, 2.3554]).addTo(map)
        .bindPopup('EmploisPlus<br>123 Rue des Entrepreneurs')
        .openPopup();
    
    // Gestion du formulaire
    const contactForm = document.getElementById('contactForm');
    const formSuccess = document.getElementById('formSuccess');
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Ici vous ajouteriez le code pour envoyer le formulaire (AJAX, etc.)
        // Pour l'exemple, nous simulons simplement un envoi réussi
        
        // Masquer le formulaire et afficher le message de succès
        contactForm.style.display = 'none';
        formSuccess.style.display = 'flex';
        
        // Réinitialiser le formulaire
        contactForm.reset();
        
        // Après 5 secondes, réafficher le formulaire
        setTimeout(() => {
            contactForm.style.display = 'block';
            formSuccess.style.display = 'none';
        }, 5000);
    });
});