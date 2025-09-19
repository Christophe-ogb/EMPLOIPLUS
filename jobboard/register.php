<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - EmploisPlus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* ========== VARIABLES CSS ========== */
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --success-color: #27ae60;
            --warning-color: #f39c12;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --text-light: #7f8c8d;
            --border-color: #ddd;
            --shadow: 0 2px 10px rgba(0,0,0,0.1);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        /* ========== RESET ET BASE ========== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--light-color), #dae8f5);
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* ========== HEADER ========== */
        .header {
            background: white;
            box-shadow: var(--shadow);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: bold;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
        }

        .main-nav a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            padding: 8px 16px;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .btn-login {
            background: var(--secondary-color);
            color: white !important;
        }

        .btn-register {
            background: var(--success-color);
            color: white !important;
        }

        .main-nav a:hover {
            background: var(--light-color);
        }

        .btn-login:hover, .btn-register:hover {
            transform: translateY(-1px);
        }

        /* ========== REGISTRATION CONTAINER ========== */
        .registration-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .registration-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .registration-header .logo p {
            font-size: 1.2rem;
            color: var(--text-light);
            font-style: italic;
        }

        /* ========== ACCOUNT TYPE SELECTOR ========== */
        .account-type-selector {
            display: flex;
            background: white;
            border-radius: var(--border-radius);
            padding: 10px;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
            justify-content: center;
            gap: 10px;
        }

        .type-btn {
            flex: 1;
            max-width: 200px;
            padding: 20px;
            border: none;
            background: transparent;
            border-radius: var(--border-radius);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            color: var(--text-light);
        }

        .type-btn.active {
            background: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
        }

        .type-btn i {
            font-size: 2rem;
        }

        .type-btn span {
            font-weight: 600;
            font-size: 1rem;
        }

        /* ========== FORMS ========== */
        .registration-form {
            background: white;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 30px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        .form-header h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 15px;
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            font-family: inherit;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        /* ========== FILE UPLOAD ========== */
        .file-upload {
            position: relative;
            display: block;
        }

        .file-upload input[type="file"] {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            border: 2px dashed var(--border-color);
            border-radius: var(--border-radius);
            background: var(--light-color);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .file-label:hover {
            border-color: var(--secondary-color);
            background: rgba(52, 152, 219, 0.05);
        }

        .file-label i {
            font-size: 1.5rem;
            color: var(--secondary-color);
        }

        /* ========== PASSWORD STRENGTH ========== */
        .password-strength {
            height: 4px;
            background: var(--border-color);
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
        }

        .password-strength.weak {
            background: linear-gradient(90deg, var(--accent-color) 33%, var(--border-color) 33%);
        }

        .password-strength.medium {
            background: linear-gradient(90deg, var(--warning-color) 66%, var(--border-color) 66%);
        }

        .password-strength.strong {
            background: var(--success-color);
        }

        /* ========== SUBMIT BUTTON ========== */
        .submit-btn {
            width: 100%;
            padding: 18px;
            background: var(--secondary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        /* ========== AUTH LINKS ========== */
        .auth-links {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .auth-links p {
            margin: 10px 0;
        }

        .auth-links a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .auth-links a:hover {
            color: var(--primary-color);
        }

        /* ========== FOOTER ========== */
        .footer {
            background: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
            margin-top: 60px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-brand h3 {
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .footer-links h4,
        .footer-social h4 {
            margin-bottom: 15px;
            color: var(--secondary-color);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .main-nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .main-nav {
                display: none;
            }

            .registration-container {
                padding: 0 15px;
            }

            .registration-form {
                padding: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .account-type-selector {
                flex-direction: column;
                gap: 0;
            }

            .type-btn {
                max-width: none;
                padding: 15px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 480px) {
            .registration-form {
                padding: 20px;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }

            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 12px;
            }

            .submit-btn {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Emplois<span style="color: #3498db;">Plus</span></h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" class="btn-login">Connexion</a></li>
                    <li><a href="register.php" class="btn-register">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="registration-container">
        <!-- Header Centré -->
        <header class="registration-header">
            <div class="logo">
                <p>Votre carrière commence ici</p>
            </div>
        </header>

        <!-- Contenu Principal Centré -->
        <main class="registration-main">
            <!-- Sélecteur de Type de Compte -->
            <div class="account-type-selector">
                <button id="candidateBtn" class="type-btn active">
                    <i class="fas fa-user-graduate"></i>
                    <span>Candidat</span>
                </button>
                <button id="employerBtn" class="type-btn">
                    <i class="fas fa-briefcase"></i>
                    <span>Employeur</span>
                </button>
            </div>

            <!-- Formulaire Candidat -->
            <form id="candidateForm" class="registration-form">
                <div class="form-header">
                    <h2><i class="fas fa-user-plus"></i> Inscription Candidat</h2>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="candidate-firstname">Prénom*</label>
                        <input type="text" id="candidate-firstname" required>
                    </div>

                    <div class="form-group">
                        <label for="candidate-lastname">Nom*</label>
                        <input type="text" id="candidate-lastname" required>
                    </div>

                    <div class="form-group">
                        <label for="candidate-email">Email*</label>
                        <input type="email" id="candidate-email" required>
                    </div>

                    <div class="form-group">
                        <label for="candidate-phone">Téléphone*</label>
                        <input type="tel" id="candidate-phone" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="candidate-address">Adresse complète*</label>
                        <textarea id="candidate-address" rows="3" required placeholder="Rue, ville, région, pays"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="candidate-title">Titre professionnel*</label>
                        <input type="text" id="candidate-title" required placeholder="Ex: Développeur Web, Comptable...">
                    </div>

                    <div class="form-group">
                        <label for="candidate-experience">Années d'expérience*</label>
                        <select id="candidate-experience" required>
                            <option value="">Sélectionnez...</option>
                            <option value="0-1">0-1 an</option>
                            <option value="2-3">2-3 ans</option>
                            <option value="4-5">4-5 ans</option>
                            <option value="6-10">6-10 ans</option>
                            <option value="10+">Plus de 10 ans</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="candidate-skills">Compétences clés*</label>
                        <textarea id="candidate-skills" rows="3" required placeholder="Listez vos principales compétences, séparées par des virgules"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="candidate-password">Mot de passe*</label>
                        <input type="password" id="candidate-password" minlength="8" required>
                        <div class="password-strength"></div>
                    </div>

                    <div class="form-group">
                        <label for="candidate-confirm">Confirmation*</label>
                        <input type="password" id="candidate-confirm" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="candidate-cv">Téléverser CV (PDF)*</label>
                        <div class="file-upload">
                            <input type="file" id="candidate-cv" accept=".pdf" required>
                            <label for="candidate-cv" class="file-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="file-text">Parcourir les fichiers</span>
                            </label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-user-check"></i> Valider l'inscription
                </button>
            </form>

            <!-- Formulaire Employeur -->
            <form id="employerForm" class="registration-form" style="display: none;">
                <div class="form-header">
                    <h2><i class="fas fa-building"></i> Inscription Employeur</h2>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="company-name">Nom de l'entreprise*</label>
                        <input type="text" id="company-name" required>
                    </div>

                    <div class="form-group">
                        <label for="employer-email">Email professionnel*</label>
                        <input type="email" id="employer-email" required>
                    </div>

                    <div class="form-group">
                        <label for="employer-phone">Téléphone*</label>
                        <input type="tel" id="employer-phone" required>
                    </div>

                    <div class="form-group">
                        <label for="company-sector">Secteur d'activité*</label>
                        <select id="company-sector" required>
                            <option value="">Sélectionnez...</option>
                            <option value="it">Technologie & Informatique</option>
                            <option value="finance">Finance & Banque</option>
                            <option value="health">Santé & Médical</option>
                            <option value="education">Éducation & Formation</option>
                            <option value="retail">Commerce & Vente</option>
                            <option value="manufacturing">Industrie & Manufacturing</option>
                            <option value="construction">BTP & Construction</option>
                            <option value="tourism">Tourisme & Hôtellerie</option>
                            <option value="transport">Transport & Logistique</option>
                            <option value="agriculture">Agriculture & Agroalimentaire</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="company-size">Taille de l'entreprise</label>
                        <select id="company-size">
                            <option value="1-10">Petite entreprise (1-10 employés)</option>
                            <option value="11-50">Moyenne entreprise (11-50 employés)</option>
                            <option value="51-200">Grande entreprise (51-200 employés)</option>
                            <option value="200+">Très grande entreprise (200+ employés)</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="company-address">Adresse complète de l'entreprise*</label>
                        <textarea id="company-address" rows="3" required placeholder="Adresse du siège social ou principale"></textarea>
                    </div>

                    <div class="form-group full-width">
                        <label for="company-description">Description de l'entreprise*</label>
                        <textarea id="company-description" rows="4" required placeholder="Décrivez votre entreprise, ses activités principales, sa mission..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="employer-password">Mot de passe*</label>
                        <input type="password" id="employer-password" minlength="8" required>
                        <div class="password-strength"></div>
                    </div>

                    <div class="form-group">
                        <label for="employer-confirm">Confirmation*</label>
                        <input type="password" id="employer-confirm" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-briefcase"></i> Valider l'inscription
                </button>
            </form>

            <div class="auth-links">
                <p>Déjà inscrit ? <a href="login.html">Connectez-vous ici</a></p>
                <p><a href="index.html"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a></p>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>EmploisPlus</h3>
                    <p>Bénin</p>
                </div>

                <div class="footer-links">
                    <h4>Liens utiles</h4>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">À propos</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="terms.php">Conditions d'utilisation</a></li>
                        <li><a href="privacy.php">Politique de confidentialité</a></li>
                    </ul>
                </div>

                <div class="footer-social">
                    <h4>Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61579526610039&mibextid=rS40aB7S9Ucbxw6v" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 EmploisPlus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle entre candidat et employeur
        const candidateBtn = document.getElementById('candidateBtn');
        const employerBtn = document.getElementById('employerBtn');
        const candidateForm = document.getElementById('candidateForm');
        const employerForm = document.getElementById('employerForm');

        candidateBtn.addEventListener('click', () => {
            candidateBtn.classList.add('active');
            employerBtn.classList.remove('active');
            candidateForm.style.display = 'block';
            employerForm.style.display = 'none';
        });

        employerBtn.addEventListener('click', () => {
            employerBtn.classList.add('active');
            candidateBtn.classList.remove('active');
            employerForm.style.display = 'block';
            candidateForm.style.display = 'none';
        });

        // Validation du mot de passe
        function checkPasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            return strength;
        }

        function updatePasswordStrength(input, strengthDiv) {
            const password = input.value;
            const strength = checkPasswordStrength(password);
            
            strengthDiv.className = 'password-strength';
            if (strength < 3) {
                strengthDiv.classList.add('weak');
            } else if (strength < 4) {
                strengthDiv.classList.add('medium');
            } else {
                strengthDiv.classList.add('strong');
            }
        }

        // Candidat password
        const candidatePassword = document.getElementById('candidate-password');
        const candidateStrength = candidatePassword.parentNode.querySelector('.password-strength');
        candidatePassword.addEventListener('input', () => {
            updatePasswordStrength(candidatePassword, candidateStrength);
        });

        // Employeur password
        const employerPassword = document.getElementById('employer-password');
        const employerStrength = employerPassword.parentNode.querySelector('.password-strength');
        employerPassword.addEventListener('input', () => {
            updatePasswordStrength(employerPassword, employerStrength);
        });

        // Upload de fichier
        const fileInput = document.getElementById('candidate-cv');
        const fileLabel = document.querySelector('.file-text');
        
        fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                fileLabel.textContent = this.files[0].name;
            } else {
                fileLabel.textContent = 'Parcourir les fichiers';
            }
        });

        // Validation des formulaires
        candidateForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('candidate-password').value;
            const confirm = document.getElementById('candidate-confirm').value;
            
            if (password !== confirm) {
                alert('Les mots de passe ne correspondent pas');
                return;
            }
            
            if (checkPasswordStrength(password) < 3) {
                alert('Le mot de passe doit être plus fort');
                return;
            }
            
            // Ici vous pouvez ajouter l'envoi vers le serveur
            alert('Inscription candidat réussie !');
        });

        employerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('employer-password').value;
            const confirm = document.getElementById('employer-confirm').value;
            
            if (password !== confirm) {
                alert('Les mots de passe ne correspondent pas');
                return;
            }
            
            if (checkPasswordStrength(password) < 3) {
                alert('Le mot de passe doit être plus fort');
                return;
            }
            
            // Ici vous pouvez ajouter l'envoi vers le serveur
            alert('Inscription employeur réussie !');
        });
    </script>
</body>
</html>