<?php
include_once '../database.php';
include_once '../models/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);
$message_status = "";

// Traitement du formulaire de contact
if($_POST && isset($_POST['nom'])) {
    try {
        $contact->nom = $_POST['nom'];
        $contact->email = $_POST['email'];
        $contact->sujet = $_POST['sujet'];
        $contact->message = $_POST['message'] ?? '';

        if($contact->create()){
            $message_status = "<div class='success'>✅ Votre message a été envoyé avec succès! Nous vous contacterons rapidement.</div>";
            $_POST = array();
        } else {
            $message_status = "<div class='error'>❌ Désolé, impossible d'envoyer votre message. Veuillez réessayer.</div>";
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
  <title>Contact — Clinique‑École Santé</title>
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
      <a href="formations_pro.php">Formations Pro</a>
      <a href="auto_ecole.php">Auto-école</a>
      <a href="prepa_scolaire.php">Prépa Scolaire</a>
	  <a href="inscription.php">Inscrption</a>
      <a href="equipe.php">Équipe</a>
      <a href="contact.php" class="cta active">Contact</a>
    </nav>
    
    <div class="actions">
      <button id="themeToggle" class="icon-btn" aria-label="Basculer mode nuit">🌙</button>
      <button class="burger" aria-label="Menu" onclick="document.getElementById('menu').classList.toggle('open')">☰</button>
    </div>
  </div>
</header>

<main class="container">
  <h1 class="page-title">Contactez‑nous</h1>
  <p class="subtitle">Une question ? Un projet ? N'hésitez pas à nous contacter</p>

  <div class="contact-layout">
    <!-- Formulaire de contact -->
    <form id="contactForm" class="form-card" method="POST">
      <?php echo $message_status; ?>
      
      <h3 class="form-section">📝 Informations personnelles</h3>
      
      <div class="form-grid">
        <input type="text" name="nom" required 
               placeholder="Nom complet *" 
               value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : ''; ?>">
        <input type="tel" name="telephone" 
               placeholder="Téléphone" 
               value="<?php echo isset($_POST['telephone']) ? htmlspecialchars($_POST['telephone']) : ''; ?>">
      </div>
      
      <input type="email" name="email" required 
             placeholder="E‑mail *" 
             value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
      
      <h3 class="form-section">💬 Objet de votre message</h3>
      
      <select name="sujet" required>
        <option value="">Sélectionnez un sujet *</option>
        <option value="Secrétariat Médical" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Secrétariat Médical') ? 'selected' : ''; ?>>Secrétariat Médical</option>
        <option value="Soins Infirmiers" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Soins Infirmiers') ? 'selected' : ''; ?>>Soins Infirmiers</option>
        <option value="Médecine Générale" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Médecine Générale') ? 'selected' : ''; ?>>Médecine Générale</option>
        <option value="Vendeuse en Pharmacie" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Vendeuse en Pharmacie') ? 'selected' : ''; ?>>Vendeuse en Pharmacie</option>
        <option value="Sage‑Femme" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Sage‑Femme') ? 'selected' : ''; ?>>Sage‑Femme</option>
        <option value="Ophtalmologie" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Ophtalmologie') ? 'selected' : ''; ?>>Ophtalmologie</option>
        <option value="Gynécologie" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Gynécologie') ? 'selected' : ''; ?>>Gynécologie</option>
        <option value="Renseignement général" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Renseignement général') ? 'selected' : ''; ?>>Renseignement général</option>
        <option value="Partenariat" <?php echo (isset($_POST['sujet']) && $_POST['sujet'] == 'Partenariat') ? 'selected' : ''; ?>>Partenariat</option>
      </select>
      
      <textarea name="message" rows="5" placeholder="Votre message..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
      
      <label class="checkbox-label">
        <input type="checkbox" name="rgpd" required> 
        J'accepte d'être recontacté(e) *
      </label>
      
      <button type="submit" class="submit-btn">Envoyer mon message</button>
      
      <p class="form-note">* Champs obligatoires</p>
    </form>
    
    <!-- Informations pratiques -->
    <aside class="info-sidebar">
      <h3>📞 Contact direct</h3>
      
      <div class="contact-info">
        <p><strong>📍 Adresse :</strong><br>Libreville, Gabon — PK8 CECADO<br>en face du chaud-chaud</p>
        
        <p><strong>📞 Téléphone :</strong><br>+241 062106119<br>+241 077996337</p>
        
        <p><strong>📧 Email :</strong><br>contact@clinique-ecole.ga</p>
        
        <p><strong>🕒 Horaires :</strong><br>Lundi - Vendredi : 7h30 - 18h<br>Samedi : 8h - 13h</p>
      </div>
      
      <div class="socials big">
        <a href="https://wa.me/241062106119" class="social" target="_blank">
          <img src="../assets/icones/wa.svg" alt="WhatsApp"/>
          <span>WhatsApp</span>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61581114310350" class="social" target="_blank">
          <img src="../assets/icones/fb.svg" alt="Facebook"/>
          <span>Facebook</span>
        </a>
        <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=zguz4ww" class="social" target="_blank">
          <img src="../assets/icones/insta.svg" alt="Instagram"/>
          <span>Instagram</span>
        </a>
        <a href="https://vm.tiktok.com/ZMHWVtUA2SLTJ-0XsiT/" class="social" target="_blank">
          <img src="../assets/icones/tiktok.svg" alt="TikTok"/>
          <span>TikTok</span>
        </a>
      </div>
    </aside>
  </div>
</main>

<footer>
  <div class="container ftr">
    <span>© 2025 Clinique‑École - Santé, Formations & Auto-école</span>
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
      <a href="#" aria-label="YouTube" class="social">
        <img src="../assets/icones/yt.svg" alt="YouTube"/>
      </a>
    </div>
  </div>
</footer>

<script src="../script.js"></script>
</body>
</html>