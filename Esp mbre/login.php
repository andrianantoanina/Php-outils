<?php
  // Récupération des données du formulaire..
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Connexion à la base de données
  $db = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'nomdelabasededonnées');

  // Vérification des informations de connexion dans la base de données
  $query = "SELECT * FROM utilisateurs WHERE username='$username' AND password='$password'";
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    // Si les informations de connexion sont correctes, définissez une variable de session PHP
    session_start();
    $_SESSION['logged_in'] = true;

    // Redirection vers l'espace membre
    header('Location: member.php');
  } else {
    // Si les informations de connexion sont incorrectes, affichez un message d'erreur
    echo "Nom d'utilisateur ou mot de passe incorrect";
  }
?>
