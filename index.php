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

$obj2 = new MaClass();

// echo $obj2->varProtected;

$obj2->setNom('Micheline PILOCKE');
echo $obj2->getNom();