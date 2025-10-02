<?php
include_once 'database.php';
include_once 'models/Formation.php';

$database = new Database();
$db = $database->getConnection();

$formation = new Formation($db);
?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Clinique‑École — Santé, Formations & Auto-école</title>
  <meta name="color-scheme" content="light dark">
  <link rel="icon" href="assets/icons/favicon.svg" type="image/svg+xml"/>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<!-- En-tête du site avec navigation -->
<header id="header">
  <div class="container nav">
    <a class="brand" href="index.php">
      <img src="assets/images/clinique_ecole.jpg" alt="Logo" class="logo"/>
      <b>Clinique‑École</b>
    </a>
    
    <nav class="menu" id="menu">
      <a href="index.php" class="active">Accueil</a>  <!-- Page courante -->
      <a href="pages/clinique_ecole.php">Clinique-École</a>
      <a href="pages/formations_pro.php">Formations Pro</a>
      <a href="pages/auto_ecole.php">Auto-École</a>
      <a href="pages/prepa_scolaire.php">Prépa Scolaire</a>
      <a href="pages/equipe.php">Équipe</a>
	  <a href="inscription.php" class="cta">Inscription</a>
      <a href="pages/contact.php" class="cta">Contact</a>
    </nav>
    
    <div class="actions">
      <button id="themeToggle" class="icon-btn" aria-label="Basculer mode nuit">🌙</button>
      <button class="burger" aria-label="Menu" onclick="document.getElementById('menu').classList.toggle('open')">☰</button>
    </div>
  </div>
</header>

<!-- Section hero - contenu principal d'accroche -->
<section class="hero">
  <div class="overlay"></div>
  <div class="container hero-inner">
    <h1 class="title reveal">Votre santé, votre avenir, <span class="accent">votre réussite</span></h1>
    <p class="subtitle reveal">Un centre médical moderne et un espace de formation polyvalent à Libreville.</p>
    
    <!-- Badges de valorisation -->
    <div class="badges">
      <a href="pages/clinique_ecole.php" class="badge">🏥 Clinique-École</a>
      <a href="pages/formations_pro.php" class="badge">📚 Formations Pro</a>
      <a href="pages/auto_ecole.php" class="badge">🚗 Auto-École</a>
      <a href="pages/prepa_scolaire.php" class="badge">🎓 Prépa Scolaire</a>
    </div>
    
    <a href="#domaines-formation" class="cta magnetic">Découvrir toutes nos formations</a>
  </div>
</section>

<!-- Section des indicateurs clés -->
<section class="container" style="padding-top:0">
  <div class="kpis">
    <div class="kpi"><b data-target="500">0</b><span>Étudiants formés</span></div>
    <div class="kpi"><b data-target="200">0</b><span>Stages garantis</span></div>
    <div class="kpi"><b data-target="25">0</b><span>Formateurs experts</span></div>
    <div class="kpi"><b data-target="15">0</b><span>Parcours certifiants</span></div>
  </div>
  <div class="divider"></div>
</section>

<!-- Section des 4 pôles principaux -->
<section id="domaines-formation" class="container">
  <h2 class="page-title" style="text-align: center; margin-bottom: 40px;">Nos domaines de formation</h2>
  <div class="grid grid-4">
    <!-- Les cartes des domaines restent similaires mais peuvent être dynamisées -->
    <article class="card reveal">
      <div style="font-size: 2.5rem; margin-bottom: 15px;">🏥</div>
      <h3>Clinique-École Santé</h3>
      <p>Soins Infirmiers, Médecine Générale, Kinésithérapie, Sage-Femme, Secrétariat Médical et toutes les spécialités médicales.</p>
      <a href="pages/clinique_ecole.php" class="btn-small">Voir les formations santé</a>
    </article>
    
    <article class="card reveal">
      <div style="font-size: 2.5rem; margin-bottom: 15px;">📚</div>
      <h3>Formations Professionnelles</h3>
      <p>Comptabilité, Secrétariat, QHSE et bien d'autres filières professionnelles pour votre insertion rapide.</p>
      <a href="pages/formations_pro.php" class="btn-small">Voir les formations pro</a>
    </article>
    
    <article class="card reveal">
      <div style="font-size: 2.5rem; margin-bottom: 15px;">🚗</div>
      <h3>Auto-École</h3>
      <p>Permis de conduire (A, B, C) avec moniteurs expérimentés et véhicules modernes. Taux de réussite de 85%.</p>
      <a href="pages/auto_ecole.php" class="btn-small">Voir l'auto-école</a>
    </article>
    
    <article class="card reveal">
      <div style="font-size: 2.5rem; margin-bottom: 15px;">🎓</div>
      <h3>Prépa Scolaire</h3>
      <p>Préparation intensive au BAC et BEPC avec encadrement personnalisé et méthodologie éprouvée.</p>
      <a href="pages/prepa_scolaire.php" class="btn-small">Voir la prépa scolaire</a>
    </article>
  </div>
</section>

<!-- Autres sections restent similaires -->

<footer>
  <div class="container ftr">
    <span>© 2025 Clinique‑École - Santé, Formations & Auto-école</span>
    <div class="socials">
      <a href="#" aria-label="WhatsApp" class="social"><img src="assets/icones/wa.svg" alt="WhatsApp"/></a>
      <a href="https://www.facebook.com/profile.php?id=61581114310350" aria-label="Facebook" class="social"><img src="assets/icones/fb.svg" alt="Facebook"/></a>
      <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=zguz4ww" aria-label="Instagram" class="social"><img src="assets/icones/insta.svg" alt="Instagram"/></a>
      <a href="https://vm.tiktok.com/ZMHWVtUA2SLTJ-0XsiT/" aria-label="TikTok" class="social"><img src="assets/icones/tiktok.svg" alt="TikTok"/></a>
      <a href="#" aria-label="YouTube" class="social"><img src="assets/icones/yt.svg" alt="YouTube"/></a>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>