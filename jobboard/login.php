<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - EmploisPlus</title>
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
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" class="btn-login active">Connexion</a></li>
                    <li><a href="register.php" class="btn-register">Inscription</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="auth-container">
        <div class="auth-card">
            <h2><i class="fas fa-sign-in-alt"></i> Connexion</h2>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required placeholder="votre@email.com">
                </div>
                
                <div class="form-group">
                    <label for="password">Mot de passe*</label>
                    <input type="password" id="password" name="password" required placeholder="••••••••">
                    <div class="forgot-password">
                        <a href="forgot-password.html">Mot de passe oublié ?</a>
                    </div>
                </div>
                
                <div class="form-group remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>
                
                <button type="submit" class="submit-btn">
                    <i class="fas fa-sign-in-alt"></i> Se connecter
                </button>
            </form>
            
            <div class="auth-divider">
                <span>ou</span>
            </div>
            
            <div class="social-auth">
                <button class="social-btn google">
                    <i class="fab fa-google"></i> Continuer avec Google
                </button>
                <button class="social-btn linkedin">
                    <i class="fab fa-linkedin-in"></i> Continuer avec LinkedIn
                </button>
            </div>
            
            <div class="auth-footer">
                <p>Pas encore membre ? <a href="register.html">Créez un compte</a></p>
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
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about.php">À propos</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-social">
                    <h4>Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61579526610039&mibextid=rS40aB7S9Ucbxw6v" target="_blank"><i class="fab fa-facebook-f"></i></a>
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

    <script src="js/login.js"></script>
</body>
</html>