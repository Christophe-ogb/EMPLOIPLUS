document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Récupération des valeurs
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const rememberMe = document.getElementById('remember').checked;
        
        // Validation simple
        if (!email || !password) {
            alert('Veuillez remplir tous les champs obligatoires');
            return;
        }
        
        // Simulation de connexion (à remplacer par un appel AJAX)
        console.log('Tentative de connexion avec :', { email, password, rememberMe });
        
        // Animation de chargement
        const submitBtn = loginForm.querySelector('.submit-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Connexion...';
        
        // Simulation de délai d'authentification
        setTimeout(() => {
            // Ici vous feriez normalement une requête AJAX vers votre backend
            // Pour l'exemple, nous simulons une redirection
            
            // Réussite (à remplacer par votre logique réelle)
            const isSuccess = true; // Simule une connexion réussie
            
            if (isSuccess) {
                alert('Connexion réussie ! Redirection vers le tableau de bord...');
                window.location.href = 'dashboard/candidat.html'; // À adapter selon le type d'utilisateur
            } else {
                alert('Identifiants incorrects');
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        }, 1500);
    });
    
    // Gestion des boutons sociaux (simulation)
    document.querySelectorAll('.social-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            alert('Connexion avec ' + this.textContent.trim() + ' - À implémenter');
        });
    });
});