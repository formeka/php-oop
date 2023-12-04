<?php

class MaClass
{
    public $attributPublic;
    public $couleur = 'vert';
    public $age = 54;
    private $_attributPrivate;
    private $_nom = 'Michel PLIK';
}

$obj = new MaClass();
echo 'Couleur : ' . $obj->couleur . '<br>';
echo 'Age: ' . $obj->age . '<br>';
//echo 'Nom: ' . $obj->_nom;