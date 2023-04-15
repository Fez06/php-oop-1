<?php

class Movie 
{
    public $nome = 'titolo';
    public $genere = 'sconosciuto'; // sia titolo che sconosciuto sono valori di default che assegno con =
    private $durata;

    function __construct($_nome, $_genere, $_durata = '>40 min')
    {
        $this->durata = $_durata;
        $this->nome = $_nome;
        $this->genere = $_genere;
    }

    function getName(){         //se setto su private un attributo per tirarlo fuori mi serve un metodo dentro la classe 
        return $this->nome;     //non posso nemmeno leggerlo se e' private
    }

    function timeproblem(){
        if ($this->durata < 120) {
            echo 'dura poco';
        } elseif ($this->durata > 120 && $this->durata < 140) {
            echo 'lunghetto ehh';
        } else {
            echo 'un mattone infinito';
        }
    }
}

$titanic = new Movie('Titanic', 'drammatico', 194);
$matrix = new Movie('Matrix', 'Sci-fi/Azione', 136);
$alien = new Movie('Alien', 'Sci-fi/Horror', 117);
 
var_dump($titanic->getName()); //non serve $ dopo la freccia
var_dump($alien);
//echo $titanic->name;

echo $titanic->timeproblem();
