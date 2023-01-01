<?php
  // Récupération des données du formulaire
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connexion à la base de données et mise à jour des informations de l'utilisateur.
  $db = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'nomdelabasededonnées');
  $query = "UPDATE utilisateurs SET email='$email', password='$password' WHERE username='$username'";
  mysqli_query($db, $query);

  // Redirection vers la page de profil
  header('Location: profile.php');
?>
