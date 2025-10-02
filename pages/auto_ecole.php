<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Auto-École — Clinique‑École</title>
  <meta name="color-scheme" content="light dark">
  <link rel="icon" href="../assets/icones/favicon.svg" type="image/svg+xml"/>
  <link rel="stylesheet" href="../styles.css"/>
</head>
<body>
<header id="header">
  <div class="container nav">
    <a class="brand" href="../index.php">
      <img src="../assets/images/clinique_ecole.jpg" alt="Logo" class="logo"/>
      <b>Clinique‑École</b>
    </a>
    <nav class="menu" id="menu">
      <a href="../index.php">Accueil</a>
      <a href="clinique_ecole.php">Clinique-École</a>
	  <a href="formations_pro.php">Formation Pro</a>
      <a href="auto_ecole.php"  class="active">Auto-école</a>  <!-- Page courante -->
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

<main class="container">
  <h1 class="page-title">Auto-École</h1>
  <p class="subtitle" style="text-align: center; margin-bottom: 40px; font-size: 1.2rem;">
    Apprenez à conduire en toute sécurité avec des moniteurs expérimentés
  </p>

  <!-- Permis proposés -->
  <div class="grid grid-3">
    <!-- Permis B -->
    <div class="card reveal">
      <div style="font-size: 3rem; text-align: center; margin-bottom: 20px;">🚗</div>
      <h3 style="text-align: center;">Permis B</h3>
      <div style="text-align: center; margin: 20px 0;">
        <span style="font-size: 1.5rem; font-weight: bold; color: var(--brand);">À partir de 180 000 F</span>
        <br>
        <span style="color: var(--muted);">Voiture automatique & manuelle</span>
      </div>
      <ul style="line-height: 1.8;">
        <li><strong>20h de conduite minimum</strong></li>
        <li><strong>Cours de code illimités</strong></li>
        <li><strong>Véhicules récents et entretenus</strong></li>
        <li><strong>Présentation aux examens inclus</strong></li>
        <li><strong>Forfait code seul : 45 000 F</strong></li>
      </ul>
    </div>

    <!-- Permis A -->
    <div class="card reveal">
      <div style="font-size: 3rem; text-align: center; margin-bottom: 20px;">🏍️</div>
      <h3 style="text-align: center;">Permis A</h3>
      <div style="text-align: center; margin: 20px 0;">
        <span style="font-size: 1.5rem; font-weight: bold; color: var(--brand);">À partir de 120 000 F</span>
        <br>
        <span style="color: var(--muted);">Moto toutes cylindrées</span>
      </div>
      <ul style="line-height: 1.8;">
        <li><strong>15h de conduite minimum</strong></li>
        <li><strong>Équipements fournis (casques)</strong></li>
        <li><strong>Motos adaptées à tous les niveaux</strong></li>
        <li><strong>Apprentissage progressif</strong></li>
        <li><strong>Forfait code : 35 000 F</strong></li>
      </ul>
    </div>

    <!-- Permis C -->
    <div class="card reveal">
      <div style="font-size: 3rem; text-align: center; margin-bottom: 20px;">🚚</div>
      <h3 style="text-align: center;">Permis C</h3>
      <div style="text-align: center; margin: 20px 0;">
        <span style="font-size: 1.5rem; font-weight: bold; color: var(--brand);">À partir de 250 000 F</span>
        <br>
        <span style="color: var(--muted);">Poids lourds & transport</span>
      </div>
      <ul style="line-height: 1.8;">
        <li><strong>Formation professionnelle</strong></li>
        <li><strong>Véhicules de différentes catégories</strong></li>
        <li><strong>Stage pratique en entreprise</strong></li>
        <li><strong>Débouchés professionnels assurés</strong></li>
        <li><strong>Financement possible</strong></li>
      </ul>
    </div>
  </div>

  <!-- Avantages -->
  <section style="margin: 60px 0;">
    <h2 style="text-align: center; margin-bottom: 40px;">Pourquoi choisir notre auto-école ?</h2>
    <div class="grid grid-4">
      <div class="card reveal">
        <h3>👨‍🏫 Moniteurs experts</h3>
        <p>Enseignants diplômés et expérimentés, patients et pédagogues.</p>
      </div>
      <div class="card reveal">
        <h3>⏱️ Horaires flexibles</h3>
        <p>Cours de code et conduite du lundi au samedi, selon vos disponibilités.</p>
      </div>
      <div class="card reveal">
        <h3>🚙 Véhicules modernes</h3>
        <p>Voitures et motos récentes, régulièrement entretenues et assurées.</p>
      </div>
      <div class="card reveal">
        <h3>📈 Taux de réussite</h3>
        <p>85% de réussite à l'examen grâce à notre méthode éprouvée.</p>
      </div>
    </div>
  </section>

  <!-- Processus d'inscription -->
  <section class="card" style="padding: 40px; margin: 40px 0;">
    <h2 style="text-align: center; margin-bottom: 30px;">📋 Processus d'inscription</h2>
    <div class="grid grid-4">
      <div style="text-align: center;">
        <div style="font-size: 2rem; margin-bottom: 10px;">1️⃣</div>
        <h4>Inscription</h4>
        <p>Dossier complet + photos</p>
      </div>
      <div style="text-align: center;">
        <div style="font-size: 2rem; margin-bottom: 10px;">2️⃣</div>
        <h4>Code</h4>
        <p>Cours illimités + examens blancs</p>
      </div>
      <div style="text-align: center;">
        <div style="font-size: 2rem; margin-bottom: 10px;">3️⃣</div>
        <h4>Conduite</h4>
        <p>Leçons pratiques avec moniteur</p>
      </div>
      <div style="text-align: center;">
        <div style="font-size: 2rem; margin-bottom: 10px;">4️⃣</div>
        <h4>Examen</h4>
        <p>Présentation officielle</p>
      </div>
    </div>
  </section>

  <!-- Documents requis -->
  <section class="card" style="padding: 30px; margin: 40px 0;">
    <h3 style="text-align: center; margin-bottom: 25px;">📄 Documents requis pour l'inscription</h3>
    <div class="grid grid-2">
      <ul style="line-height: 2;">
        <li>✅ 4 photos d'identité récentes</li>
        <li>✅ Photocopie CNI ou passeport</li>
        <li>✅ Justificatif de domicile</li>
        <li>✅ Certificat médical</li>
      </ul>
      <ul style="line-height: 2;">
        <li>✅ 2 timbres fiscaux</li>
        <li>✅ Attestation de recensement</li>
        <li>✅ Ancien permis (si échange)</li>
        <li>✅ Acompte de 30%</li>
      </ul>
    </div>
  </section>

  <!-- CTA Inscription -->
  <section class="card" style="text-align: center; padding: 40px; margin: 40px 0;">
    <h2 style="margin-bottom: 20px;">Prêt à prendre le volant ?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 30px;">
      Rejoignez la meilleure auto-école de Libreville et obtenez votre permis en toute confiance
    </p>
    <a href="contact.php" class="cta magnetic">S'inscrire maintenant</a>
    <p style="margin-top: 20px; color: var(--muted);">
      📞 <strong>Renseignements</strong> : +241 00 00 00 00<br>
      🕒 <strong>Horaires</strong> : Lundi-Samedi • 7h30-18h
    </p>
  </section>
</main>

<footer>
  <div class="container ftr">
    <span>© 2025 Clinique‑École - Santé, Formations & Auto-école</span>
    <div class="socials">
      <a href="#" aria-label="WhatsApp" class="social"><img src="../assets/icones/wa.svg" alt="WhatsApp"/></a>
     <a href="https://www.facebook.com/profile.php?id=61581114310350" aria-label="Facebook" class="social"><img src="../assets/icones/fb.svg" alt="Facebook"/></a>
      <a href=". https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=zguz4ww" aria-label="Instagram" class="social"><img src="../assets/icones/insta.svg" alt="Instagram"/></a>
      <a href="https://vm.tiktok.com/ZMHWVtUA2SLTJ-0XsiT/" aria-label="TikTok" class="social"><img src="../assets/icones/tiktok.svg" alt="TikTok"/></a>
      <a href="#" aria-label="YouTube" class="social"><img src="../assets/icones/yt.svg" alt="YouTube"/></a>
    </div>
  </div>
</footer>
<script src="../script.js"></script>
</body>
</html>

