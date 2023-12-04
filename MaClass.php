<?php

class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 54;
    public string $prenom;
    public const PI = 3.14;
    public float|int $rayon;
    static string $varStatic = 'Je suis une variable statique';

    // private string $_attributPrivate;
    // private string $_nom = 'Michel PLIK';

    public function __construct()
    {
        echo 'Je suis une methode magique de la ' . __CLASS__  . '<br>';
    }

    public function displayMethode($value): string
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

    public function calculCercleAire2(float|int $rayonParam): float|int
    {
        return self::PI * $rayonParam * $rayonParam;
    }

    static function staticFunc()
    {
        return 'Methode statique qui affiche une variable statique ' . self::$varStatic;
    }

    public function __destruct()
    {
        echo 'Je suis une methode magique (__destruct) de la ' . __CLASS__  . '<br>';
    }
}

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

