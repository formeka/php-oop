<?php

class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 54;
    public string $prenom;
    public const PI = 3.14;
    public float|int $rayon;

    // private string $_attributPrivate;
    // private string $_nom = 'Michel PLIK';


    public function displayMethode($value) : string
    {
        //echo 'Je suis une methode .';
        // echo 'Je suis une methode qui affiche ' . $value;
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' . $value;
    }

public function calculCercleAire(): float|int
{
    // echo self::PI;
    return self::PI * $this->rayon * $this->rayon;
}

public function calculCercleAire2(float|int $rayonParam) : float|int
{
    return self::PI * $rayonParam * $rayonParam;
}

}

$objClass = new MaClass();
//echo 'Couleur : ' . $obj->couleur . '<br>';
//echo 'Age: ' . $obj->age . '<br>';
//echo 'Nom: ' . $obj->_nom;

// $objClass->prenom = 'Bill';
// echo $objClass->displayMethode('Coucou');

$objClass->rayon = 3.5;
echo $objClass->calculCercleAire() . 'cm2<br>';

echo $objClass->calculCercleAire2(3.5) . 'cm2';