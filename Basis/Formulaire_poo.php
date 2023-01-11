

/**Générer un code de formulaire en programmation orientée objet

Voici comment vous pouvez créer un formulaire en utilisant la programmation orientée objet en PHP:

Créez une classe Form avec les propriétés et méthodes nécessaires pour votre formulaire. Par exemple:**/

class Form {
  // propriétés de la classe (champs du formulaire:name)
  public $name;
  public $email;
  public $message;

  // méthode de la classe (génère le code HTML du formulaire)
  public function render() {
    // génération du code HTML du formulaire
    $form = '<form method="post">';
    $form .= '<label for="name">Nom:</label><br>';
    $form .= '<input type="text" name="name"><br>';
    $form .= '<label for="email">Email:</label><br>';
    $form .= '<input type="email" name="email"><br>';
    $form .= '<label for="message">Message:</label><br>';
    $form .= '<textarea name="message"></textarea><br>';
    $form .= '<input type="submit" value="Envoyer">';
    $form .= '</form>';

    return $form;
  }
}
Créez une instance de la classe Form et appelez sa méthode render() pour afficher le formulaire:

$form = new Form();
echo $form->render();
Le code HTML du formulaire sera alors affiché sur la page. Vous pouvez également ajouter d'autres méthodes à la classe Form pour valider les données du formulaire, envoyer un email, etc.
