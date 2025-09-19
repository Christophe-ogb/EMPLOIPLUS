document.addEventListener("DOMContentLoaded", () => {
  const jobsList = document.getElementById('jobs-list');
  const jobSearch = document.getElementById('job-search');

  const jobs = [];
  for(let i=0;i<24;i++){
    const job = {
      title: ["Développeur Backend","Designer UI/UX","Chef de projet","Analyste données","Technicien Réseaux"][Math.floor(Math.random()*5)],
      company: ["Entreprise " + (i+1), "Société " + (i+1), "Compagnie " + (i+1)][Math.floor(Math.random()*3)],
      location: ["Cotonou","Porto-Novo","Parakou","Abomey-Calavi","Ouidah","Djougou","Bohicon","Kandi","Natitingou"][Math.floor(Math.random()*9)],
      date: new Date(Date.now()-Math.floor(Math.random()*30)*24*60*60*1000).toISOString().split('T')[0],
      description: "Description complète de l'offre " + (i+1)
    };
    jobs.push(job);
  }

  const jobsPerPage = 6;
  let currentPage = 1;

  function displayJobs(page=1){
    jobsList.innerHTML='';
    const start = (page-1)*jobsPerPage;
    const end = start + jobsPerPage;
    const paginated = jobs.slice(start,end);

    paginated.forEach(job=>{
      const card = document.createElement('div');
      card.className='job-card';
      card.innerHTML=`
        <h3>${job.title}</h3>
        <p><strong>Entreprise:</strong> ${job.company}</p>
        <p><strong>Lieu:</strong> ${job.location}</p>
        <p><strong>Date:</strong> ${new Date(job.date).toLocaleDateString('fr-FR')}</p>
        <div class="job-actions">
          <button class="apply-btn">Postuler</button>
          <button class="save-btn">⭐ Sauvegarder</button>
          <button class="details-btn">Voir détails</button>
        </div>
        <div class="job-details">
          <p><strong>Description:</strong> ${job.description}</p>
          <p><strong>Email:</strong> contact@${job.company.replace(/\s/g,'').toLowerCase()}.com</p>
          <p><strong>Contact:</strong> 123-456-789</p>
        </div>
      `;
      jobsList.appendChild(card);

      card.querySelector('.details-btn').addEventListener('click', ()=>{
        const details=card.querySelector('.job-details');
        details.style.display=details.style.display==='none'?'block':'none';
      });

      card.querySelector('.apply-btn').addEventListener('click', ()=>{
        window.location.href='postuler.html?job='+encodeURIComponent(job.title);
      });

      card.querySelector('.save-btn').addEventListener('click', ()=>{
        alert(`Offre "${job.title}" sauvegardée !`);
      });
    });

    setupPagination();
  }

  function setupPagination(){
    const paginationEl=document.getElementById('pagination');
    paginationEl.innerHTML='';
    const totalPages=Math.ceil(jobs.length/jobsPerPage);

    for(let i=1;i<=totalPages;i++){
      const btn=document.createElement('button');
      btn.textContent=i;
      btn.className=i===currentPage?'active':'';
      btn.addEventListener('click',()=>{currentPage=i; displayJobs(currentPage);});
      paginationEl.appendChild(btn);
    }

    if(currentPage<totalPages){
      const next=document.createElement('button');
      next.textContent='→';
      next.addEventListener('click',()=>{currentPage++; displayJobs(currentPage);});
      paginationEl.appendChild(next);
    }
  }

  // Filtre simple
  document.querySelector('.filter-btn').addEventListener('click', ()=>{
    const keyword = jobSearch.value.toLowerCase();
    const loc = document.getElementById('location').value.toLowerCase();
    const type = document.getElementById('contract-type').value.toLowerCase();
    const sector = document.getElementById('sector').value.toLowerCase();

    const filtered = jobs.filter(job=>{
      return (!keyword || job.title.toLowerCase().includes(keyword)) &&
             (!loc || job.location.toLowerCase()===loc);
    });

    jobsList.innerHTML='';
    filtered.slice(0,jobsPerPage).forEach(job=>{
      const card = document.createElement('div');
      card.className='job-card';
      card.innerHTML=`
        <h3>${job.title}</h3>
        <p><strong>Entreprise:</strong> ${job.company}</p>
        <p><strong>Lieu:</strong> ${job.location}</p>
        <p><strong>Date:</strong> ${new Date(job.date).toLocaleDateString('fr-FR')}</p>
        <div class="job-actions">
          <button class="apply-btn">Postuler</button>
          <button class="save-btn">⭐ Sauvegarder</button>
          <button class="details-btn">Voir détails</button>
        </div>
        <div class="job-details">
          <p><strong>Description:</strong> ${job.description}</p>
          <p><strong>Email:</strong> contact@${job.company.replace(/\s/g,'').toLowerCase()}.com</p>
          <p><strong>Contact:</strong> 123-456-789</p>
        </div>
      `;
      jobsList.appendChild(card);

      card.querySelector('.details-btn').addEventListener('click', ()=>{
        const details=card.querySelector('.job-details');
        details.style.display=details.style.display==='none'?'block':'none';
      });
      card.querySelector('.apply-btn').addEventListener('click', ()=>{window.location.href='postuler.html?job='+encodeURIComponent(job.title);});
      card.querySelector('.save-btn').addEventListener('click', ()=>{alert(`Offre "${job.title}" sauvegardée !`);});
    });

    setupPagination();
  });

  displayJobs(currentPage);
});
