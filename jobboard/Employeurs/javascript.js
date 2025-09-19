 // ========== DONNÉES SIMULÉES ==========
        
        // Données des offres d'emploi du recruteur
        const recruiterJobs = [
            {
                id: 1,
                title: "Développeur Frontend React",
                type: "CDI",
                location: "Cotonou",
                status: "active",
                candidatesCount: 23,
                createdDate: new Date(2024, 8, 5),
                views: 342,
                salary: "400,000 - 600,000 FCFA"
            },
            {
                id: 2,
                title: "Chef de Projet Marketing Digital",
                type: "CDI",
                location: "Porto-Novo",
                status: "active",
                candidatesCount: 15,
                createdDate: new Date(2024, 8, 3),
                views: 198,
                salary: "350,000 - 500,000 FCFA"
            },
            {
                id: 3,
                title: "Analyste Financier Senior",
                type: "CDI",
                location: "Cotonou",
                status: "paused",
                candidatesCount: 9,
                createdDate: new Date(2024, 7, 28),
                views: 156,
                salary: "500,000 - 750,000 FCFA"
            },
            {
                id: 4,
                title: "Designer UX/UI",
                type: "CDD",
                location: "Cotonou",
                status: "draft",
                candidatesCount: 0,
                createdDate: new Date(2024, 8, 10),
                views: 0,
                salary: "300,000 - 450,000 FCFA"
            },
            {
                id: 5,
                title: "Développeur Mobile Flutter",
                type: "Freelance",
                location: "Remote",
                status: "expired",
                candidatesCount: 18,
                createdDate: new Date(2024, 7, 15),
                views: 289,
                salary: "300,000 - 450,000 FCFA"
            }
        ];

        // Données des candidatures
        const candidatesData = [
            {
                id: 1,
                name: "Marie Kouassi",
                email: "marie.kouassi@email.com",
                phone: "+229 97 11 22 33",
                jobId: 1,
                jobTitle: "Développeur Frontend React",
                status: "new",
                appliedDate: new Date(2024, 8, 12),
                experience: "3 ans",
                location: "Cotonou",
                skills: ["React", "JavaScript", "CSS3", "Node.js", "Git"],
                education: "Master en Informatique",
                avatar: "MK"
            },
            {
                id: 2,
                name: "Jean-Baptiste Dossou",
                email: "jb.dossou@email.com",
                phone: "+229 96 44 55 66",
                jobId: 1,
                jobTitle: "Développeur Frontend React",
                status: "shortlisted",
                appliedDate: new Date(2024, 8, 10),
                experience: "5 ans",
                location: "Porto-Novo",
                skills: ["React", "Vue.js", "TypeScript", "MongoDB", "Docker"],
                education: "Licence en Génie Logiciel",
                avatar: "JD"
            },
            {
                id: 3,
                name: "Fatou Bognon",
                email: "fatou.bognon@email.com",
                phone: "+229 95 33 44 55",
                jobId: 2,
                jobTitle: "Chef de Projet Marketing Digital",
                status: "interview",
                appliedDate: new Date(2024, 8, 8),
                experience: "4 ans",
                location: "Cotonou",
                skills: ["Marketing Digital", "SEO", "Google Ads", "Analytics", "Social Media"],
                education: "Master en Marketing",
                avatar: "FB"
            },
            {
                id: 4,
                name: "Serge Akpovi",
                email: "serge.akpovi@email.com",
                phone: "+229 94 22 33 44",
                jobId: 3,
                jobTitle: "Analyste Financier Senior",
                status: "reviewed",
                appliedDate: new Date(2024, 8, 6),
                experience: "7 ans",
                location: "Cotonou",
                skills: ["Excel", "Power BI", "Finance", "Analyse", "VBA"],
                education: "Master en Finance",
                avatar: "SA"
            },
            {
                id: 5,
                name: "Grace Hounkpatin",
                email: "grace.hounkpatin@email.com",
                phone: "+229 93 11 22 33",
                jobId: 1,
                jobTitle: "Développeur Frontend React",
                status: "accepted",
                appliedDate: new Date(2024, 8, 4),
                experience: "2 ans",
                location: "Parakou",
                skills: ["React", "JavaScript", "HTML5", "CSS3", "Bootstrap"],
                education: "Licence en Informatique",
                avatar: "GH"
            }
        ];

        // ========== VARIABLES GLOBALES ==========
        let isCompanyEditMode = false;

        // ========== FONCTIONS D'INITIALISATION ==========
        document.addEventListener('DOMContentLoaded', function() {
            initializeRecruiterApp();
        });

        function initializeRecruiterApp() {
            setupEventListeners();
            renderDashboard();
            renderJobs();
            renderCandidates();
        }

        function setupEventListeners() {
            // Navigation
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Empêcher le comportement par défaut
                    const section = this.getAttribute('data-section');
                    showSection(section);
                });
            });

            // Toggle sidebar
            document.getElementById('toggleBtn').addEventListener('click', toggleSidebar);
            document.getElementById('mobileToggle').addEventListener('click', toggleMobileSidebar);

            // Formulaire d'offre d'emploi
            document.getElementById('jobForm').addEventListener('submit', submitJob);
            
            // Gérer les changements d'URL (bouton retour du navigateur)
            window.addEventListener('popstate', function() {
                loadCurrentSection();
            });
            
            // Gérer les liens dans les actions rapides
            setupQuickActionLinks();
        }

        function setupQuickActionLinks() {
            // Actions rapides du dashboard qui naviguent vers d'autres sections
            const quickActions = document.querySelectorAll('.action-card[onclick]');
            quickActions.forEach(action => {
                const onclickAttr = action.getAttribute('onclick');
                if (onclickAttr && onclickAttr.includes('showSection')) {
                    action.addEventListener('click', function() {
                        // L'onclick sera exécuté automatiquement
                    });
                }
            });
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

            // Charger le contenu spécifique
            switch(sectionId) {
                case 'dashboard':
                    renderDashboard();
                    break;
                case 'jobs':
                    renderJobs();
                    break;
                case 'candidates':
                    renderCandidates();
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

        // ========== FONCTIONS DE RENDU ==========
        function renderDashboard() {
            renderRecentCandidates();
        }

        function renderRecentCandidates() {
            const recentCandidates = candidatesData.slice(0, 3);
            const container = document.getElementById('recentCandidates');
            
            container.innerHTML = recentCandidates.map(candidate => createCandidateCard(candidate)).join('');
        }

        function renderJobs() {
            const tbody = document.getElementById('jobsTableBody');
            tbody.innerHTML = recruiterJobs.map(job => createJobRow(job)).join('');
        }

        function renderCandidates() {
            const container = document.getElementById('candidatesList');
            container.innerHTML = candidatesData.map(candidate => createCandidateCard(candidate, true)).join('');
        }

        // ========== FONCTIONS DE CRÉATION D'ÉLÉMENTS ==========
        function createJobRow(job) {
            const statusLabels = {
                'active': 'Active',
                'draft': 'Brouillon',
                'paused': 'En pause',
                'expired': 'Expirée'
            };

            const daysAgo = Math.floor((new Date() - job.createdDate) / (1000 * 60 * 60 * 24));

            return `
                <tr>
                    <td>
                        <div class="job-title-cell">${job.title}</div>
                        <div class="job-meta">${job.location} • ${job.salary}</div>
                    </td>
                    <td>${job.type}</td>
                    <td>
                        <strong>${job.candidatesCount}</strong>
                        <div class="job-meta">${job.views} vues</div>
                    </td>
                    <td>
                        <span class="status-badge status-${job.status}">
                            ${statusLabels[job.status]}
                        </span>
                    </td>
                    <td>Il y a ${daysAgo} jour${daysAgo > 1 ? 's' : ''}</td>
                    <td>
                        <div style="display: flex; gap: 5px;">
                            <button class="btn btn-sm btn-outline" onclick="editJob(${job.id})" title="Modifier">
                                <i class="fas fa-edit"></i>
                            </button>
                            ${job.status === 'active' ? 
                                `<button class="btn btn-sm btn-warning" onclick="pauseJob(${job.id})" title="Mettre en pause">
                                    <i class="fas fa-pause"></i>
                                </button>` :
                                `<button class="btn btn-sm btn-success" onclick="activateJob(${job.id})" title="Activer">
                                    <i class="fas fa-play"></i>
                                </button>`
                            }
                            <button class="btn btn-sm btn-danger" onclick="deleteJob(${job.id})" title="Supprimer">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
        }

        function createCandidateCard(candidate, showFullActions = false) {
            const statusLabels = {
                'new': 'Nouveau',
                'reviewed': 'Examiné',
                'shortlisted': 'Présélectionné',
                'interview': 'Entretien',
                'accepted': 'Accepté',
                'rejected': 'Refusé'
            };

            const statusClasses = {
                'new': 'status-draft',
                'reviewed': 'status-paused',
                'shortlisted': 'status-active',
                'interview': 'status-active',
                'accepted': 'status-active',
                'rejected': 'status-expired'
            };

            const daysAgo = Math.floor((new Date() - candidate.appliedDate) / (1000 * 60 * 60 * 24));

            return `
                <div class="candidate-card fade-in">
                    <div class="candidate-header">
                        <div class="candidate-info">
                            <div class="candidate-avatar">${candidate.avatar}</div>
                            <div>
                                <div class="candidate-name">${candidate.name}</div>
                                <div class="candidate-title">Candidat pour: ${candidate.jobTitle}</div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <span class="status-badge ${statusClasses[candidate.status]}">
                                ${statusLabels[candidate.status]}
                            </span>
                            ${showFullActions ? `
                                <div class="candidate-actions">
                                    <button class="btn btn-sm btn-outline" onclick="viewCandidate(${candidate.id})" title="Voir profil">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success" onclick="acceptCandidate(${candidate.id})" title="Accepter">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="rejectCandidate(${candidate.id})" title="Refuser">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            ` : `
                                <button class="btn btn-sm btn-primary" onclick="viewCandidate(${candidate.id})">
                                    Voir profil
                                </button>
                            `}
                        </div>
                    </div>
                    
                    <div class="candidate-details">
                        <div class="candidate-detail">
                            <i class="fas fa-envelope"></i>
                            ${candidate.email}
                        </div>
                        <div class="candidate-detail">
                            <i class="fas fa-phone"></i>
                            ${candidate.phone}
                        </div>
                        <div class="candidate-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            ${candidate.location}
                        </div>
                        <div class="candidate-detail">
                            <i class="fas fa-briefcase"></i>
                            ${candidate.experience} d'expérience
                        </div>
                        <div class="candidate-detail">
                            <i class="fas fa-graduation-cap"></i>
                            ${candidate.education}
                        </div>
                        <div class="candidate-detail">
                            <i class="fas fa-clock"></i>
                            Candidature il y a ${daysAgo} jour${daysAgo > 1 ? 's' : ''}
                        </div>
                    </div>
                    
                    <div class="candidate-skills">
                        ${candidate.skills.map(skill => `<span class="skill-tag">${skill}</span>`).join('')}
                    </div>
                </div>
            `;
        }

        // ========== FONCTIONS MODALES ==========
        function openJobModal() {
            document.getElementById('jobModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeJobModal() {
            document.getElementById('jobModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function viewCandidate(candidateId) {
            const candidate = candidatesData.find(c => c.id === candidateId);
            if (!candidate) return;

            const modal = document.getElementById('candidateModal');
            const details = document.getElementById('candidateDetails');
            
            details.innerHTML = `
                <div style="display: flex; align-items: center; gap: 25px; margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid var(--border-color);">
                    <div style="width: 100px; height: 100px; border-radius: 50%; background: var(--secondary-color); display: flex; align-items: center; justify-content: center; font-size: 2.5rem; color: white; font-weight: bold;">
                        ${candidate.avatar}
                    </div>
                    <div>
                        <h2 style="color: var(--primary-color); margin-bottom: 8px;">${candidate.name}</h2>
                        <p style="color: var(--text-light); margin-bottom: 5px;">
                            <i class="fas fa-briefcase"></i> Candidat pour: ${candidate.jobTitle}
                        </p>
                        <p style="color: var(--text-light); margin-bottom: 5px;">
                            <i class="fas fa-envelope"></i> ${candidate.email}
                        </p>
                        <p style="color: var(--text-light);">
                            <i class="fas fa-phone"></i> ${candidate.phone}
                        </p>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 25px;">
                    <div style="background: var(--light-color); padding: 20px; border-radius: var(--border-radius);">
                        <h3 style="color: var(--primary-color); margin-bottom: 15px;">
                            <i class="fas fa-user"></i> Informations personnelles
                        </h3>
                        <p style="margin-bottom: 8px;"><strong>Localisation:</strong> ${candidate.location}</p>
                        <p style="margin-bottom: 8px;"><strong>Expérience:</strong> ${candidate.experience}</p>
                        <p><strong>Formation:</strong> ${candidate.education}</p>
                    </div>

                    <div style="background: var(--light-color); padding: 20px; border-radius: var(--border-radius);">
                        <h3 style="color: var(--primary-color); margin-bottom: 15px;">
                            <i class="fas fa-calendar"></i> Candidature
                        </h3>
                        <p style="margin-bottom: 8px;"><strong>Date:</strong> ${candidate.appliedDate.toLocaleDateString('fr-FR')}</p>
                        <p style="margin-bottom: 8px;"><strong>Statut:</strong> 
                            <span class="status-badge status-${candidate.status === 'new' ? 'draft' : candidate.status === 'accepted' ? 'active' : 'paused'}">
                                ${candidate.status === 'new' ? 'Nouveau' : candidate.status === 'accepted' ? 'Accepté' : 'En cours'}
                            </span>
                        </p>
                    </div>
                </div>

                <div style="margin-bottom: 25px;">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-tools"></i> Compétences techniques
                    </h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        ${candidate.skills.map(skill => `
                            <span style="background: var(--secondary-color); color: white; padding: 8px 15px; border-radius: 20px; font-size: 0.9rem;">
                                ${skill}
                            </span>
                        `).join('')}
                    </div>
                </div>

                <div style="background: rgba(52, 152, 219, 0.05); padding: 20px; border-radius: var(--border-radius); margin-bottom: 25px;">
                    <h3 style="color: var(--primary-color); margin-bottom: 15px;">
                        <i class="fas fa-file-alt"></i> Lettre de motivation
                    </h3>
                    <p style="line-height: 1.6; color: var(--text-color);">
                        Bonjour, je suis très intéressé(e) par le poste de ${candidate.jobTitle} dans votre entreprise. 
                        Avec mes ${candidate.experience} d'expérience et ma formation en ${candidate.education}, 
                        je suis convaincu(e) de pouvoir apporter une réelle valeur ajoutée à votre équipe...
                    </p>
                </div>

                <div style="text-align: center;">
                    <div style="display: flex; gap: 15px; justify-content: center;">
                        <button class="btn btn-success" onclick="acceptCandidate(${candidate.id}); closeCandidateModal();">
                            <i class="fas fa-check"></i>
                            Accepter le candidat
                        </button>
                        <button class="btn btn-primary" onclick="scheduleInterview(${candidate.id});">
                            <i class="fas fa-calendar-plus"></i>
                            Planifier entretien
                        </button>
                        <button class="btn btn-danger" onclick="rejectCandidate(${candidate.id}); closeCandidateModal();">
                            <i class="fas fa-times"></i>
                            Refuser
                        </button>
                        <a href="mailto:${candidate.email}" class="btn btn-outline">
                            <i class="fas fa-envelope"></i>
                            Contacter par email
                        </a>
                    </div>
                </div>
            `;
            
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCandidateModal() {
            document.getElementById('candidateModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // ========== FONCTIONS DE GESTION ==========
        function submitJob(e) {
            e.preventDefault();
            
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span class="loading"></span> Publication...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Offre d\'emploi publiée avec succès !');
                closeJobModal();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                renderJobs(); // Rafraîchir la liste
            }, 2000);
        }

        function editJob(jobId) {
            alert(`Modification de l'offre #${jobId}`);
            // Ici on ouvrirait le modal avec les données pré-remplies
        }

        function pauseJob(jobId) {
            if (confirm('Voulez-vous vraiment mettre cette offre en pause ?')) {
                const job = recruiterJobs.find(j => j.id === jobId);
                if (job) {
                    job.status = 'paused';
                    renderJobs();
                    showAlert('Offre mise en pause avec succès', 'success');
                }
            }
        }

        function activateJob(jobId) {
            const job = recruiterJobs.find(j => j.id === jobId);
            if (job) {
                job.status = 'active';
                renderJobs();
                showAlert('Offre activée avec succès', 'success');
            }
        }

        function deleteJob(jobId) {
            if (confirm('Voulez-vous vraiment supprimer cette offre ? Cette action est irréversible.')) {
                const index = recruiterJobs.findIndex(j => j.id === jobId);
                if (index !== -1) {
                    recruiterJobs.splice(index, 1);
                    renderJobs();
                    showAlert('Offre supprimée avec succès', 'success');
                }
            }
        }

        function acceptCandidate(candidateId) {
            const candidate = candidatesData.find(c => c.id === candidateId);
            if (candidate) {
                candidate.status = 'accepted';
                renderCandidates();
                renderDashboard();
                showAlert(`Candidature de ${candidate.name} acceptée`, 'success');
            }
        }

        function rejectCandidate(candidateId) {
            if (confirm('Voulez-vous vraiment refuser cette candidature ?')) {
                const candidate = candidatesData.find(c => c.id === candidateId);
                if (candidate) {
                    candidate.status = 'rejected';
                    renderCandidates();
                    renderDashboard();
                    showAlert(`Candidature de ${candidate.name} refusée`, 'warning');
                }
            }
        }

        function scheduleInterview(candidateId) {
            const candidate = candidatesData.find(c => c.id === candidateId);
            if (candidate) {
                candidate.status = 'interview';
                renderCandidates();
                renderDashboard();
                showAlert(`Entretien planifié avec ${candidate.name}`, 'success');
            }
        }

        // ========== FONCTIONS DE FILTRAGE ==========
        function filterJobs() {
            // Implémentation du filtrage des offres
            renderJobs();
        }

        function filterCandidates() {
            // Implémentation du filtrage des candidats
            renderCandidates();
        }

        // ========== FONCTIONS PROFIL ENTREPRISE ==========
        function toggleCompanyEdit() {
            isCompanyEditMode = !isCompanyEditMode;
            const formInputs = document.querySelectorAll('#companyForm input, #companyForm textarea, #companyForm select');
            const editActions = document.getElementById('companyEditActions');
            
            formInputs.forEach(input => {
                if (input.type !== 'checkbox') {
                    input.readOnly = !isCompanyEditMode;
                    input.disabled = !isCompanyEditMode;
                }
            });
            
            editActions.style.display = isCompanyEditMode ? 'block' : 'none';
        }

        function saveCompanyProfile() {
            alert('Profil de l\'entreprise sauvegardé avec succès !');
            toggleCompanyEdit();
        }

        function cancelCompanyEdit() {
            toggleCompanyEdit();
        }

        // ========== FONCTIONS UTILITAIRES ==========
        function showAlert(message, type = 'info') {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type}`;
            alertDiv.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'warning' ? 'exclamation-triangle' : 'info-circle'}"></i>
                ${message}
            `;
            
            document.querySelector('.content-section.active').insertBefore(alertDiv, document.querySelector('.content-section.active').firstChild);
            
            setTimeout(() => {
                alertDiv.remove();
            }, 5000);
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