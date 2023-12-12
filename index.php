<?php
include 'MaClass.php';
include 'MaClassHerite.php';

// $objClass = new MaClass();
//echo 'Couleur : ' . $obj->couleur . '<br>';
//echo 'Age: ' . $obj->age . '<br>';
//echo 'Nom: ' . $obj->_nom;

// $objClass->prenom = 'Bill';
// echo $objClass->displayMethode('Coucou');

// $objClass->rayon = 3.5;
// echo $objClass->calculCercleAire() . 'cm2<br>';

// echo $objClass->calculCercleAire2(3.5) . 'cm2';

// echo MaClass::$varStatic;
// echo MaClass::staticFunc();

// $objHerite = new MaClassHerite();

// echo $objHerite->getCouleur();

// echo $objHerite->getVariableProtected();

// $personne = new MaClass();

// $personne->setNom('Micheline PILOCKE');
// echo $personne->getNom();

$personne2 = new MaClassHerite();

echo $personne2->getVariableProtected();
$personne2->setVariableProtected('Une chaine de caractere');
echo $personne2->getVariableProtected();