(function(){
  // ============================================================================
  // GESTION DU THÈME (CLAIR/SOMBRE)
  // ============================================================================
  
  // Récupère l'élément racine du document (html)
  const root = document.documentElement;
  
  // Vérifie si un thème est sauvegardé dans le stockage local
  const saved = localStorage.getItem('theme');
  
  // Applique le thème sauvegardé s'il existe
  if (saved) root.setAttribute('data-theme', saved);

  // Gestion du clic sur le bouton de changement de thème
  document.getElementById('themeToggle')?.addEventListener('click', () => {
    // Alterne entre les thèmes 'night' et 'light'
    const next = root.getAttribute('data-theme') === 'night' ? 'light' : 'night';
    
    // Applique le nouveau thème
    root.setAttribute('data-theme', next);
    
    // Sauvegarde le choix dans le stockage local
    localStorage.setItem('theme', next);
  });

  // ============================================================================
  // EFFET DE HEADER AU SCROLL
  // ============================================================================
  
  window.addEventListener('scroll', () => {
    // Ajoute/supprime la classe 'scrolled' selon la position de défilement
    document.getElementById('header').classList.toggle('scrolled', window.scrollY > 20);
  });

  // ============================================================================
  // ANIMATIONS D'APPARITION AU DÉFILEMENT (Intersection Observer)
  // ============================================================================
  
  // Crée un observateur pour les animations d'apparition
  const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // Ajoute la classe 'show' quand l'élément devient visible
      if (entry.isIntersecting) entry.target.classList.add('show');
    });
  }, { threshold: .2 }); // Se déclenche quand 20% de l'élément est visible

  // Observe tous les éléments avec des classes d'animation
  document.querySelectorAll('.reveal, .card, .kpi, .profile').forEach(el => io.observe(el));

  // ============================================================================
  // COMPTEURS ANIMÉS (KPI - Key Performance Indicators)
  // ============================================================================
  
  const kpiNumbers = document.querySelectorAll('.kpi b');
  
  // Observateur spécifique pour les compteurs
  const counterIo = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = +el.dataset.target; // Valeur cible du compteur
        let currentValue = 0;
        
        // Calcule l'incrément pour une animation fluide
        const step = Math.max(1, Math.round(target / 80));
        
        // Animation du compteur
        const intervalId = setInterval(() => {
          currentValue += step;
          
          if (currentValue >= target) {
            // Animation terminée
            el.textContent = target + '+';
            clearInterval(intervalId);
          } else {
            // Mise à jour de la valeur affichée
            el.textContent = currentValue;
          }
        }, 25); // Rafraîchissement toutes les 25ms
        
        // Arrête d'observer cet élément après le début de l'animation
        counterIo.unobserve(el);
      }
    });
  }, { threshold: .6 }); // Se déclenche quand 60% de l'élément est visible

  // Démarre l'observation de tous les compteurs
  kpiNumbers.forEach(b => counterIo.observe(b));

  // ============================================================================
  // EFFET MAGNÉTIQUE SUR LES BOUTONS
  // ============================================================================
  
  document.querySelectorAll('.magnetic').forEach(btn => {
    const strength = 20; // Force de l'effet magnétique
    
    btn.addEventListener('mousemove', e => {
      // Calcule la position relative de la souris dans le bouton
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - (rect.left + rect.width / 2);
      const y = e.clientY - (rect.top + rect.height / 2);
      
      // Applique un déplacement proportionnel à la position de la souris
      btn.style.transform = `translate(${x / strength}px, ${y / strength}px)`;
    });
    
    // Réinitialise la position quand la souris quitte le bouton
    btn.addEventListener('mouseleave', () => btn.style.transform = 'translate(0, 0)');
  });

  // ============================================================================
  // GESTION DU FORMULAIRE DE CONTACT
  // ============================================================================
  
  const form = document.getElementById('contactForm');
  
  form?.addEventListener('submit', (e) => {
    // Empêche l'envoi réel du formulaire
    e.preventDefault();
    
    // Affiche un message de confirmation
    const status = document.getElementById('formStatus');
    status.textContent = 'Merci ! Votre message a été envoyé (simulation).';
    
    // Réinitialise le formulaire
    form.reset();
  });
})();
  
// Surlignement de la page active dans la navigation
function highlightActivePage() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const menuLinks = document.querySelectorAll('.menu a');
  
  menuLinks.forEach(link => {
    // Retire la classe active de tous les liens
    link.classList.remove('active');
    
    // Vérifie si ce lien correspond à la page actuelle
    const linkHref = link.getAttribute('href');
    if (linkHref === currentPage) {
      link.classList.add('active');
    }
    
    // Gestion spéciale pour la page d'accueil
    if (currentPage === 'index.html' && linkHref === 'index.html') {
      link.classList.add('active');
    }
  });
}

// Exécute au chargement et quand l'URL change
highlightActivePage();
window.addEventListener('popstate', highlightActivePage);