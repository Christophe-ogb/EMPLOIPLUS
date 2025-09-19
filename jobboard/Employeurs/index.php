<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmploiBénin - Espace Recruteur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="app-container">
        <!-- ========== SIDEBAR RECRUTEUR ========== -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div>
                    <div class="logo">EmploiBénin</div>
                    <div class="logo-subtitle">Espace Recruteur</div>
                </div>
                <button class="toggle-btn" id="toggleBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link active" data-section="dashboard">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="jobs">
                        <i class="fas fa-briefcase"></i>
                        <span>Mes offres d'emploi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="candidates">
                        <i class="fas fa-users"></i>
                        <span>Candidatures</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="company">
                        <i class="fas fa-building"></i>
                        <span>Mon entreprise</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-section="analytics">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistiques</span>
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
                <div class="topbar-left">
                    <button class="toggle-btn mobile-toggle" id="mobileToggle" style="display: none;">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <div class="company-info">
                        <div class="company-logo-small">TS</div>
                        <div>
                            <div class="company-name">TechBénin Solutions</div>
                        </div>
                    </div>
                </div>

                <div class="user-profile">
                    <div class="notification-icon" id="notificationBtn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">7</span>
                    </div>
                    <div class="avatar">RH</div>
                </div>
            </header>

            <!-- ========== SECTION DASHBOARD ========== -->
            <section class="content-section active" id="dashboard">
                <h1 class="page-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard Recruteur
                </h1>

                <!-- Statistiques -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-title">Offres actives</div>
                            <div class="stat-icon primary">
                                <i class="fas fa-briefcase"></i>
                            </div>
                        </div>
                        <div class="stat-number">8</div>
                        <div class="stat-label">Publiées ce mois</div>
                    </div>

                    <div class="stat-card accent">
                        <div class="stat-header">
                            <div class="stat-title">Candidatures reçues</div>
                            <div class="stat-icon accent">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div class="stat-number">47</div>
                        <div class="stat-label">Cette semaine</div>
                    </div>

                    <div class="stat-card success">
                        <div class="stat-header">
                            <div class="stat-title">Entretiens planifiés</div>
                            <div class="stat-icon success">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                        <div class="stat-number">12</div>
                        <div class="stat-label">Prochains 7 jours</div>
                    </div>

                    <div class="stat-card warning">
                        <div class="stat-header">
                            <div class="stat-title">Taux de réponse</div>
                            <div class="stat-icon warning">
                                <i class="fas fa-percentage"></i>
                            </div>
                        </div>
                        <div class="stat-number">78%</div>
                        <div class="stat-label">Ce mois-ci</div>
                    </div>
                </div>

                <!-- Actions rapides -->
                <div class="section-header" style="margin-bottom: 20px;">
                    <h2 style="color: var(--primary-color);">Actions rapides</h2>
                </div>
                <div class="quick-actions">
                    <div class="action-card" onclick="openJobModal()">
                        <div class="action-icon">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="action-title">Publier une offre</div>
                        <div class="action-description">Créez et publiez une nouvelle offre d'emploi</div>
                    </div>

                    <div class="action-card accent" onclick="showSection('candidates')">
                        <div class="action-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="action-title">Consulter les candidatures</div>
                        <div class="action-description">Gérez les candidatures reçues</div>
                    </div>

                    <div class="action-card success" onclick="showSection('analytics')">
                        <div class="action-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="action-title">Voir les statistiques</div>
                        <div class="action-description">Analysez vos performances de recrutement</div>
                    </div>
                </div>

                <!-- Dernières candidatures -->
                <div class="section-header" style="display: flex; justify-content: space-between; align-items: center; margin: 40px 0 20px 0;">
                    <h2 style="color: var(--primary-color);">Dernières candidatures</h2>
                    <a href="#" class="btn btn-outline" onclick="showSection('candidates')">Voir toutes les candidatures</a>
                </div>
                <div id="recentCandidates">
                    <!-- Les candidatures seront générées par JavaScript -->
                </div>
            </section>

            <!-- ========== SECTION MES OFFRES ========== -->
            <section class="content-section" id="jobs">
                <h1 class="page-title">
                    <i class="fas fa-briefcase"></i>
                    Mes offres d'emploi
                </h1>

                <div class="filters-section">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Recherche</label>
                            <input type="text" class="filter-input" id="jobSearchFilter" placeholder="Titre, poste...">
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Statut</label>
                            <select class="filter-input" id="jobStatusFilter">
                                <option value="">Tous les statuts</option>
                                <option value="active">Active</option>
                                <option value="draft">Brouillon</option>
                                <option value="paused">En pause</option>
                                <option value="expired">Expirée</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Type</label>
                            <select class="filter-input" id="jobTypeFilter">
                                <option value="">Tous les types</option>
                                <option value="cdi">CDI</option>
                                <option value="cdd">CDD</option>
                                <option value="stage">Stage</option>
                                <option value="freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <button class="btn btn-primary" onclick="filterJobs()">
                                <i class="fas fa-filter"></i>
                                Filtrer
                            </button>
                        </div>
                    </div>
                </div>

                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Liste de vos offres d'emploi</h3>
                        <div class="table-actions">
                            <button class="btn btn-primary" onclick="openJobModal()">
                                <i class="fas fa-plus"></i>
                                Nouvelle offre
                            </button>
                        </div>
                    </div>
                    <div style="overflow-x: auto;">
                        <table class="jobs-table" id="jobsTable">
                            <thead>
                                <tr>
                                    <th>Offre d'emploi</th>
                                    <th>Type</th>
                                    <th>Candidatures</th>
                                    <th>Statut</th>
                                    <th>Date création</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="jobsTableBody">
                                <!-- Les offres seront générées par JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ========== SECTION CANDIDATURES ========== -->
            <section class="content-section" id="candidates">
                <h1 class="page-title">
                    <i class="fas fa-users"></i>
                    Gestion des candidatures
                </h1>

                <div class="filters-section">
                    <div class="filters-grid">
                        <div class="filter-group">
                            <label class="filter-label">Recherche candidat</label>
                            <input type="text" class="filter-input" id="candidateSearchFilter" placeholder="Nom, email...">
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Poste</label>
                            <select class="filter-input" id="candidateJobFilter">
                                <option value="">Tous les postes</option>
                                <option value="1">Développeur Frontend React</option>
                                <option value="2">Chef de Projet Marketing</option>
                                <option value="3">Analyste Financier</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label class="filter-label">Statut</label>
                            <select class="filter-input" id="candidateStatusFilter">
                                <option value="">Tous les statuts</option>
                                <option value="new">Nouveau</option>
                                <option value="reviewed">Examiné</option>
                                <option value="shortlisted">Présélectionné</option>
                                <option value="interview">Entretien</option>
                                <option value="accepted">Accepté</option>
                                <option value="rejected">Refusé</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <button class="btn btn-primary" onclick="filterCandidates()">
                                <i class="fas fa-filter"></i>
                                Filtrer
                            </button>
                        </div>
                    </div>
                </div>

                <div id="candidatesList">
                    <!-- Les candidatures seront générées par JavaScript -->
                </div>
            </section>

            <!-- ========== SECTION MON ENTREPRISE ========== -->
            <section class="content-section" id="company">
                <h1 class="page-title">
                    <i class="fas fa-building"></i>
                    Profil de l'entreprise
                </h1>

                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Informations de l'entreprise</h3>
                        <div class="table-actions">
                            <button class="btn btn-primary" onclick="toggleCompanyEdit()">
                                <i class="fas fa-edit"></i>
                                Modifier
                            </button>
                        </div>
                    </div>
                    <div style="padding: 30px;">
                        <div style="display: flex; align-items: center; gap: 30px; margin-bottom: 30px;">
                            <div style="width: 120px; height: 120px; border-radius: 12px; background: var(--secondary-color); display: flex; align-items: center; justify-content: center; font-size: 3rem; color: white; font-weight: bold;">
                                TS
                            </div>
                            <div>
                                <h2 style="color: var(--primary-color); margin-bottom: 8px;">TechBénin Solutions</h2>
                                <p style="color: var(--text-light); margin-bottom: 5px;">
                                    <i class="fas fa-industry"></i> Technologie & Innovation
                                </p>
                                <p style="color: var(--text-light); margin-bottom: 5px;">
                                    <i class="fas fa-map-marker-alt"></i> Cotonou, Littoral, Bénin
                                </p>
                                <p style="color: var(--text-light);">
                                    <i class="fas fa-users"></i> 50-100 employés
                                </p>
                            </div>
                        </div>

                        <form class="form-grid" id="companyForm">
                            <div class="form-group">
                                <label class="form-label">Nom de l'entreprise</label>
                                <input type="text" class="form-input" value="TechBénin Solutions" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Secteur d'activité</label>
                                <input type="text" class="form-input" value="Technologie & Innovation" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Taille de l'entreprise</label>
                                <select class="form-input" disabled>
                                    <option>50-100 employés</option>
                                    <option>10-50 employés</option>
                                    <option>100-500 employés</option>
                                    <option>500+ employés</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Site web</label>
                                <input type="url" class="form-input" value="www.techbenin.com" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-input" value="contact@techbenin.com" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" class="form-input" value="+229 21 30 45 67" readonly>
                            </div>
                            <div class="form-group full-width">
                                <label class="form-label">Adresse complète</label>
                                <textarea class="form-textarea" readonly>Rue des Cocotiers, Quartier Haie Vive, Cotonou, Littoral, Bénin</textarea>
                            </div>
                            <div class="form-group full-width">
                                <label class="form-label">Description de l'entreprise</label>
                                <textarea class="form-textarea" readonly>Leader dans le développement de solutions digitales au Bénin, nous accompagnons les entreprises dans leur transformation numérique. Notre équipe passionnée développe des applications web et mobiles innovantes.</textarea>
                            </div>
                            <div class="form-group full-width" id="companyEditActions" style="display: none;">
                                <div style="display: flex; gap: 10px;">
                                    <button type="button" class="btn btn-primary" onclick="saveCompanyProfile()">
                                        <i class="fas fa-save"></i>
                                        Sauvegarder
                                    </button>
                                    <button type="button" class="btn btn-outline" onclick="cancelCompanyEdit()">
                                        <i class="fas fa-times"></i>
                                        Annuler
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- ========== SECTION STATISTIQUES ========== -->
            <section class="content-section" id="analytics">
                <h1 class="page-title">
                    <i class="fas fa-chart-bar"></i>
                    Statistiques et Analytics
                </h1>

                <!-- Statistiques détaillées -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-title">Vues des offres</div>
                            <div class="stat-icon primary">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="stat-number">1,247</div>
                        <div class="stat-label">Ce mois (+15%)</div>
                    </div>

                    <div class="stat-card accent">
                        <div class="stat-header">
                            <div class="stat-title">Candidatures totales</div>
                            <div class="stat-icon accent">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="stat-number">156</div>
                        <div class="stat-label">Ce mois (+23%)</div>
                    </div>

                    <div class="stat-card success">
                        <div class="stat-header">
                            <div class="stat-title">Embauches réussies</div>
                            <div class="stat-icon success">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                        <div class="stat-number">8</div>
                        <div class="stat-label">Ce mois (+33%)</div>
                    </div>

                    <div class="stat-card warning">
                        <div class="stat-header">
                            <div class="stat-title">Temps moyen embauche</div>
                            <div class="stat-icon warning">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="stat-number">18</div>
                        <div class="stat-label">Jours (-3 jours)</div>
                    </div>
                </div>

                <!-- Graphiques (simulés) -->
                <div class="charts-container">
                    <div class="chart-card">
                        <h3 class="chart-title">Évolution des candidatures</h3>
                        <div style="height: 250px; background: var(--light-color); border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                            <div style="text-align: center;">
                                <i class="fas fa-chart-line" style="font-size: 3rem; margin-bottom: 15px;"></i>
                                <p>Graphique des candidatures par mois</p>
                            </div>
                        </div>
                    </div>

                    <div class="chart-card">
                        <h3 class="chart-title">Répartition par type de poste</h3>
                        <div style="height: 250px; background: var(--light-color); border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                            <div style="text-align: center;">
                                <i class="fas fa-chart-pie" style="font-size: 3rem; margin-bottom: 15px;"></i>
                                <p>Graphique en secteurs par type</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tableau de performance -->
                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Performance par offre d'emploi</h3>
                    </div>
                    <div style="overflow-x: auto;">
                        <table class="jobs-table">
                            <thead>
                                <tr>
                                    <th>Offre</th>
                                    <th>Vues</th>
                                    <th>Candidatures</th>
                                    <th>Taux conversion</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="job-title-cell">Développeur Frontend React</div>
                                        <div class="job-meta">Publié il y a 5 jours</div>
                                    </td>
                                    <td>342</td>
                                    <td>23</td>
                                    <td>6.7%</td>
                                    <td><span class="status-badge status-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="job-title-cell">Chef de Projet Marketing</div>
                                        <div class="job-meta">Publié il y a 8 jours</div>
                                    </td>
                                    <td>198</td>
                                    <td>15</td>
                                    <td>7.6%</td>
                                    <td><span class="status-badge status-active">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="job-title-cell">Analyste Financier Senior</div>
                                        <div class="job-meta">Publié il y a 12 jours</div>
                                    </td>
                                    <td>156</td>
                                    <td>9</td>
                                    <td>5.8%</td>
                                    <td><span class="status-badge status-paused">En pause</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ========== SECTION PARAMÈTRES ========== -->
            <section class="content-section" id="settings">
                <h1 class="page-title">
                    <i class="fas fa-cog"></i>
                    Paramètres du compte
                </h1>

                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Notifications</h3>
                    </div>
                    <div style="padding: 30px;">
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                    <input type="checkbox" checked> Nouvelles candidatures
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                    <input type="checkbox" checked> Candidatures shortlistées
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                    <input type="checkbox"> Rappels d'entretiens
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" style="display: flex; align-items: center; gap: 10px;">
                                    <input type="checkbox"> Rapport mensuel
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-container">
                    <div class="table-header">
                        <h3 class="table-title">Sécurité du compte</h3>
                    </div>
                    <div style="padding: 30px;">
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
                </div>
            </section>

            <!-- ========== FOOTER ========== -->
            <footer class="footer" style="background: var(--primary-color); color: white; text-align: center; padding: 20px; margin-top: 50px;">
                <p>&copy; 2024 EmploiBénin - Espace Recruteur. Tous droits réservés. Trouvez les meilleurs talents béninois.</p>
            </footer>
        </main>
    </div>

    <!-- ========== MODAL NOUVELLE OFFRE ========== -->
    <div class="modal-overlay" id="jobModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Publier une nouvelle offre d'emploi</h2>
                <button class="close-btn" onclick="closeJobModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-grid" id="jobForm">
                    <div class="form-group">
                        <label class="form-label">Titre du poste *</label>
                        <input type="text" class="form-input" required placeholder="Ex: Développeur Frontend React">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Type de contrat *</label>
                        <select class="form-select" required>
                            <option value="">Sélectionner</option>
                            <option value="cdi">CDI</option>
                            <option value="cdd">CDD</option>
                            <option value="stage">Stage</option>
                            <option value="freelance">Freelance</option>
                            <option value="temps-partiel">Temps partiel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Lieu de travail *</label>
                        <select class="form-select" required>
                            <option value="">Sélectionner</option>
                            <option value="cotonou">Cotonou</option>
                            <option value="porto-novo">Porto-Novo</option>
                            <option value="parakou">Parakou</option>
                            <option value="abomey">Abomey</option>
                            <option value="bohicon">Bohicon</option>
                            <option value="remote">Télétravail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Salaire (FCFA)</label>
                        <input type="text" class="form-input" placeholder="Ex: 400,000 - 600,000">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Expérience requise</label>
                        <select class="form-select">
                            <option value="">Sélectionner</option>
                            <option value="debutant">Débutant (0-1 an)</option>
                            <option value="junior">Junior (1-3 ans)</option>
                            <option value="intermediaire">Intermédiaire (3-5 ans)</option>
                            <option value="senior">Senior (5+ ans)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Catégorie</label>
                        <select class="form-select">
                            <option value="">Sélectionner</option>
                            <option value="développement">Développement</option>
                            <option value="marketing">Marketing</option>
                            <option value="finance">Finance</option>
                            <option value="ressources-humaines">Ressources Humaines</option>
                            <option value="vente">Vente</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description du poste *</label>
                        <textarea class="form-textarea" required placeholder="Décrivez le poste, les responsabilités, les missions..." style="min-height: 120px;"></textarea>
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Compétences requises</label>
                        <input type="text" class="form-input" placeholder="Ex: JavaScript, React, Node.js (séparées par des virgules)">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Profil recherché</label>
                        <textarea class="form-textarea" placeholder="Décrivez le profil idéal du candidat..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date limite candidature</label>
                        <input type="date" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Statut</label>
                        <select class="form-select">
                            <option value="draft">Brouillon</option>
                            <option value="active" selected>Publier immédiatement</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <div style="display: flex; gap: 10px;">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Publier l'offre
                            </button>
                            <button type="button" class="btn btn-outline" onclick="closeJobModal()">
                                Annuler
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ========== MODAL DÉTAILS CANDIDAT ========== -->
    <div class="modal-overlay" id="candidateModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Profil du candidat</h2>
                <button class="close-btn" onclick="closeCandidateModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body" id="candidateDetails">
                <!-- Les détails du candidat seront insérés ici -->
            </div>
        </div>
    </div>

    <script src="javascript.js"></script>
</body>
</html>