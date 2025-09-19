// main.js

document.addEventListener('DOMContentLoaded', () => {

    const mainContent = document.querySelector('.main-content');
    const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
    
    // Contenu HTML pour chaque page (remplacé par des variables pour plus de clarté)
    const dashboardContent = `
        <section class="welcome">
            <h2>Bienvenue, Jean 👋</h2>
            <p>Votre profil est complété à <strong>80%</strong>. Pensez à mettre à jour vos informations.</p>
        </section>

        <section class="stats">
            <div class="stat-card">
                <h3>12</h3>
                <p>Candidatures envoyées</p>
            </div>
            <div class="stat-card">
                <h3>3</h3>
                <p>Entretiens planifiés</p>
            </div>
            <div class="stat-card">
                <h3>45</h3>
                <p>Vues du profil</p>
            </div>
        </section>

        <section class="recent-applications">
            <h2>Candidatures récentes</h2>
            <ul>
                <li>
                    <span>Développeur Web - ABC Tech</span>
                    <span class="status pending">En attente</span>
                </li>
                <li>
                    <span>Assistant RH - XYZ Group</span>
                    <span class="status accepted">Accepté</span>
                </li>
                <li>
                    <span>Designer UI - CréaStudio</span>
                    <span class="status rejected">Refusé</span>
                </li>
            </ul>
        </section>

        <section class="recommended-jobs">
            <h2>Offres recommandées</h2>
            <div class="job-cards">
                <div class="job-card" data-job-id="1">
                    <h3>Développeur Front-End</h3>
                    <p>Entreprise : WebTech</p>
                    <p>Lieu : Cotonou</p>
                    <div class="actions">
                        <button class="apply-btn">Postuler</button>
                        <button class="save-btn">Sauvegarder</button>
                    </div>
                </div>
                <div class="job-card" data-job-id="2">
                    <h3>Chargé Marketing</h3>
                    <p>Entreprise : GlobalCom</p>
                    <p>Lieu : Porto-Novo</p>
                    <div class="actions">
                        <button class="apply-btn">Postuler</button>
                        <button class="save-btn">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="upcoming-interviews">
            <h2>Entretiens à venir</h2>
            <ul>
                <li>
                    <span>Développeur Back-End - SoftDev</span>
                    <span class="interview-date">20 Août 2025 - 14h00</span>
                </li>
                <li>
                    <span>Community Manager - MediaPlus</span>
                    <span class="interview-date">23 Août 2025 - 10h30</span>
                </li>
            </ul>
        </section>
    `;

    const profileContent = `
        <div class="profile-container">
            <div class="profile-main">
                <h2>Modifier mon profil</h2>
                <form class="profile-form">
                    <div class="form-group">
                        <label for="name">Nom et prénom</label>
                        <input type="text" id="name" name="name" value="Jean Dupont">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="jean.dupont@email.com">
                    </div>
                    <div class="form-group">
                        <label for="bio">À propos de moi</label>
                        <textarea id="bio" name="bio" rows="4">Passionné par le développement web, spécialisé en Front-End...</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cv">CV (PDF)</label>
                        <input type="file" id="cv" name="cv">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="save-btn">Enregistrer les modifications</button>
                        <button type="button" class="cancel-btn">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    `;

    const searchJobsContent = `
        <section class="search-jobs">
            <h2>Rechercher des emplois</h2>
            <div class="search-filters">
                <input type="text" placeholder="Rechercher par mot-clé (ex: Développeur, Marketing...)">
                <select>
                    <option>Secteur</option>
                    <option>Informatique</option>
                    <option>Marketing</option>
                </select>
                <select>
                    <option>Localisation</option>
                    <option>Cotonou</option>
                    <option>Porto-Novo</option>
                </select>
                <button class="apply-filter-btn">Rechercher</button>
            </div>
            <div class="job-list-results">
                <h3>Résultats de la recherche</h3>
                <div class="job-card-large" data-job-id="3">
                    <h4>Développeur Full-Stack (Angular / Node.js)</h4>
                    <p><strong>Entreprise :</strong> InnovTech</p>
                    <p><strong>Lieu :</strong> Cotonou</p>
                    <p><strong>Contrat :</strong> CDI</p>
                    <p><strong>Salaire :</strong> 600.000 FCFA / mois</p>
                    <div class="actions">
                        <button class="apply-btn">Postuler</button>
                        <button class="save-btn">Sauvegarder</button>
                        <a href="#" class="details-link" data-job-id="3">Voir détails</a>
                    </div>
                </div>
                <div class="job-card-large" data-job-id="4">
                    <h4>Chef de Projet Marketing Digital</h4>
                    <p><strong>Entreprise :</strong> DigiAgency</p>
                    <p><strong>Lieu :</strong> Porto-Novo</p>
                    <p><strong>Contrat :</strong> CDD</p>
                    <div class="actions">
                        <button class="apply-btn">Postuler</button>
                        <button class="save-btn">Sauvegarder</button>
                        <a href="#" class="details-link" data-job-id="4">Voir détails</a>
                    </div>
                </div>
            </div>
        </section>
    `;
    
    const applicationsContent = `
        <section class="my-applications">
            <h2>Mes candidatures</h2>
            <ul>
                <li class="application-item">
                    <div class="application-info">
                        <h3>Développeur Web - ABC Tech</h3>
                        <p>Envoyé le 15/08/2025</p>
                    </div>
                    <span class="status pending">En attente</span>
                </li>
                <li class="application-item">
                    <div class="application-info">
                        <h3>Assistant RH - XYZ Group</h3>
                        <p>Envoyé le 12/08/2025</p>
                    </div>
                    <span class="status accepted">Accepté</span>
                </li>
                <li class="application-item">
                    <div class="application-info">
                        <h3>Designer UI - CréaStudio</h3>
                        <p>Envoyé le 10/08/2025</p>
                    </div>
                    <span class="status rejected">Refusé</span>
                </li>
            </ul>
        </section>
    `;

    const savedJobsContent = `
        <section class="saved-jobs">
            <h2>Offres sauvegardées</h2>
            <div class="job-cards">
                <div class="job-card-large" data-job-id="5">
                    <h4>Community Manager</h4>
                    <p><strong>Entreprise :</strong> SocialMediaPro</p>
                    <p><strong>Lieu :</strong> Parakou</p>
                    <p><strong>Contrat :</strong> Stage</p>
                    <div class="actions">
                        <button class="apply-btn">Postuler</button>
                        <a href="#" class="details-link" data-job-id="5">Voir détails</a>
                    </div>
                </div>
                </div>
        </section>
    `;

    const notificationsContent = `
        <section class="notifications">
            <h2>Notifications</h2>
            <ul class="notification-list">
                <li>
                    <p>🎉 Votre candidature pour le poste "Assistant RH" chez XYZ Group a été <strong>acceptée</strong>. Félicitations !</p>
                    <small>Il y a 2 jours</small>
                </li>
                <li>
                    <p>🆕 Une nouvelle offre "Chef de projet web" correspondant à votre profil a été publiée.</p>
                    <small>Il y a 1 jour</small>
                </li>
                <li>
                    <p>⏳ Votre candidature pour le poste "Développeur Web" chez ABC Tech est <strong>en cours d'examen</strong>.</p>
                    <small>Il y a 3 heures</small>
                </li>
            </ul>
        </section>
    `;

    const settingsContent = `
        <section class="settings">
            <h2>Paramètres du compte</h2>
            <form class="settings-form">
                <div class="form-group">
                    <label for="password">Changer de mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">
                </div>
                <div class="form-group">
                    <label for="notifications-email">Gérer les notifications</label>
                    <input type="email" id="notifications-email" name="notifications-email" value="jean.dupont@email.com">
                </div>
                <div class="form-actions">
                    <button type="submit" class="save-btn">Sauvegarder les paramètres</button>
                </div>
            </form>
        </section>
    `;

    const pages = {
        'dashboard.html': dashboardContent,
        'profile.html': profileContent,
        'search-jobs.html': searchJobsContent,
        'applications.html': applicationsContent,
        'saved-jobs.html': savedJobsContent,
        'notifications.html': notificationsContent,
        'settings.html': settingsContent,
    };

    /**
     * Charge le contenu d'une page dynamiquement dans le conteneur principal.
     * @param {string} pageId - L'identifiant de la page (ex: 'dashboard.html').
     */
    const loadPage = (pageId) => {
        const content = pages[pageId];
        if (content) {
            mainContent.innerHTML = content;
            history.pushState({ pageId: pageId }, '', pageId); // Met à jour l'URL
            updateSidebarActiveLink(pageId);
        } else {
            mainContent.innerHTML = `<section class="error-page"><h2>Page non trouvée</h2><p>Le contenu que vous cherchez n'existe pas.</p></section>`;
        }
    };
    
    /**
     * Met en surbrillance le lien actif dans le menu latéral.
     * @param {string} pageId - L'identifiant de la page actuelle.
     */
    const updateSidebarActiveLink = (pageId) => {
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === pageId) {
                link.classList.add('active');
            }
        });
    };

    // Gestion de l'événement de clic sur le menu latéral
    sidebarLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const pageId = link.getAttribute('href');
            loadPage(pageId);
        });
    });

    // Écouteur pour le bouton de retour du navigateur
    window.addEventListener('popstate', (e) => {
        const pageId = e.state ? e.state.pageId : 'dashboard.html';
        loadPage(pageId);
    });

    // Gestionnaire d'événements pour les boutons créés dynamiquement
    mainContent.addEventListener('click', (e) => {
        // Gère les clics sur le bouton "Postuler"
        if (e.target.classList.contains('apply-btn')) {
            alert('Candidature envoyée avec succès !');
            loadPage('applications.html'); // Redirige vers la page des candidatures
        }

        // Gère les clics sur le bouton "Sauvegarder"
        if (e.target.classList.contains('save-btn')) {
            alert('Offre sauvegardée !');
        }

        // Gère les clics sur le lien "Voir détails"
        if (e.target.classList.contains('details-link')) {
            e.preventDefault();
            const jobId = e.target.dataset.jobId;
            showJobDetails(jobId);
        }
    });

    /**
     * Affiche les détails d'une offre d'emploi spécifique.
     * @param {string} jobId - L'ID de l'offre d'emploi.
     */
    const showJobDetails = (jobId) => {
        // Remplacez cela par une vraie requête API dans une application réelle
        const jobDetails = {
            '3': {
                title: 'Développeur Full-Stack (Angular / Node.js)',
                company: 'InnovTech',
                location: 'Cotonou',
                contract: 'CDI',
                salary: '600.000 FCFA / mois',
                description: 'Rejoignez notre équipe pour développer des solutions web innovantes. Nous recherchons un développeur passionné avec de solides compétences en Angular et Node.js. Expérience avec les bases de données SQL et NoSQL requise. Bonne capacité à travailler en équipe.',
                // Plus d'infos...
            },
            '4': {
                title: 'Chef de Projet Marketing Digital',
                company: 'DigiAgency',
                location: 'Porto-Novo',
                contract: 'CDD',
                salary: 'N/A',
                description: 'Nous cherchons un chef de projet pour piloter nos campagnes marketing digitales. Vous serez responsable de la planification, de l’exécution et du suivi des projets pour nos clients. Expérience en gestion de projet, SEO, SEM et réseaux sociaux.',
            },
            '5': {
                title: 'Community Manager',
                company: 'SocialMediaPro',
                location: 'Parakou',
                contract: 'Stage',
                salary: '100.000 FCFA / mois',
                description: 'Stage de 6 mois. Vous gérerez la présence en ligne de nos clients sur les réseaux sociaux. Création de contenu, animation de communautés et reporting. Excellentes compétences en communication écrite et créativité.',
            }
        };

        const details = jobDetails[jobId] || {
            title: 'Détails non disponibles',
            description: 'Les détails pour cette offre n\'ont pas été trouvés.'
        };
        
        const detailsHtml = `
            <section class="job-details">
                <h2>${details.title}</h2>
                <div class="job-meta">
                    <p><strong>Entreprise :</strong> ${details.company}</p>
                    <p><strong>Lieu :</strong> ${details.location}</p>
                    <p><strong>Contrat :</strong> ${details.contract}</p>
                    <p><strong>Salaire :</strong> ${details.salary}</p>
                </div>
                <div class="job-description">
                    <h3>Description du poste</h3>
                    <p>${details.description}</p>
                </div>
                <div class="actions">
                    <button class="apply-btn">Postuler à cette offre</button>
                    <button onclick="window.history.back()" class="cancel-btn">Retour</button>
                </div>
            </section>
        `;
        
        mainContent.innerHTML = detailsHtml;
        history.pushState({ pageId: 'job-details', jobId: jobId }, '', `job-details.html?id=${jobId}`);
    };

    // Chargement de la page de tableau de bord par défaut
    loadPage('dashboard.html');

});