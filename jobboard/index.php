<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmploisPlus - Trouvez votre emploi idéal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <!-- Header -->
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
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section with Dynamic Slogan -->
    <section class="hero">
        <div class="hero-content">
            <h2 id="dynamic-slogan">Trouvez l'emploi qui vous correspond</h2>
            <div class="hero-images">
                <img src="assets/homme-d-affaires-confiant-travaillant-sur-son-ordinateur-portable.jpg" alt="Personne travaillant" class="hero-img active">
                <img src="assets/groupe-de-dix-personnes-afro-americaines-posees-dans-la-rue-de-la-ville.jpg" alt="Équipe professionnelle" class="hero-img">
                <img src="assets/homme-afro-americain-en-costume-presentant-une-idee-d-entreprise-a-une-collegue-au-bureau.jpg" alt="Entretien d'embauche" class="hero-img">
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="search-section">
        <div class="container">
            <div class="search-box">
                <input type="text" id="job-search" placeholder="Rechercher un emploi, un métier...">
                <button id="search-btn"><i class="fas fa-search"></i></button>
                <div class="suggestions" id="search-suggestions"></div>
            </div>
            
            <div class="filters">
                <div class="filter-group">
                    <label for="location">Lieu</label>
                    <select id="location">
                        <option value="">Toutes les villes</option>
                        <option value="cotonou">Cotonou</option>
                        <option value="porto-novo">Porto-Novo</option>
                        <option value="parakou">Parakou</option>
                        <option value="abomey-calavi">Abomey-Calavi</option>
                        <option value="natitingou">Natitingou</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="contract-type">Type de contrat</label>
                    <select id="contract-type">
                        <option value="">Tous les types</option>
                        <option value="cdi">CDI</option>
                        <option value="cdd">CDD</option>
                        <option value="stage">Stage</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label for="sector">Secteur d'activité</label>
                    <select id="sector">
                        <option value="">Tous les secteurs</option>
                        <option value="informatique">Informatique</option>
                        <option value="sante">Santé</option>
                        <option value="education">Éducation</option>
                        <option value="commerce">Commerce</option>
                        <option value="banque">Banque/Finance</option>
                    </select>
                </div> 
                
                 <button class="filter-btn" >Filtrer</button>
            </div>
        </div>
    </section>

    <!-- Recent Jobs Section -->
    <section class="jobs-section">
        <div class="container">
            <h2 class="section-title">Offres récentes</h2>
            <div class="jobs-grid" id="jobs-list">
                <!-- Jobs will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Career Advice Section -->
    <section class="advice-section">
        <div class="container">
            <h2 class="section-title">Conseils carrière</h2>
            <div class="advice-cards">
                <div class="advice-card">
                    <div class="advice-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Réussir son CV</h3>
                    <p>Découvrez comment créer un CV qui attire l'attention des recruteurs.</p>
                    <a href="https://cvdesignr.com/fr" target="_blank" class="read-more">Lire plus</a>
                </div>
                
                <div class="advice-card">
                    <div class="advice-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Réussir son entretien</h3>
                    <p>Les clés pour impressionner lors de votre prochain entretien d'embauche.</p>
                    <a href="https://www.jaimelesstartups.fr/reussir-son-entretien-dembauche-conseils-et-astuces-pour-convaincre-les-recruteurs/" target="_blank" class="read-more">Lire plus</a>
                </div>
                
                <div class="advice-card">
                    <div class="advice-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Développer son réseau</h3>
                    <p>Comment créer et entretenir un réseau professionnel efficace.</p>
                    <a href="https://www.welcometothejungle.com/fr/articles/comment-font-les-meilleurs-pour-developper-leur-reseau" target="_blank"  class="read-more">Lire plus</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2>Trouvez facilement un emploi avec EmploisPlus</h2>
            <div class="cta-buttons">
                <a href="login.html" class="cta-btn">Connexion</a>
                <a href="register.html" class="cta-btn secondary">Rejoignez notre équipe</a>
            </div>
        </div>
    </section>

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

    <script src="js/script.js"></script>
</body>
</html>