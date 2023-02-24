<?php

class carriere 
{
private Joueur $joueur;
private Equipe $equipe;
private Int $anneeDebut;

public function __construct(Joueur $joueur, Equipe $equipe, $anneeDebut)

{
    $this -> joueur = $joueur;
    $this -> equipe = $equipe;
    $this -> anneeDebut = $anneeDebut;
    $this -> joueur -> addCarriere($this);
    $this -> equipe -> addCarriere($this);

}

public function getjoueur ()
{
    return $this -> joueur;
}
public function getequipe ()
{
    return $this -> equipe;
}

public function getanneeDebut ()
{
    return $this -> anneeDebut;
}

public function __toString()

{
    return "$this -> anneeDebut";
}


}