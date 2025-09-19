document.addEventListener('DOMContentLoaded', function() {
    // Dynamique slogan
    const slogans = [
        "Trouvez l'emploi qui vous correspond",
        "Votre carrière commence ici",
        "Des milliers d'opportunités vous attendent",
        "Le pont vers votre avenir professionnel"
    ];
    const sloganElement = document.getElementById('dynamic-slogan');
    let currentSlogan = 0;
    
    function changeSlogan() {
        sloganElement.style.opacity = 0;
        setTimeout(() => {
            currentSlogan = (currentSlogan + 1) % slogans.length;
            sloganElement.textContent = slogans[currentSlogan];
            sloganElement.style.opacity = 1;
        }, 500);
    }
    
    setInterval(changeSlogan, 3000);
    
    // Hero image slider
    const heroImages = document.querySelectorAll('.hero-img');
    let currentImage = 0;
    
    function changeHeroImage() {
        heroImages.forEach(img => img.classList.remove('active'));
        currentImage = (currentImage + 1) % heroImages.length;
        heroImages[currentImage].classList.add('active');
    }
    
    setInterval(changeHeroImage, 4000);
    
    // Search suggestions
    const jobSearch = document.getElementById('job-search');
    const suggestions = document.getElementById('search-suggestions');
    const jobTitles = [
        "Développeur Web",
        "Comptable",
        "Infirmier",
        "Enseignant",
        "Commercial",
        "Ingénieur",
        "Designer",
        "Marketing Digital",
        "Assistant administratif",
        "Chauffeur"
    ];
    
    jobSearch.addEventListener('input', function() {
        const input = this.value.toLowerCase();
        suggestions.innerHTML = '';
        
        if (input.length > 0) {
            const matches = jobTitles.filter(title => 
                title.toLowerCase().includes(input)
            );
            
            if (matches.length > 0) {
                matches.forEach(match => {
                    const div = document.createElement('div');
                    div.className = 'suggestion-item';
                    div.textContent = match;
                    div.addEventListener('click', function() {
                        jobSearch.value = match;
                        suggestions.classList.remove('show');
                    });
                    suggestions.appendChild(div);
                });
                suggestions.classList.add('show');
            } else {
                suggestions.classList.remove('show');
            }
        } else {
            suggestions.classList.remove('show');
        }
    });
    
    document.addEventListener('click', function(e) {
        if (e.target !== jobSearch) {
            suggestions.classList.remove('show');
        }
    });
    
    // Load jobs
    const jobsList = document.getElementById('jobs-list');
    const jobs = [
        {
            title: "Développeur Frontend",
            company: "Tech Solutions Bénin",
            location: "Cotonou",
            date: "2023-05-15",
            description: "Nous recherchons un développeur frontend expérimenté pour rejoindre notre équipe."
        },
        // Ajoutez 24 autres emplois similaires ici...
    ];
    
    // Pour économiser de l'espace, je vais générer 24 autres emplois similaires
    for (let i = 0; i < 23; i++) {
        const job = {
            title: ["Développeur Backend", "Designer UI/UX", "Chef de projet", "Analyste données" ,"Technicien Réseaux" ][Math.floor(Math.random() * 5)],
            company: ["Entreprise " + (i+1), "Société " + (i+1), "Compagnie " + (i+1)][Math.floor(Math.random() * 3)],
            location: ["Cotonou", "Porto-Novo", "Parakou", "Abomey-Calavi" ,"Ouidah" ,"Djougou" ,"Bohicon", "Kandi", "Natitingou"][Math.floor(Math.random() * 9)],
            date: new Date(Date.now() - Math.floor(Math.random() * 30) * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
            description: "Description de l'offre d'emploi. " + ["Expérience requise", "Télétravail possible", "CDI", "CDD"][Math.floor(Math.random() * 4)] + "."
        };
        jobs.push(job);
    }
    
    jobs.forEach(job => {
        const jobCard = document.createElement('div');
        jobCard.className = 'job-card';
        
        jobCard.innerHTML = `
            <h3 class="job-title">${job.title}</h3>
            <p class="job-company">${job.company}</p>
            <div class="job-meta">
                <span class="job-location"><i class="fas fa-map-marker-alt"></i> ${job.location}</span>
                <span class="job-date"><i class="far fa-calendar-alt"></i> ${formatDate(job.date)}</span>
            </div>
            <p class="job-description">${job.description}</p>
            <a href="login.html" class="details-btn">Voir détails</a>
        `;
        
        jobsList.appendChild(jobCard);
    });
    
    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('fr-FR', options);
    }
    
    // Filter functionality
    const filterBtn = document.querySelector('.filter-btn');
    filterBtn.addEventListener('click', function() {
        const location = document.getElementById('location').value;
        const contractType = document.getElementById('contract-type').value;
        const sector = document.getElementById('sector').value;
        
        // Ici vous implémenteriez la logique de filtrage réelle
        // Pour l'exemple, nous allons simplement afficher les valeurs sélectionnées
        console.log("Filtres appliqués:", { location, contractType, sector });
        alert(`Filtres appliqués:\nLieu: ${location || 'Tous'}\nContrat: ${contractType || 'Tous'}\nSecteur: ${sector || 'Tous'}`);
    });
});