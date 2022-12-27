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

