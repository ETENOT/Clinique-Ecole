<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <!-- Métadonnées essentielles pour le bon fonctionnement et le référencement -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formations Pro — Clinique‑École Santé</title>
  <!-- Déclaration du support des thèmes clair/sombre -->
  <meta name="color-scheme" content="light dark">
  
  <!-- Favicon et feuille de style principale -->
  <link rel="icon" href="../assets/icones/favicon.svg" type="image/svg+xml"/>
  <link rel="stylesheet" href="../styles.css"/>
</head>
<body>
<!-- En-tête identique à la page d'accueil pour la cohérence navigationnelle -->
<header id="header">
  <div class="container nav">
    <a class="brand" href="../index.php">
      <img src="../assets/images/clinique_ecole.jpg" alt="Logo" class="logo"/>
      <b>Clinique‑École</b>
    </a>
    
    <nav class="menu" id="menu">
      <a href="../index.php">Accueil</a>
      <a href="clinique_ecole.php">Clinique-École</a>
      <a href="formations_pro.php" class="active">Formations Pro</a>  <!-- Page courante -->
      <a href="auto_ecole.php">Auto-École</a>
      <a href="prepa_scolaire.php">Prépa Scolaire</a>
      <a href="inscription.php">Inscription</a>
      <a href="equipe.php">Équipe</a>
      <a href="contact.php" class="cta">Contact</a>
    </nav>
    
    <div class="actions">
      <button id="themeToggle" class="icon-btn" aria-label="Basculer mode nuit">🌙</button>
      <button class="burger" aria-label="Menu" onclick="document.getElementById('menu').classList.toggle('open')">☰</button>
    </div>
  </div>
</header>

<!-- Contenu principal de la page Programme -->
<main class="container">
  <!-- Titre principal de la page -->
  <h1 class="page-title">Programme pédagogique</h1>
  <p class="subtitle">Découvrez nos modules de formation professionnelle en pharmacie et gestion médicale</p>
  
  <!-- Grille des modules de formation -->
  <div class="grid grid-3">
    <!-- Module 1 : Pharmacologie -->
    <article class="card reveal">
      <h3>Notions de pharmacologie de base</h3>
      <p>Classes, posologie, indications, effets indésirables.</p>
      <a href="inscription.php?formation=pharmacologie" class="btn-small">S'inscrire à ce module</a>
    </article>
    
    <!-- Module 2 : Gestion des stocks -->
    <article class="card reveal">
      <h3>Gestion de stock & rangement</h3>
      <p>FEFO/PEPS, inventaires, traçabilité, sécurité.</p>
      <a href="inscription.php?formation=gestion_stock" class="btn-small">S'inscrire à ce module</a>
    </article>
    
    <!-- Module 3 : Accueil patient -->
    <article class="card reveal">
      <h3>Accueil & orientation des patients</h3>
      <p>Communication, confidentialité, parcours de soins.</p>
      <a href="inscription.php?formation=accueil_patient" class="btn-small">S'inscrire à ce module</a>
    </article>
    
    <!-- Module 4 : Délivrance des médicaments -->
    <article class="card reveal">
      <h3>Délivrance encadrée des médicaments</h3>
      <p>Lecture d'ordonnance, contrôles, conseils.</p>
      <a href="inscription.php?formation=delivrance_medicaments" class="btn-small">S'inscrire à ce module</a>
    </article>
    
    <!-- Module 5 : Aspects légaux et éthiques -->
    <article class="card reveal">
      <h3>Éthique & réglementation</h3>
      <p>Cadre légal, responsabilité, qualité et sécurité.</p>
      <a href="inscription.php?formation=ethique_reglementation" class="btn-small">S'inscrire à ce module</a>
    </article>
    
    <!-- Module 6 : Outils informatiques -->
    <article class="card reveal">
      <h3>Informatique appliquée</h3>
      <p>Logiciels de gestion de pharmacie, dossiers, facturation.</p>
      <a href="inscription.php?formation=informatique_appliquee" class="btn-small">S'inscrire à ce module</a>
    </article>
  </div>

  <!-- Section CTA globale -->
  <div class="card" style="text-align: center; margin-top: 40px; padding: 30px;">
    <h2>Intéressé par l'ensemble du programme ?</h2>
    <p>Inscrivez-vous à la formation complète et bénéficiez de tous ces modules</p>
    <a href="inscription.php" class="cta magnetic">S'inscrire à la formation complète</a>
  </div>
</main>

<!-- Pied de page cohérent avec le reste du site -->
<footer>
  <div class="container ftr">
    <!-- Copyright -->
    <span>© 2025 Clinique‑École</span>
    
    <!-- Liens vers les réseaux sociaux -->
    <div class="socials">
      <a href="https://wa.me/241062106119" aria-label="WhatsApp" class="social" target="_blank">
        <img src="../assets/icones/wa.svg" alt="WhatsApp"/>
      </a>
      <a href="https://www.facebook.com/profile.php?id=61581114310350" aria-label="Facebook" class="social" target="_blank">
        <img src="../assets/icones/fb.svg" alt="Facebook"/>
      </a>
      <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=zguz4ww" aria-label="Instagram" class="social" target="_blank">
        <img src="../assets/icones/insta.svg" alt="Instagram"/>
      </a>
      <a href="https://vm.tiktok.com/ZMHWVtUA2SLTJ-0XsiT/" aria-label="TikTok" class="social" target="_blank">
        <img src="../assets/icones/tiktok.svg" alt="TikTok"/>
      </a>
      <a href="#" aria-label="YouTube" class="social" onclick="return false;">
        <img src="../assets/icones/yt.svg" alt="YouTube"/>
      </a>
    </div>
  </div>
</footer>

<!-- Script JavaScript pour les interactions et animations -->
<script src="../script.js"></script>
</body>
</html>