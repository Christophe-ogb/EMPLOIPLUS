<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmploiBénin - Votre Carrière Commence Ici</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <!-- ========== SIDEBAR ========== -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo">Emplois<span style="color: #3498db;">Plus</span></div>
                <button class="toggle-btn" id="toggleBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link active" data-section="dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="search">
                        <i class="fas fa-search"></i>
                        <span>Rechercher un emploi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="applications">
                        <i class="fas fa-file-alt"></i>
                        <span>Mes candidatures</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="profile">
                        <i class="fas fa-user"></i>
                        <span>Mon profil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="settings">
                        <i class="fas fa-cog"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- ========== CONTENU PRINCIPAL ========== -->
        <main class="main-content" id="mainContent">
            <!-- ========== TOPBAR ========== -->
            <header class="topbar">
                <button class="toggle-btn mobile-toggle" id="mobileToggle" style="display: none;">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Rechercher un emploi, une entreprise..." id="globalSearch">
                </div>

                <div class="user-profile">
                    <div class="notification-icon" id="notificationBtn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    <div class="avatar">JD</div>
                </div>
            </header>

            <!-- ========== SECTION DASHBOARD ========== -->
            <section class="content-section active" id="dashboard">
                <h1 class="page-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Tableau de bord
                </h1>

                <!-- Statistiques -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-title">Candidatures envoyées</div>
                            <div class="stat-icon primary">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Ce mois-ci</div>
                    </div>

                    <div class="stat-card accent">
                        <div class="stat-header">
                            <div class="stat-title">Offres sauvegardées</div>
                            <div class="stat-icon accent">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="stat-number">8</div>
                        <div class="stat-label">Favoris</div>
                    </div>

                    <div class="stat-card success">
                        <div class="stat-header">
                            <div class="stat-title">Entretiens planifiés</div>
                            <div class="stat-icon success">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                        <div class="stat-number">3</div>
                        <div class="stat-label">Cette semaine</div>
                    </div>

                    <div class="stat-card warning">
                        <div class="stat-header">
                            <div class="stat-title">Profil consulté</div>
                            <div class="stat-icon warning">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="stat-number">24</div>
                        <div class="stat-label">Cette semaine</div>
                    </div>
                </div>

                <!-- Offres récentes -->
                <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h2 style="color: var(--primary-color);">Offres récentes</h2>
                    <a href="#" class="btn btn-outline" onclick="showSection('search')">Voir toutes les offres</a>
                </div>
                <div class="jobs-container" id="recentJobs">
                    <!-- Les offres seront générées par JavaScript -->
                </div>

                <!-- Suivi des candidatures -->
                <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin: 40px 0 20px 0;">
                    <h2 style="color: var(--primary-color);">Suivi de mes candidatures</h2>
                    <a href="#" class="btn btn-outline" onclick="showSection('applications')">Voir toutes mes candidatures</a>
                </div>
                <div class="application-list" id="recentApplications">
                    <!-- Les candidatures seront générées par JavaScript -->
                </div>
            </section>

            <!-- ========== SECTION RECHERCHE ========== -->
            <section class="content-section" id="search">
                <h1 class="page-title">
                    <i class="fas fa-search"></i>
                    Rechercher un emploi
                </h1>

                <!-- Filtres -->
                <div class="filters-section">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Mot-clé</label>
                            <input type="text" class="filter-input" id="keywordFilter" placeholder="Ex: Développeur, Marketing...">
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Catégorie</label>
                            <select class="filter-input" id="categoryFilter">
                                <option value="">Toutes les catégories</option>
                                <option value="développement">Développement web</option>
                                <option value="marketing">Marketing</option>
                                <option value="finance">Finance</option>
                                <option value="ressources-humaines">Ressources Humaines</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="vente">Vente</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Type de contrat</label>
                            <select class="filter-input" id="contractFilter">
                                <option value="">Tous les contrats</option>
                                <option value="cdi">CDI</option>
                                <option value="cdd">CDD</option>
                                <option value="stage">Stage</option>
                                <option value="freelance">Freelance</option>
                                <option value="temps-partiel">Temps partiel</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Ville</label>
                            <select class="filter-input" id="locationFilter">
                                <option value="">Toutes les villes</option>
                                <option value="cotonou">Cotonou</option>
                                <option value="porto-novo">Porto-Novo</option>
                                <option value="parakou">Parakou</option>
                                <option value="abomey">Abomey</option>
                                <option value="bohicon">Bohicon</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Secteur d'activité</label>
                            <select class="filter-input" id="sectorFilter">
                                <option value="">Tous les secteurs</option>
                                <option value="technologie">Technologie</option>
                                <option value="banque">Banque & Finance</option>
                                <option value="education">Éducation</option>
                                <option value="sante">Santé</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="commerce">Commerce</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <button class="btn btn-primary" onclick="filterJobs()" style="height: fit-content;">
                                <i class="fas fa-filter"></i>
                                Filtrer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Résultats -->
                <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <h2 style="color: var(--primary-color);" id="jobCount">Toutes les offres d'emploi</h2>
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <select class="filter-input" id="sortFilter" onchange="sortJobs()">
                            <option value="date">Plus récent</option>
                            <option value="title">Titre (A-Z)</option>
                            <option value="company">Entreprise (A-Z)</option>
                        </select>
                    </div>
                </div>
                
                <div class="jobs-container" id="allJobs">
                    <!-- Les offres seront générées par JavaScript -->
                </div>

                <!-- Pagination -->
                <div class="pagination" id="pagination">
                    <!-- La pagination sera générée par JavaScript -->
                </div>
            </section>

            <!-- ========== SECTION CANDIDATURES ========== -->
            <section class="content-section" id="applications">
                <h1 class="page-title">
                    <i class="fas fa-file-alt"></i>
                    Mes candidatures
                </h1>

                <div class="filters-section">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Statut</label>
                            <select class="filter-input" id="statusFilter" onchange="filterApplications()">
                                <option value="">Tous les statuts</option>
                                <option value="pending">En cours</option>
                                <option value="accepted">Accepté</option>
                                <option value="rejected">Refusé</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Date</label>
                            <select class="filter-input" id="dateFilter" onchange="filterApplications()">
                                <option value="">Toutes les dates</option>
                                <option value="week">Cette semaine</option>
                                <option value="month">Ce mois</option>
                                <option value="quarter">3 derniers mois</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="application-list" id="allApplications">
                    <!-- Les candidatures seront générées par JavaScript -->
                </div>
            </section>

            <!-- ========== SECTION PROFIL ========== -->
            <section class="content-section" id="profile">
                <h1 class="page-title">
                    <i class="fas fa-user"></i>
                    Mon profil
                </h1>

                <div class="profile-section">
                    <div class="profile-header">
                        <div class="profile-avatar" id="profileAvatar">JD</div>
                        <div class="profile-info">
                            <h2 id="profileName">John Doe</h2>
                            <p id="profileTitle">Développeur Full Stack</p>
                            <div class="profile-actions">
                                <button class="btn btn-primary" onclick="toggleEditMode()">
                                    <i class="fas fa-edit"></i>
                                    Modifier le profil
                                </button>
                                <button class="btn btn-outline">
                                    <i class="fas fa-download"></i>
                                    Télécharger CV
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-grid" id="profileForm">
                        <div class="form-group">
                            <label class="form-label">Prénom</label>
                            <input type="text" class="form-input" id="firstName" value="John" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-input" id="lastName" value="Doe" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-input" id="email" value="john.doe@email.com" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Téléphone</label>
                            <input type="tel" class="form-input" id="phone" value="+229 97 12 34 56" readonly>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-input" id="address" value="Cotonou, Littoral, Bénin" readonly>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Titre professionnel</label>
                            <input type="text" class="form-input" id="jobTitle" value="Développeur Full Stack" readonly>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">Compétences</label>
                            <textarea class="form-textarea" id="skills" readonly>JavaScript, React, Node.js, PHP, MySQL, MongoDB, Git, HTML5, CSS3, Bootstrap</textarea>
                        </div>
                        <div class="form-group full-width">
                            <label class="form-label">À propos de moi</label>
                            <textarea class="form-textarea" id="about" readonly>Développeur passionné avec 5 ans d'expérience dans le développement web. Spécialisé dans les technologies JavaScript modernes et les applications full-stack.</textarea>
                        </div>
                        <div class="form-group full-width" id="editActions" style="display: none;">
                            <div style="display: flex; gap: 10px;">
                                <button class="btn btn-primary" onclick="saveProfile()">
                                    <i class="fas fa-save"></i>
                                    Sauvegarder
                                </button>
                                <button class="btn btn-outline" onclick="cancelEdit()">
                                    <i class="fas fa-times"></i>
                                    Annuler
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== SECTION PARAMÈTRES ========== -->
            <section class="content-section" id="settings">
                <h1 class="page-title">
                    <i class="fas fa-cog"></i>
                    Paramètres
                </h1>

                <div class="profile-section">
                    <h3 style="color: var(--primary-color); margin-bottom: 20px;">Notifications</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                <input type="checkbox" checked> Nouvelles offres d'emploi
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                <input type="checkbox" checked> Réponses aux candidatures
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                <input type="checkbox"> Rappels d'entretiens
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                <input type="checkbox"> Newsletter hebdomadaire
                            </label>
                        </div>
                    </div>
                </div>

                <div class="profile-section">
                    <h3 style="color: var(--primary-color); margin-bottom: 20px;">Changer le mot de passe</h3>
                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label class="form-label">Mot de passe actuel</label>
                            <input type="password" class="form-input" placeholder="Entrez votre mot de passe actuel">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nouveau mot de passe</label>
                            <input type="password" class="form-input" placeholder="Nouveau mot de passe">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirmer le mot de passe</label>
                            <input type="password" class="form-input" placeholder="Confirmer le mot de passe">
                        </div>
                        <div class="form-group full-width">
                            <button class="btn btn-primary">
                                <i class="fas fa-key"></i>
                                Changer le mot de passe
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== FOOTER ========== -->
            <footer class="footer">
                <p>&copy; 2025 EmploiPlus. Tous droits réservés.</p>
            </footer>
        </main>
    </div>

    <!-- ========== MODAL CANDIDATURE ========== -->
    <div class="modal-overlay" id="applicationModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Postuler à cette offre</h2>
                <button class="close-btn" onclick="closeApplicationModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="job-summary" id="modalJobSummary">
                    <!-- Résumé de l'offre sera inséré ici -->
                </div>
                <form class="form-grid" id="applicationForm">
                    <div class="form-group">
                        <label class="form-label">Prénom *</label>
                        <input type="text" class="form-input" required value="John">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nom *</label>
                        <input type="text" class="form-input" required value="Doe">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-input" required value="john.doe@email.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Téléphone *</label>
                        <input type="tel" class="form-input" required value="+229 97 12 34 56">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Lettre de motivation *</label>
                        <textarea class="form-textarea" required placeholder="Expliquez pourquoi vous êtes le candidat idéal pour ce poste..."></textarea>
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">CV (PDF, DOC, DOCX)</label>
                        <div class="file-upload">
                            <input type="file" accept=".pdf,.doc,.docx">
                            <div class="file-upload-btn">
                                <i class="fas fa-upload"></i>
                                <span>Télécharger votre CV</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group full-width">
                        <div style="display: flex; gap: 10px;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Envoyer ma candidature
                            </button>
                            <button type="button" class="btn btn-outline" onclick="closeApplicationModal()">
                                Annuler
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ========== MODAL DÉTAILS ENTREPRISE ========== -->
    <div class="modal-overlay" id="companyModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Détails de l'entreprise</h2>
                <button class="close-btn" onclick="closeCompanyModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body" id="companyDetails">
                <!-- Les détails de l'entreprise seront insérés ici -->
            </div>
        </div>
    </div>


<script src="script_candidat.js" ></script>
    
</body>
</html>