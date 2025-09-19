<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de confidentialité - EmploisPlus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Styles spécifiques pour la politique de confidentialité */
        .privacy-hero {
            background-color: var(--primary-color);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .privacy-hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .privacy-container {
            max-width: 900px;
            margin: 3rem auto;
            padding: 0 1.5rem;
        }

        .privacy-section {
            margin-bottom: 3rem;
        }

        .privacy-section h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 0.5rem;
        }

        .privacy-section h3 {
            color: var(--dark-color);
            margin: 1.5rem 0 1rem;
            font-size: 1.3rem;
        }

        .privacy-section p, 
        .privacy-section ul {
            margin-bottom: 1rem;
            line-height: 1.7;
        }

        .privacy-section ul {
            padding-left: 1.5rem;
        }

        .privacy-section li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.2rem;
        }

        .privacy-section li:before {
            content: "•";
            color: var(--secondary-color);
            position: absolute;
            left: 0;
        }

        .highlight-box {
            background-color: var(--light-color);
            padding: 1.5rem;
            border-left: 4px solid var(--secondary-color);
            margin: 1.5rem 0;
            border-radius: 0 4px 4px 0;
        }

        .update-date {
            font-style: italic;
            color: var(--text-light);
            text-align: right;
            margin-top: 2rem;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .data-table th, 
        .data-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .data-table th {
            background-color: var(--primary-color);
            color: white;
        }

        .data-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
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
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="privacy-hero">
        <div class="container">
            <h1>Politique de confidentialité</h1>
            <p>Dernière mise à jour : 15 novembre 2023</p>
        </div>
    </section>

    <!-- Privacy Content -->
    <div class="privacy-container">
        <div class="privacy-section">
            <h2>1. Introduction</h2>
            <p>EmploisPlus ("nous", "notre", "nos") s'engage à protéger la vie privée de ses utilisateurs. Cette politique explique comment nous collectons, utilisons, partageons et protégeons vos informations personnelles lorsque vous utilisez notre plateforme.</p>
            
            <div class="highlight-box">
                <p>En utilisant notre site web et nos services, vous consentez à la collecte et à l'utilisation de vos informations conformément à cette politique. Si vous n'acceptez pas cette politique, veuillez ne pas utiliser notre plateforme.</p>
            </div>
        </div>

        <div class="privacy-section">
            <h2>2. Données que nous collectons</h2>
            
            <h3>2.1 Données fournies volontairement</h3>
            <p>Nous collectons les informations que vous nous fournissez directement :</p>
            <ul>
                <li><strong>Pour les candidats :</strong> Nom, prénom, email, téléphone, CV, lettre de motivation, compétences, expérience professionnelle</li>
                <li><strong>Pour les recruteurs :</strong> Nom de l'entreprise, SIRET, adresse, email, téléphone, postes à pourvoir</li>
                <li><strong>Pour tous les utilisateurs :</strong> Données de compte (identifiant, mot de passe), préférences, communications</li>
            </ul>
            
            <h3>2.2 Données collectées automatiquement</h3>
            <p>Lors de votre navigation, nous pouvons collecter :</p>
            <ul>
                <li>Données techniques (adresse IP, type de navigateur, appareil utilisé)</li>
                <li>Données d'usage (pages visitées, durée de visite, recherches effectuées)</li>
                <li>Cookies et technologies similaires (voir section 6)</li>
            </ul>
            
            <h3>2.3 Données provenant de tiers</h3>
            <p>Nous pouvons recevoir des informations de :</p>
            <ul>
                <li>Réseaux sociaux lorsque vous vous connectez via ces plateformes</li>
                <li>Partenaires commerciaux et fournisseurs de services</li>
                <li>Sources publiquement disponibles</li>
            </ul>
        </div>

        <div class="privacy-section">
            <h2>3. Finalités du traitement</h2>
            <p>Nous utilisons vos données pour les finalités suivantes :</p>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Finalité</th>
                        <th>Données concernées</th>
                        <th>Base légale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fournir nos services (mise en relation candidats/recruteurs)</td>
                        <td>Identité, coordonnées, CV, offres d'emploi</td>
                        <td>Exécution du contrat</td>
                    </tr>
                    <tr>
                        <td>Améliorer notre plateforme</td>
                        <td>Données d'usage, feedback</td>
                        <td>Intérêt légitime</td>
                    </tr>
                    <tr>
                        <td>Communication (notifications, alertes)</td>
                        <td>Email, préférences</td>
                        <td>Consentement ou intérêt légitime</td>
                    </tr>
                    <tr>
                        <td>Conformité légale</td>
                        <td>Selon exigences légales</td>
                        <td>Obligation légale</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="privacy-section">
            <h2>4. Partage des données</h2>
            <p>Vos données peuvent être partagées avec :</p>
            <ul>
                <li><strong>Recruteurs</strong> (pour les candidats) : CV et informations de profil</li>
                <li><strong>Candidats</strong> (pour les recruteurs) : Offres d'emploi et informations sur l'entreprise</li>
                <li><strong>Prestataires de services</strong> : Hébergeurs, outils analytiques, services de paiement</li>
                <li><strong>Autorités légales</strong> : Lorsque requis par la loi</li>
            </ul>
            
            <div class="highlight-box">
                <p>Nous ne vendons pas vos données personnelles à des tiers à des fins commerciales. Tout partage est strictement encadré par des accords de confidentialité.</p>
            </div>
        </div>

        <div class="privacy-section">
            <h2>5. Conservation des données</h2>
            <p>Nous conservons vos données uniquement aussi longtemps que nécessaire :</p>
            <ul>
                <li><strong>Comptes actifs :</strong> Jusqu'à suppression par l'utilisateur ou inactivité prolongée (2 ans)</li>
                <li><strong>CV et profils :</strong> 1 an après dernière modification</li>
                <li><strong>Données de connexion :</strong> 6 mois</li>
                <li><strong>Factures :</strong> 10 ans (obligation légale)</li>
            </ul>
        </div>

        <div class="privacy-section">
            <h2>6. Cookies et technologies similaires</h2>
            <p>Nous utilisons différents types de cookies :</p>
            
            <h3>6.1 Cookies essentiels</h3>
            <p>Nécessaires au fonctionnement du site (ex : authentification)</p>
            
            <h3>6.2 Cookies de performance</h3>
            <p>Pour analyser l'usage du site et améliorer nos services</p>
            
            <h3>6.3 Cookies de ciblage</h3>
            <p>Pour personnaliser le contenu et les publicités</p>
            
            <div class="highlight-box">
                <p>Vous pouvez gérer vos préférences cookies via les paramètres de votre navigateur ou notre bannière de consentement. Le refus des cookies peut affecter certaines fonctionnalités.</p>
            </div>
        </div>

        <div class="privacy-section">
            <h2>7. Sécurité des données</h2>
            <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées :</p>
            <ul>
                <li>Chiffrement des données sensibles</li>
                <li>Sauvegardes régulières</li>
                <li>Contrôles d'accès stricts</li>
                <li>Formation du personnel</li>
            </ul>
            <p>Malgré ces mesures, aucune transmission sur Internet n'est 100% sécurisée. Nous ne pouvons garantir une sécurité absolue.</p>
        </div>

        <div class="privacy-section">
            <h2>8. Vos droits</h2>
            <p>Conformément au RGPD et à la loi informatique et libertés, vous disposez des droits suivants :</p>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Droit</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Droit d'accès</td>
                        <td>Obtenir une copie de vos données</td>
                    </tr>
                    <tr>
                        <td>Droit de rectification</td>
                        <td>Corriger des données inexactes</td>
                    </tr>
                    <tr>
                        <td>Droit à l'effacement</td>
                        <td>Demander la suppression de vos données</td>
                    </tr>
                    <tr>
                        <td>Droit à la limitation</td>
                        <td>Restreindre le traitement de vos données</td>
                    </tr>
                    <tr>
                        <td>Droit à la portabilité</td>
                        <td>Recevoir vos données dans un format structuré</td>
                    </tr>
                    <tr>
                        <td>Droit d'opposition</td>
                        <td>Vous opposer à certains traitements</td>
                    </tr>
                </tbody>
            </table>
            
            <p>Pour exercer ces droits, contactez notre DPO à l'adresse : <a href="mailto:dpo@emploisplus.bj">dpo@emploisplus.bj</a></p>
        </div>

        <div class="privacy-section">
            <h2>9. Modifications de cette politique</h2>
            <p>Nous pouvons mettre à jour cette politique occasionnellement. Les modifications prendront effet dès leur publication sur cette page.</p>
            <p>Nous vous informerons des changements majeurs par email ou via une notification sur notre plateforme.</p>
        </div>

        <div class="privacy-section">
            <h2>10. Nous contacter</h2>
            <p>Pour toute question concernant cette politique ou vos données personnelles :</p>
            <ul>
                <li><strong>Email :</strong> <a href="mailto:privacy@emploisplus.bj">privacy@emploisplus.bj</a></li>
                <li><strong>Adresse postale :</strong> 123 Rue des Entreprises, Calavi, Bénin</li>
                <li><strong>DPO :</strong> <a href="mailto:dpo@emploisplus.bj">dpo@emploisplus.bj</a></li>
            </ul>
        </div>

        <div class="update-date">
            <p>Dernière mise à jour : 15 novembre 2023</p>
        </div>
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

    <script src="../js/script.js"></script>
</body>
</html>