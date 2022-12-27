class User {
  // propriétés de la classe (données de l'utilisateur)
  public $id;
  public $username;
  public $password;

  // méthode de la classe (vérifie si le mot de passe est correct)
  public function checkPassword($password) {
    return password_verify($password, $this->password);
  }
public static function login($username, $password) {
  // récupération de l'utilisateur depuis la base de données
  $stmt = self::$pdo->prepare('SELECT * FROM users WHERE username = ?');
  $stmt->execute([$username]);
  $user = $stmt->fetchObject(self::class);

  // vérification du mot de passe
  if ($user && $user->checkPassword($password)) {
    // connexion de l'utilisateur
    $_SESSION['user_id'] = $user->id;
    return true;
  } else {
    // échec de la connexion
    return false;
  }
}
Utilisez la méthode login pour vérifier les identifiants de connexion lorsque l'utilisateur soumet le formulaire de connexion:

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (User::login($username, $password)) {
    // connexion réussie
    header('Location: index.php');
    exit;
  } else {
    // échec de la connexion
    $error = "Nom d'utilisateur ou mot de passe incorrect";
  }
}

}
