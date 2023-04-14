<?php

class Movie 
{
    private $nome = 'titolo';
    public $genere = 'sconosciuto'; // sia titolo che sconosciuto sono valori di default che assegno con =

    function getName(){         //se setto su private un attributo per tirarlo fuori mi serve un metodo dentro la classe 
        return $this->nome;     //non posso nemmeno leggerlo se e' private
    }
}

$titanic = new Movie();
$rambo = new Movie();
$matrix = new Movie();
 
var_dump($titanic->getName()); //non serve $ dopo la freccia
//var_dump($titanic);
//echo $titanic->name;