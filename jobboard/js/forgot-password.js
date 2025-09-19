document.addEventListener('DOMContentLoaded', function() {
    const resetForm = document.getElementById('passwordResetForm');
    const successMessage = document.getElementById('successMessage');

    resetForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('email').value;
        
        // Validation basique
        if (!email.includes('@')) {
            alert('Veuillez entrer une adresse email valide');
            return;
        }
        
        // Simulation d'envoi (à remplacer par un appel AJAX)
        console.log('Demande de réinitialisation pour :', email);
        
        // Animation de chargement
        const submitBtn = resetForm.querySelector('.submit-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
        
        // Simulation délai d'envoi
        setTimeout(() => {
            // Cacher le formulaire
            resetForm.style.display = 'none';
            
            // Afficher le message de succès
            successMessage.style.display = 'flex';
            
            // Réinitialiser le bouton (pour démo)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                resetForm.style.display = 'block';
                successMessage.style.display = 'none';
                resetForm.reset();
            }, 5000);
        }, 1500);
    });
});