<?php
require_once "includes/config.php";
header('Content-Type: application/json; charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Méthode non autorisée"]);
    exit();
}
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Vérifie si toutes les données requises sont présente
if (!isset($data['nom_utilisateur'], $data['email'], $data['mot_de_passe'])) {
    http_response_code(400); // Mauvaise requête
    echo json_encode(['error' => 'Données manquantes.']);
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - EmploisPlus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                        <label for="candidate-name">Nom complet*</label>
                        <input type="text" id="candidate-name" required>
                    </div>

                    <div class="form-group">
                        <label for="candidate-email">Email*</label>
                        <input type="email" id="candidate-email" required>
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
                        <label for="company-name"> Nom de l'entreprise*</label>
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
                            <option value="1-10">Petite (1-10)</option>
                            <option value="11-50">Moyenne (11-50)</option>
                            <option value="51+">Grande (51+)</option>
                        </select>
                    </div>
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

    <script src="js/register.js"></script>
</body>

</html>