<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <!-- Configuration de base et métadonnées -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formations — Clinique‑École Santé</title>
  <!-- Support natif des thèmes clair/sombre -->
  <meta name="color-scheme" content="light dark">
  
  <!-- Ressources graphiques et stylistiques -->
  <link rel="icon" href="../assets/icones/favicon.svg" type="image/svg+xml"/>
  <link rel="stylesheet" href="../styles.css"/>
</head>
<body>
<!-- En-tête cohérent avec les autres pages -->
<header id="header">
  <div class="container nav">
    <a class="brand" href="../index.php">
      <img src="../assets/images/clinique_ecole.jpg" alt="Logo" class="logo"/>
      <b>Clinique‑École</b>
    </a>
    
    <nav class="menu" id="menu">
      <a href="../index.php">Accueil</a>
      <a href="clinique_ecole.php" class="active">Clinique-École</a>  <!-- Page courante -->
      <a href="formations_pro.php">Formations Pro</a>
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

<!-- Contenu principal de la page Formations -->
<main class="container">
  <!-- Titre principal identifiant le contenu de la page -->
  <h1 class="page-title">Nos formations</h1>
  
  <!-- Grille présentant l'ensemble des formations proposées -->
  <div class="grid grid-3">
    <!-- Formation 1 : Secrétariat Médical -->
    <div class="card reveal">
      <h3>Secrétariat Médical</h3>
      <p>Durée : 6 mois<br><b>35 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 2 : Soins Infirmiers -->
    <div class="card reveal">
      <h3>Soins Infirmiers</h3>
      <p>Durée : 1 à 2 ans<br><b>45 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 3 : Médecine Générale -->
    <div class="card reveal">
      <h3>Médecine Générale</h3>
      <p>Durée : 1 à 2 ans<br><b>45 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 4 : Vendeuse en Pharmacie -->
    <div class="card reveal">
      <h3>Vendeuse en Pharmacie</h3>
      <p>Durée : 6 mois<br><b>40 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 5 : Sage-Femme -->
    <div class="card reveal">
      <h3>Sage‑Femme</h3>
      <p>Durée : 1 à 2 ans<br><b>40 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 6 : Ophtalmologie -->
    <div class="card reveal">
      <h3>Ophtalmologie</h3>
      <p>Durée : 1 à 2 ans<br><b>45 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
    
    <!-- Formation 7 : Gynécologie -->
    <div class="card reveal">
      <h3>Gynécologie</h3>
      <p>Durée : 1 à 2 ans<br><b>45 000 F</b></p>
      <a href="inscription.php" class="btn-small">S'inscrire</a>
    </div>
  </div>
</main>

<!-- Pied de page standard -->
<footer>
  <div class="container ftr">
    <!-- Mention de copyright -->
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

<!-- Script pour les fonctionnalités interactives -->
<script src="../script.js"></script>
</body>
</html>