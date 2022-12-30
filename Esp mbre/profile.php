<?php
  // Vérifiez si la variable de session existe avant d'afficher le formulaire de modification du profil
  session_start();
  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // Récupération des informations de l'utilisateur à partir de la base de données
    $db = mysqli_connect('localhost', 'utilisateur', 'motdepasse', 'nomdelabasededonnées');
    $query = "SELECT * FROM utilisateurs WHERE username='$username'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    // Affichez le formulaire de modification du profil
    echo "
      <form action='update_profile.php' method='post'>
        <label for='email'>Email:</label><br>
        <input type='text' id='email' name='email' value='{$user['email']}'><br>
        <label for='password'>Password:</label><br>
        <input type='password' id='password' name='password'><br>
        <input type='submit' value='Update'>
      </form>
    ";
  } else {
    // Si la variable de session n'existe pas, redirigez l'utilisateur vers la page de connexion
    header('Location: login.html');
  }
?>
