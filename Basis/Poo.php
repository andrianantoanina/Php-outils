<?php

// Définition de la classe "Person"
class Person {
  // Propriétés de la classe
  public $name;
  public $age;

  // Constructeur de la classe
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  // Méthode de la classe
  public function greet() {
    return "Bonjour, je m'appelle $this->name et j'ai $this->age ans.";
  }
}

// Création d'une nouvelle instance de la classe "Person"
$person = new Person('John', 30);

// Appel de la méthode greet() de l'objet $person
echo $person->greet();

//Ce code crée une classe Person avec deux propriétés publiques : $name et $age. Il y a également un constructeur qui permet de définir ces propriétés lors de la création d'une nouvelle instance de la classe. Enfin, il y a une méthode greet() qui retourne une chaîne de caractères contenant le nom et l'âge de la personne.

//Lorsque le code est exécuté, il crée une nouvelle instance de la classe Person et appelle la méthode greet() pour afficher un message de salutation. Le résultat final affiché sera : "Bonjour, je m'appelle John et j'ai 30 ans."
