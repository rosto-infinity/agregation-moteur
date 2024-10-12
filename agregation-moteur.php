<?php

//************************* */ Définition de la classe Moteur :

// Propriété $puissance : Ceci définit une propriété publique puissance pour la classe Moteur. Elle stocke la puissance du moteur.

// Méthode __construct($puissance) : Ceci est le constructeur de la classe. Lorsqu'un objet Moteur est créé, ce constructeur est appelé avec un argument $puissance et initialise la propriété puissance de l'objet avec cette valeur.
class Moteur {
    public $puissance;

    public function __construct($puissance) {
        $this->puissance = $puissance;
    }
}

//********************** */ Définition de la classe Voiture ****************:


// Propriété $moteurs : Ceci définit une propriété publique moteurs pour la classe Voiture. C'est un tableau qui va contenir les objets Moteur associés à la voiture.

// Méthode ajouterMoteur($moteur) : Cette méthode prend un objet Moteur en argument et l'ajoute au tableau $moteurs.
class Voiture {
    public $moteurs = [];

    public function ajouterMoteur($moteur) {
        $this->moteurs[] = $moteur;
    }
}

// Création des moteurs
// Ici, nous créons deux objets Moteur avec des puissances de 160 et 180 respectivement.
$moteur1 = new Moteur(160);
$moteur2 = new Moteur(180);

// Agrégation : ajout des moteurs à la voiture

// Nous créons un objet Voiture.
// Nous ajoutons les objets Moteur créés précédemment à la voiture en utilisant la méthode ajouterMoteur().
$voiture = new Voiture();
$voiture->ajouterMoteur($moteur1);
$voiture->ajouterMoteur($moteur2);


// La fonction print_r affiche les informations sur l'objet voiture, y compris les moteurs qui y sont associés.
print_r($voiture);


// Explication de l'Agrégation
// L'agrégation est démontrée ici en ce sens que les objets Moteur existent indépendamment, mais sont associés à l'objet Voiture. Si l'objet Voiture est détruit, les objets Moteur peuvent encore exister indépendamment en dehors du contexte de l'objet Voiture.