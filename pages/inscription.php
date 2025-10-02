<?php
include_once '../database.php';
include_once '../models/Inscription.php';

$database = new Database();
$db = $database->getConnection();

$inscription = new Inscription($db);
$message_status = "";

// Pré-remplissage selon le paramètre formation
if(isset($_GET['formation'])) {
    $formation_map = [
        'pharmacologie' => 'Notions de pharmacologie de base',
        'gestion_stock' => 'Gestion de stock & rangement',
        'accueil_patient' => 'Accueil & orientation des patients',
        'delivrance_medicaments' => 'Délivrance encadrée des médicaments',
        'ethique_reglementation' => 'Éthique & réglementation',
        'informatique_appliquee' => 'Informatique appliquée'
    ];
    
    if(isset($formation_map[$_GET['formation']])) {
        // Pré-remplira le champ formation dans le formulaire
    }
}

// Traitement du formulaire d'inscription
if($_POST && isset($_POST['nom_complet'])) {
    try {
        $inscription->nom_complet = $_POST['nom_complet'];
        $inscription->email = $_POST['email'];
        $inscription->telephone = $_POST['telephone'];
        $inscription->formation_souhaitee = $_POST['formation_souhaitee'];
        $inscription->message = $_POST['message'] ?? '';
        
        $inscription->utilisateur_id = null;
        $inscription->formation_id = null;

        if($inscription->create()){
            $message_status = "<div class='success'>✅ Votre inscription a été envoyée avec succès! Nous vous contacterons rapidement.</div>";
            $_POST = array();
        } else {
            $message_status = "<div class='error'>❌ Désolé, impossible d'envoyer votre inscription. Veuillez réessayer.</div>";
        }
    } catch (Exception $e) {
        $message_status = "<div class='error'>❌ Erreur: " . $e->getMessage() . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inscription — Clinique‑École</title>
  <meta name="color-scheme" content="light dark">
  <link rel="icon" href="../assets/icons/favicon.svg" type="image/svg+xml"/>
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
      <a href="auto_ecole.php">Auto-école</a>
      <a href="prepa_scolaire.php">Prépa Scolaire</a>
	  <a href="inscription.php" class="active">Inscription</a> <!-- Page courante -->
      <a href="equipe.php">Équipe</a>
      <a href="contact.php">Contact</a>   
    </nav>
    <div class="actions">
      <button id="themeToggle" class="icon-btn" aria-label="Basculer mode nuit">🌙</button>
      <button class="burger" aria-label="Menu" onclick="document.getElementById('menu').classList.toggle('open')">☰</button>
    </div>
  </div>
</header>

<main class="container">
  <h1 class="page-title">Inscription aux Formations</h1>
  <p class="subtitle">
    Postulez à nos formations et démarrez votre parcours professionnel
  </p>

  <div class="contact-layout">
    <!-- Formulaire d'inscription -->
    <form id="inscriptionForm" class="form-card" method="POST">
      <?php echo $message_status; ?>
      
      <h3 class="form-section">📝 Informations personnelles</h3>
      
      <div class="form-grid">
        <input type="text" name="nom_complet" required 
               placeholder="Nom complet *" 
               value="<?php echo isset($_POST['nom_complet']) ? htmlspecialchars($_POST['nom_complet']) : ''; ?>">
        <input type="tel" name="telephone" required 
               placeholder="Téléphone *" 
               value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
      </div>
      
      <input type="email" name="email" required 
             placeholder="E‑mail *" 
             value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
      
      <h3 class="form-section">🎓 Formation souhaitée</h3>
      
      <select name="formation_souhaitee" required>
        <option value="">Sélectionnez une formation *</option>
        <option value="Secrétariat Médical" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Secrétariat Médical') ? 'selected' : ''; ?>>Secrétariat Médical</option>
        <option value="Soins Infirmiers" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Soins Infirmiers') ? 'selected' : ''; ?>>Soins Infirmiers</option>
        <option value="Médecine Générale" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Médecine Générale') ? 'selected' : ''; ?>>Médecine Générale</option>
        <option value="Vendeuse en Pharmacie" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Vendeuse en Pharmacie') ? 'selected' : ''; ?>>Vendeuse en Pharmacie</option>
        <option value="Sage-Femme" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Sage-Femme') ? 'selected' : ''; ?>>Sage-Femme</option>
        <option value="Ophtalmologie" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Ophtalmologie') ? 'selected' : ''; ?>>Ophtalmologie</option>
        <option value="Gynécologie" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Gynécologie') ? 'selected' : ''; ?>>Gynécologie</option>
        <option value="Permis B" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Permis B') ? 'selected' : ''; ?>>Permis B</option>
        <option value="Permis A" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Permis A') ? 'selected' : ''; ?>>Permis A</option>
        <option value="Permis C" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Permis C') ? 'selected' : ''; ?>>Permis C</option>
        <option value="Préparation BAC" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Préparation BAC') ? 'selected' : ''; ?>>Préparation BAC</option>
        <option value="Préparation BEPC" <?php echo (isset($_POST['formation_souhaitee']) && $_POST['formation_souhaitee'] == 'Préparation BEPC') ? 'selected' : ''; ?>>Préparation BEPC</option>
      </select>
      
      <textarea name="message" rows="5" placeholder="Votre motivation, questions ou informations complémentaires..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
      
      <label class="checkbox-label">
        <input type="checkbox" name="rgpd" required> 
        J'accepte que mes données soient utilisées pour traiter mon inscription *
      </label>
      
      <button type="submit" class="submit-btn">Envoyer ma demande d'inscription</button>
      
      <p class="form-note">* Champs obligatoires</p>
    </form>
    
    <!-- Informations pratiques -->
    <aside class="info-sidebar">
      <h3>📋 Processus d'inscription</h3>
      
      <div class="process-steps">
        <div class="process-step">
          <div class="step-number">1</div>
          <div class="step-content">
            <strong>Demande d'inscription</strong>
            <span>via ce formulaire</span>
          </div>
        </div>
        
        <div class="process-step">
          <div class="step-number">2</div>
          <div class="step-content">
            <strong>Contact sous 48h</strong>
            <span>par notre équipe</span>
          </div>
        </div>
        
        <div class="process-step">
          <div class="step-number">3</div>
          <div class="step-content">
            <strong>Entretien personnalisé</strong>
            <span>et conseil en formation</span>
          </div>
        </div>
        
        <div class="process-step">
          <div class="step-number">4</div>
          <div class="step-content">
            <strong>Inscription définitive</strong>
            <span>et planning des cours</span>
          </div>
        </div>
      </div>
      
      <div class="contact-info">
        <h3>📞 Contact</h3>
        <p><strong>📧 Email :</strong> inscriptions@clinique-ecole.ga</p>
        <p><strong>📞 Téléphone :</strong> +241 062106119 / 077996337</p>
        <p><strong>📍 Adresse :</strong> Libreville, Gabon — PK8 CECADO</p>
      </div>
    </aside>
  </div>
</main>

<footer>
  <div class="container ftr">
    <span>© 2025 Clinique‑École - Santé, Formations & Auto-école</span>
    <div class="socials">
      <a href="https://wa.me/241062106119" aria-label="WhatsApp" class="social">
        <img src="../assets/icones/wa.svg" alt="WhatsApp"/>
      </a>
      <a href="https://www.facebook.com/profile.php?id=61581114310350" aria-label="Facebook" class="social">
        <img src="../assets/icones/fb.svg" alt="Facebook"/>
      </a>
      <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=zguz4ww" aria-label="Instagram" class="social">
        <img src="../assets/icones/insta.svg" alt="Instagram"/>
      </a>
      <a href="https://vm.tiktok.com/ZMHWVtUA2SLTJ-0XsiT/" aria-label="TikTok" class="social">
        <img src="../assets/icones/tiktok.svg" alt="TikTok"/>
      </a>
      <a href="#" aria-label="YouTube" class="social">
        <img src="../assets/icones/yt.svg" alt="YouTube"/>
      </a>
    </div>
  </div>
</footer>
	
<script src="../script.js"></script>
</body>
</html>