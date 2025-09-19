<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de mot de passe - EmploisPlus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header (identique aux autres pages) -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Emplois<span style="color: #3498db;">Plus</span></h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="about.html">À propos</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html" class="btn-login">Connexion</a></li>
                    <li><a href="register.html" class="btn-register">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="auth-container">
        <div class="auth-card">
            <div class="password-reset-header">
                <i class="fas fa-key"></i>
                <h2>Réinitialiser votre mot de passe</h2>
                <p>Entrez votre email pour recevoir un lien de réinitialisation</p>
            </div>
            
            <form id="passwordResetForm">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required placeholder="votre@email.com">
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Envoyer le lien
                </button>
            </form>
            
            <div id="successMessage" class="success-message" style="display: none;">
                <i class="fas fa-check-circle"></i>
                <p>Un email avec les instructions a été envoyé à votre adresse.</p>
            </div>
            
            <div class="auth-footer">
                <p>Vous vous souvenez de votre mot de passe ? <a href="login.html">Connectez-vous</a></p>
            </div>
        </div>
    </main>

    <!-- Footer (identique aux autres pages) -->
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
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="about.html">À propos</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-social">
                    <h4>Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 EmploisPlus. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="js/forgot-password.js"></script>
</body>
</html>