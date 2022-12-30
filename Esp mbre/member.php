<?php
  // Vérifiez si la variable de session existe avant d'afficher le contenu de l'espace membre
  session_start();
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // Affichez le contenu de l'espace membre
    echo "Bienvenue dans votre espace membre";
  } else {
    // Si la variable de session n'existe pas, redirigez l'utilisateur vers la page de connexion
    header('Location: login.html');
  }
?>
