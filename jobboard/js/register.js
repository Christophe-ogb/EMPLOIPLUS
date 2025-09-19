document.addEventListener('DOMContentLoaded', function() {
    // Éléments du DOM
    const candidateBtn = document.getElementById('candidateBtn');
    const employerBtn = document.getElementById('employerBtn');
    const candidateForm = document.getElementById('candidateForm');
    const employerForm = document.getElementById('employerForm');
    
    // Gestion du changement de formulaire
    function switchForm(activeForm, activeBtn) {
        // Réinitialiser tous les boutons
        [candidateBtn, employerBtn].forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Masquer tous les formulaires
        [candidateForm, employerForm].forEach(form => {
            form.style.display = 'none';
        });
        
        // Activer le bon formulaire
        activeBtn.classList.add('active');
        activeForm.style.display = 'block';
    }
    
    // Écouteurs d'événements
    candidateBtn.addEventListener('click', (e) => {
        e.preventDefault();
        switchForm(candidateForm, candidateBtn);
    });
    
    employerBtn.addEventListener('click', (e) => {
        e.preventDefault();
        switchForm(employerForm, employerBtn);
    });
    
    // Validation des mots de passe en temps réel
    function setupPasswordValidation(formId) {
        const form = document.getElementById(formId);
        const password = form.querySelector('input[type="password"]');
        const confirm = form.querySelector('input[type="password"]:last-of-type');
        
        function validatePassword() {
            if (password.value !== confirm.value) {
                confirm.setCustomValidity("Les mots de passe ne correspondent pas");
            } else {
                confirm.setCustomValidity("");
            }
        }
        
        password.addEventListener('input', validatePassword);
        confirm.addEventListener('input', validatePassword);
    }
    
    setupPasswordValidation('candidateForm');
    setupPasswordValidation('employerForm');
    
    // Gestion de l'upload de fichier
    const fileInput = document.getElementById('candidate-cv');
    const fileText = document.querySelector('.file-text');
    
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                fileText.textContent = this.files[0].name;
            } else {
                fileText.textContent = "Parcourir les fichiers";
            }
        });
    }
    
    // Soumission des formulaires (simulée)
    [candidateForm, employerForm].forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            // Simulation de chargement
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Traitement...';
            
            // Simulation d'envoi
            setTimeout(() => {
                alert('Inscription réussie ! Redirection...');
                if (form === candidateForm) {
                    window.location.href = 'candidate-dashboard.html';
                } else {
                    window.location.href = 'employer-dashboard.html';
                }
            }, 1500);
        });
    });
});