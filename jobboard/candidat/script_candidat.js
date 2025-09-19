// ========== DONNÉES SIMULÉES ==========
    
    // Données des offres d'emploi
    const jobsData = [
        {
            id: 1,
            title: "Développeur Frontend React",
            company: "TechBénin Solutions",
            logo: "TS",
            location: "Cotonou",
            type: "CDI",
            category: "développement",
            sector: "technologie",
            postedDate: new Date(2024, 8, 5),
            description: "Nous recherchons un développeur frontend expérimenté pour rejoindre notre équipe dynamique.",
            tags: ["React", "JavaScript", "CSS3", "Git"],
            salary: "400,000 - 600,000 FCFA",
            experience: "2-4 ans",
            companyInfo: {
                name: "TechBénin Solutions",
                sector: "Technologie & Innovation",
                employees: "50-100",
                website: "www.techbenin.com",
                description: "Leader dans le développement de solutions digitales au Bénin, nous accompagnons les entreprises dans leur transformation numérique.",
                positionsOpen: 3,
                benefits: ["Assurance santé", "Formation continue", "Télétravail partiel", "Prime de performance"]
            }
        },
        {
            id: 2,
            title: "Chef de Projet Marketing Digital",
            company: "AgriMarket Bénin",
            logo: "AM",
            location: "Porto-Novo",
            type: "CDI",
            category: "marketing",
            sector: "agriculture",
            postedDate: new Date(2024, 8, 3),
            description: "Pilotez nos campagnes marketing digital et développez notre présence en ligne.",
            tags: ["Marketing Digital", "SEO", "Social Media", "Analytics"],
            salary: "350,000 - 500,000 FCFA",
            experience: "3-5 ans",
            companyInfo: {
                name: "AgriMarket Bénin",
                sector: "Agriculture & Commerce",
                employees: "20-50",
                website: "www.agrimarket.bj",
                description: "Plateforme e-commerce spécialisée dans les produits agricoles locaux, connectant producteurs et consommateurs.",
                positionsOpen: 2,
                benefits: ["Mutuelle santé", "Transport", "Congés payés", "Participation aux bénéfices"]
            }
        },
        {
            id: 3,
            title: "Analyste Financier Senior",
            company: "Banque Atlantique",
            logo: "BA",
            location: "Cotonou",
            type: "CDI",
            category: "finance",
            sector: "banque",
            postedDate: new Date(2024, 8, 1),
            description: "Analysez les risques financiers et participez aux décisions d'investissement.",
            tags: ["Finance", "Excel", "Analyse", "Reporting"],
            salary: "500,000 - 750,000 FCFA",
            experience: "5+ ans",
            companyInfo: {
                name: "Banque Atlantique Bénin",
                sector: "Services Financiers",
                employees: "200-500",
                website: "www.banque-atlantique.bj",
                description: "Institution financière de référence en Afrique de l'Ouest, offrant une gamme complète de services bancaires.",
                positionsOpen: 1,
                benefits: ["Assurance vie", "Plan retraite", "Formation", "Primes attractives"]
            }
        },
        {
            id: 4,
            title: "Développeur Mobile Flutter",
            company: "InnovApp",
            logo: "IA",
            location: "Cotonou",
            type: "CDD",
            category: "développement",
            sector: "technologie",
            postedDate: new Date(2024, 7, 28),
            description: "Développez des applications mobiles innovantes avec Flutter.",
            tags: ["Flutter", "Dart", "Mobile", "API"],
            salary: "300,000 - 450,000 FCFA",
            experience: "1-3 ans",
            companyInfo: {
                name: "InnovApp",
                sector: "Développement Mobile",
                employees: "10-20",
                website: "www.innovapp.bj",
                description: "Startup spécialisée dans le développement d'applications mobiles pour les entreprises béninoises.",
                positionsOpen: 2,
                benefits: ["Environnement startup", "Formation", "Équipement fourni", "Flexibilité horaire"]
            }
        },
        {
            id: 5,
            title: "Responsable Ressources Humaines",
            company: "Groupe SOBEBRA",
            logo: "GS",
            location: "Parakou",
            type: "CDI",
            category: "ressources-humaines",
            sector: "commerce",
            postedDate: new Date(2024, 7, 25),
            description: "Pilotez la stratégie RH et accompagnez le développement des talents.",
            tags: ["RH", "Recrutement", "Formation", "Paie"],
            salary: "450,000 - 650,000 FCFA",
            experience: "4+ ans",
            companyInfo: {
                name: "Groupe SOBEBRA",
                sector: "Industrie & Commerce",
                employees: "500+",
                website: "www.sobebra.bj",
                description: "Leader de l'industrie brassicole béninoise, nous sommes engagés dans le développement économique local.",
                positionsOpen: 1,
                benefits: ["Package complet", "Formation", "Voiture de fonction", "Bonus annuel"]
            }
        }
    ];

    // Générer plus d'offres pour la pagination
    function generateMoreJobs() {
        const moreJobs = [];
        const companies = ['TechCorp', 'DigiSoft', 'WebPro', 'AppDev', 'DataFlow', 'CloudTech', 'AI Solutions', 'DevHub'];
        const positions = ['Développeur', 'Designer', 'Chef de projet', 'Analyste', 'Consultant', 'Spécialiste'];
        const locations = ['Cotonou', 'Porto-Novo', 'Parakou', 'Abomey', 'Bohicon'];
        const types = ['CDI', 'CDD', 'Stage', 'Freelance'];
        const categories = ['développement', 'marketing', 'finance', 'ressources-humaines', 'maintenance', 'vente'];
        const sectors = ['technologie', 'banque', 'education', 'sante', 'agriculture', 'commerce'];

        for (let i = 6; i <= 65; i++) {
            const company = companies[Math.floor(Math.random() * companies.length)];
            const position = positions[Math.floor(Math.random() * positions.length)];
            const location = locations[Math.floor(Math.random() * locations.length)];
            const type = types[Math.floor(Math.random() * types.length)];
            const category = categories[Math.floor(Math.random() * categories.length)];
            const sector = sectors[Math.floor(Math.random() * sectors.length)];
            
            moreJobs.push({
                id: i,
                title: `${position} ${category}`,
                company: company,
                logo: company.substring(0, 2).toUpperCase(),
                location: location,
                type: type,
                category: category,
                sector: sector,
                postedDate: new Date(2024, Math.floor(Math.random() * 3) + 6, Math.floor(Math.random() * 28) + 1),
                description: `Rejoignez notre équipe dynamique en tant que ${position.toLowerCase()}. Opportunité unique de développer vos compétences.`,
                tags: ['JavaScript', 'React', 'Node.js', 'CSS'].slice(0, Math.floor(Math.random() * 4) + 1),
                salary: `${Math.floor(Math.random() * 400) + 200},000 - ${Math.floor(Math.random() * 500) + 400},000 FCFA`,
                experience: Math.random() > 0.5 ? '2-4 ans' : '1-3 ans',
                companyInfo: {
                    name: company,
                    sector: sector,
                    employees: '20-50',
                    website: `www.${company.toLowerCase()}.bj`,
                    description: `${company} est une entreprise innovante spécialisée dans ${sector}.`,
                    positionsOpen: Math.floor(Math.random() * 5) + 1,
                    benefits: ['Assurance santé', 'Formation continue', 'Prime de performance', 'Congés payés']
                }
            });
        }
        
        return moreJobs;
    }

    // Combiner toutes les offres
    const allJobs = [...jobsData, ...generateMoreJobs()];

    // Données des candidatures
    const applicationsData = [
        {
            id: 1,
            jobTitle: "Développeur Frontend React",
            company: "TechBénin Solutions",
            appliedDate: new Date(2024, 8, 10),
            status: "pending"
        },
        {
            id: 2,
            jobTitle: "Chef de Projet Marketing Digital",
            company: "AgriMarket Bénin",
            appliedDate: new Date(2024, 8, 8),
            status: "accepted"
        },
        {
            id: 3,
            jobTitle: "Analyste Financier Senior",
            company: "Banque Atlantique",
            appliedDate: new Date(2024, 8, 5),
            status: "rejected"
        },
        {
            id: 4,
            jobTitle: "Développeur Mobile Flutter",
            company: "InnovApp",
            appliedDate: new Date(2024, 8, 3),
            status: "pending"
        }
    ];

    // ========== VARIABLES GLOBALES ==========
    let currentPage = 1;
    const jobsPerPage = 12;
    let filteredJobs = [...allJobs];
    let favoriteJobs = new Set([2, 5, 8]); // IDs des offres en favoris
    let isEditMode = false;

    // ========== FONCTIONS D'INITIALISATION ==========
    document.addEventListener('DOMContentLoaded', function() {
        initializeApp();
    });

    function initializeApp() {
        setupEventListeners();
        renderDashboard();
        renderAllJobs();
        renderApplications();
        toggleSearchBarVisibility(); // Cacher la barre de recherche initialement
    }

    function setupEventListeners() {
        // Navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const section = this.getAttribute('data-section');
                showSection(section);
            });
        });

        // Toggle sidebar
        document.getElementById('toggleBtn').addEventListener('click', toggleSidebar);
        document.getElementById('mobileToggle').addEventListener('click', toggleMobileSidebar);

        // Recherche globale
        document.getElementById('globalSearch').addEventListener('input', globalSearch);

        // Formulaire de candidature
        document.getElementById('applicationForm').addEventListener('submit', submitApplication);
    }

    // ========== FONCTIONS DE NAVIGATION ==========
    function showSection(sectionId) {
        // Masquer toutes les sections
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.remove('active');
        });

        // Afficher la section demandée
        document.getElementById(sectionId).classList.add('active');

        // Mettre à jour la navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });
        document.querySelector(`[data-section="${sectionId}"]`).classList.add('active');

        // Afficher ou masquer la barre de recherche selon la section
        toggleSearchBarVisibility();

        // Charger le contenu spécifique
        switch(sectionId) {
            case 'dashboard':
                renderDashboard();
                break;
            case 'search':
                renderAllJobs();
                break;
            case 'applications':
                renderApplications();
                break;
        }
    }

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
    }

    function toggleMobileSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('show');
    }

    // ========== FONCTIONS POUR LA BARRE DE RECHERCHE ==========
    function toggleSearchBarVisibility() {
        const searchBar = document.querySelector('.search-bar');
        const activeSection = document.querySelector('.content-section.active');
        
        if (activeSection && activeSection.id === 'search') {
            searchBar.style.display = 'flex';
        } else {
            searchBar.style.display = 'none';
        }
    }

    // ========== FONCTIONS DE DÉCONNEXION ==========
    function logout() {
        // Afficher une confirmation
        if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
            // Simuler la déconnexion
            showLogoutAnimation();
            
            // Rediriger vers la page de connexion après un délai
            setTimeout(() => {
                window.location.href = 'login.html'; // Remplacez par l'URL de votre page de connexion
            }, 1500);
        }
    }

    function showLogoutAnimation() {
        // Créer un overlay pour l'animation de déconnexion
        const overlay = document.createElement('div');
        overlay.style.position = 'fixed';
        overlay.style.top = '0';
        overlay.style.left = '0';
        overlay.style.width = '100%';
        overlay.style.height = '100%';
        overlay.style.backgroundColor = 'var(--primary-color)';
        overlay.style.display = 'flex';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.zIndex = '9999';
        overlay.style.color = 'white';
        overlay.style.fontSize = '1.5rem';
        overlay.style.flexDirection = 'column';
        overlay.style.gap = '20px';
        overlay.innerHTML = `
            <div class="loading" style="border: 3px solid rgba(255,255,255,.3); border-top-color: white; width: 50px; height: 50px;"></div>
            <p>Déconnexion en cours...</p>
        `;
        
        document.body.appendChild(overlay);
    }

    // ========== FONCTIONS DE RENDU ==========
    function renderDashboard() {
        // Afficher les offres récentes (5 premières)
        const recentJobs = allJobs.slice(0, 6);
        const container = document.getElementById('recentJobs');
        container.innerHTML = recentJobs.map(job => createJobCard(job, true)).join('');

        // Afficher les candidatures récentes
        const recentApplications = applicationsData.slice(0, 4);
        const appContainer = document.getElementById('recentApplications');
        appContainer.innerHTML = recentApplications.map(app => createApplicationItem(app)).join('');
    }

    function createJobCard(job, isDashboard = false) {
        const isFavorite = favoriteJobs.has(job.id);
        const daysAgo = Math.floor((new Date() - job.postedDate) / (1000 * 60 * 60 * 24));
        
        return `
            <div class="job-card fade-in">
                <div class="job-header">
                    <div class="company-logo">${job.logo}</div>
                    <div>
                        <div class="job-title">${job.title}</div>
                        <div class="company-name">${job.company}</div>
                    </div>
                </div>
                
                <div class="job-meta">
                    <div class="job-meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        ${job.location}
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-briefcase"></i>
                        ${job.type}
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-clock"></i>
                        Il y a ${daysAgo} jour${daysAgo > 1 ? 's' : ''}
                    </div>
                    <div class="job-meta-item">
                        <i class="fas fa-money-bill-wave"></i>
                        ${job.salary}
                    </div>
                </div>
                
                <div class="job-description">
                    ${job.description}
                </div>
                
                <div class="job-tags">
                    ${job.tags.map(tag => `<span class="job-tag">${tag}</span>`).join('')}
                </div>
                
                <div class="job-actions">
                    <button class="btn btn-primary" onclick="openApplicationModal(${job.id})">
                        <i class="fas fa-paper-plane"></i>
                        Postuler
                    </button>
                    <button class="btn btn-outline" onclick="openCompanyModal(${job.id})">
                        <i class="fas fa-info-circle"></i>
                        En savoir plus
                    </button>
                    <button class="btn-favorite ${isFavorite ? 'active' : ''}" onclick="toggleFavorite(${job.id})">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        `;
    }

    function createApplicationItem(application) {
        const statusLabels = {
            'pending': 'En cours',
            'accepted': 'Accepté',
            'rejected': 'Refusé'
        };
        
        const daysAgo = Math.floor((new Date() - application.appliedDate) / (1000 * 60 * 60 * 24));
        
        return `
            <div class="application-item fade-in">
                <div class="application-info">
                    <div class="application-title">${application.jobTitle}</div>
                    <div class="application-company">${application.company}</div>
                    <div class="application-date">Candidature envoyée il y a ${daysAgo} jour${daysAgo > 1 ? 's' : ''}</div>
                </div>
                <div class="application-status status-${application.status}">
                    ${statusLabels[application.status]}
                </div>
            </div>
        `;
    }

    function renderAllJobs() {
        const startIndex = (currentPage - 1) * jobsPerPage;
        const endIndex = startIndex + jobsPerPage;
        const jobsToShow = filteredJobs.slice(startIndex, endIndex);
        
        const container = document.getElementById('allJobs');
        if (container) {
            container.innerHTML = jobsToShow.map(job => createJobCard(job)).join('');
            updateJobCount();
            renderPagination();
        }
    }

    function renderApplications() {
        const container = document.getElementById('allApplications');
        if (container) {
            container.innerHTML = applicationsData.map(app => createApplicationItem(app)).join('');
        }
    }

    function updateJobCount() {
        const countElement = document.getElementById('jobCount');
        if (countElement) {
            countElement.textContent = `${filteredJobs.length} offre${filteredJobs.length > 1 ? 's' : ''} trouvée${filteredJobs.length > 1 ? 's' : ''}`;
        }
    }

    function renderPagination() {
        const totalPages = Math.ceil(filteredJobs.length / jobsPerPage);
        const container = document.getElementById('pagination');
        
        if (!container || totalPages <= 1) {
            if (container) container.innerHTML = '';
            return;
        }

        let paginationHTML = '';
        
        // Bouton précédent
        paginationHTML += `
            <button class="pagination-btn" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
                <i class="fas fa-chevron-left"></i>
            </button>
        `;

        // Numéros de pages
        const startPage = Math.max(1, currentPage - 2);
        const endPage = Math.min(totalPages, currentPage + 2);

        if (startPage > 1) {
            paginationHTML += `<button class="pagination-btn" onclick="changePage(1)">1</button>`;
            if (startPage > 2) {
                paginationHTML += `<span style="padding: 0 10px;">...</span>`;
            }
        }

        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `
                <button class="pagination-btn ${i === currentPage ? 'active' : ''}" onclick="changePage(${i})">
                    ${i}
                </button>
            `;
        }

        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                paginationHTML += `<span style="padding: 0 10px;">...</span>`;
            }
            paginationHTML += `<button class="pagination-btn" onclick="changePage(${totalPages})">${totalPages}</button>`;
        }

        // Bouton suivant
        paginationHTML += `
            <button class="pagination-btn" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
                <i class="fas fa-chevron-right"></i>
            </button>
        `;

        container.innerHTML = paginationHTML;
    }

    // ========== FONCTIONS DE PAGINATION ==========
    function changePage(page) {
        const totalPages = Math.ceil(filteredJobs.length / jobsPerPage);
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            renderAllJobs();
            // Scroll vers le haut des résultats
            document.getElementById('allJobs').scrollIntoView({ behavior: 'smooth' });
        }
    }

    // ========== FONCTIONS DE FILTRAGE ==========
    function filterJobs() {
        const keyword = document.getElementById('keywordFilter')?.value.toLowerCase() || '';
        const category = document.getElementById('categoryFilter')?.value || '';
        const contract = document.getElementById('contractFilter')?.value || '';
        const location = document.getElementById('locationFilter')?.value || '';
        const sector = document.getElementById('sectorFilter')?.value || '';

        filteredJobs = allJobs.filter(job => {
            const matchesKeyword = !keyword || 
                job.title.toLowerCase().includes(keyword) || 
                job.company.toLowerCase().includes(keyword) ||
                job.description.toLowerCase().includes(keyword);
            
            const matchesCategory = !category || job.category === category;
            const matchesContract = !contract || job.type.toLowerCase().includes(contract);
            const matchesLocation = !location || job.location.toLowerCase().includes(location);
            const matchesSector = !sector || job.sector === sector;

            return matchesKeyword && matchesCategory && matchesContract && matchesLocation && matchesSector;
        });

        currentPage = 1;
        renderAllJobs();
    }

    function sortJobs() {
        const sortBy = document.getElementById('sortFilter')?.value || 'date';
        
        filteredJobs.sort((a, b) => {
            switch(sortBy) {
                case 'title':
                    return a.title.localeCompare(b.title);
                case 'company':
                    return a.company.localeCompare(b.company);
                case 'date':
                default:
                    return b.postedDate - a.postedDate;
            }
        });

        renderAllJobs();
    }

    function filterApplications() {
        // Implémentation du filtrage des candidatures
        renderApplications();
    }

    function globalSearch() {
        const query = document.getElementById('globalSearch').value.toLowerCase();
        if (query) {
            // Basculer vers la section recherche et appliquer le filtre
            document.getElementById('keywordFilter').value = query;
            showSection('search');
            filterJobs();
        }
    }

    // ========== FONCTIONS DE FAVORIS ==========
    function toggleFavorite(jobId) {
        if (favoriteJobs.has(jobId)) {
            favoriteJobs.delete(jobId);
        } else {
            favoriteJobs.add(jobId);
        }
        
        // Rafraîchir l'affichage
        if (document.getElementById('dashboard').classList.contains('active')) {
            renderDashboard();
        } else {
            renderAllJobs();
        }
        
        // Animation visuelle
        const button = document.querySelector(`[onclick="toggleFavorite(${jobId})"]`);
        if (button) {
            button.style.transform = 'scale(1.2)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 200);
        }
    }

    // ========== FONCTIONS MODALES ==========
    function openApplicationModal(jobId) {
        const job = allJobs.find(j => j.id === jobId);
        if (!job) return;

        const modal = document.getElementById('applicationModal');
        const summary = document.getElementById('modalJobSummary');
        
        summary.innerHTML = `
            <div style="background: var(--light-color); padding: 20px; border-radius: var(--border-radius); margin-bottom: 25px;">
                <h3 style="color: var(--primary-color); margin-bottom: 10px;">${job.title}</h3>
                <p style="color: var(--text-light); margin-bottom: 5px;">
                    <i class="fas fa-building" style="margin-right: 8px;"></i>${job.company}
                </p>
                <p style="color: var(--text-light);">
                    <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>${job.location} • 
                    <i class="fas fa-briefcase" style="margin-left: 15px; margin-right: 8px;"></i>${job.type}
                </p>
            </div>
        `;
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeApplicationModal() {
        document.getElementById('applicationModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    function openCompanyModal(jobId) {
        const job = allJobs.find(j => j.id === jobId);
        if (!job) return;

        const modal = document.getElementById('companyModal');
        const details = document.getElementById('companyDetails');
        
        details.innerHTML = `
            <div class="company-profile">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div style="width: 80px; height: 80px; border-radius: 12px; background: var(--secondary-color); display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white; font-weight: bold;">
                        ${job.logo}
                    </div>
                    <div>
                        <h2 style="color: var(--primary-color); margin-bottom: 8px;">${job.companyInfo.name}</h2>
                        <p style="color: var(--text-light); margin-bottom: 5px;">
                            <i class="fas fa-industry"></i> ${job.companyInfo.sector}
                        </p>
                        <p style="color: var(--text-light);">
                            <i class="fas fa-users"></i> ${job.companyInfo.employees} employés
                        </p>
                    </div>
                </div>

                <div style="margin-bottom: 25px;">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px;">À propos de l'entreprise</h3>
                    <p style="line-height: 1.6;">${job.companyInfo.description}</p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 25px;">
                    <div style="background: var(--light-color); padding: 15px; border-radius: var(--border-radius);">
                        <h4 style="color: var(--primary-color); margin-bottom: 10px;">
                            <i class="fas fa-briefcase"></i> Postes ouverts
                        </h4>
                        <p style="font-size: 1.5rem; font-weight: bold; color: var(--secondary-color);">
                            ${job.companyInfo.positionsOpen}
                        </p>
                    </div>
                    <div style="background: var(--light-color); padding: 15px; border-radius: var(--border-radius);">
                        <h4 style="color: var(--primary-color); margin-bottom: 10px;">
                            <i class="fas fa-globe"></i> Site web
                        </h4>
                        <a href="https://${job.companyInfo.website}" target="_blank" style="color: var(--secondary-color); text-decoration: none;">
                            ${job.companyInfo.website}
                        </a>
                    </div>
                </div>

                <div style="margin-bottom: 25px;">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px;">Avantages sociaux</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        ${job.companyInfo.benefits.map(benefit => `
                            <span style="background: var(--secondary-color); color: white; padding: 8px 15px; border-radius: 20px; font-size: 0.9rem;">
                                ${benefit}
                            </span>
                        `).join('')}
                    </div>
                </div>

                <div style="text-align: center;">
                    <button class="btn btn-primary" onclick="closeCompanyModal(); openApplicationModal(${jobId});">
                        <i class="fas fa-paper-plane"></i>
                        Postuler maintenant
                    </button>
                </div>
            </div>
        `;
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeCompanyModal() {
        document.getElementById('companyModal').classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // ========== FONCTIONS PROFIL ==========
    function toggleEditMode() {
        isEditMode = !isEditMode;
        const formInputs = document.querySelectorAll('#profileForm input, #profileForm textarea');
        const editActions = document.getElementById('editActions');
        
        formInputs.forEach(input => {
            input.readOnly = !isEditMode;
        });
        
        editActions.style.display = isEditMode ? 'block' : 'none';
    }

    function saveProfile() {
        // Simuler la sauvegarde
        alert('Profil sauvegardé avec succès !');
        toggleEditMode();
    }

    function cancelEdit() {
        // Restaurer les valeurs originales
        document.getElementById('firstName').value = 'John';
        document.getElementById('lastName').value = 'Doe';
        // ... autres champs
        toggleEditMode();
    }

    // ========== SOUMISSION CANDIDATURE ==========
    function submitApplication(e) {
        e.preventDefault();
        
        // Simuler l'envoi
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<span class="loading"></span> Envoi en cours...';
        submitBtn.disabled = true;
        
        setTimeout(() => {
            alert('Candidature envoyée avec succès !');
            closeApplicationModal();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    }

    // ========== RESPONSIVE ==========
    window.addEventListener('resize', function() {
        const mobileToggle = document.getElementById('mobileToggle');
        if (window.innerWidth <= 768) {
            mobileToggle.style.display = 'block';
        } else {
            mobileToggle.style.display = 'none';
            document.getElementById('sidebar').classList.remove('show');
        }
    });

    // Fermer la sidebar mobile en cliquant à l'extérieur
    document.addEventListener('click', function(e) {
        const sidebar = document.getElementById('sidebar');
        const mobileToggle = document.getElementById('mobileToggle');
        
        if (window.innerWidth <= 768 && 
            sidebar.classList.contains('show') && 
            !sidebar.contains(e.target) && 
            !mobileToggle.contains(e.target)) {
            sidebar.classList.remove('show');
        }
    });

    // Fermer les modales en cliquant à l'extérieur
    document.addEventListener('click', function(e) {
        const modals = document.querySelectorAll('.modal-overlay');
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    });
    // window.logout = function() {
    //     if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
    //         showLogoutAnimation();
    //         setTimeout(() => {
    //             window.location.href = '../index.html'; // Redirige vers la page d'accueil
    //         }, 1500);
    //     }
    // };
    window.logout = function() {
        if (confirm('Êtes-vous sûr de vouloir vous déconnecter ?')) {
            showLogoutAnimation();
            // Efface l'historique et redirige vers l'accueil
            setTimeout(() => {
                window.location.replace('../index.html');
                // Empêche le retour arrière vers une session active
                window.history.pushState(null, '', '../login.html');
                window.onpopstate = function() {
                    window.location.replace('../login.html');
                };
            }, 1500);
        }
    };