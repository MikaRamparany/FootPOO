<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


// Pays 

$France = new Pays ("France");
$Espagne = new Pays ("Espagne");
$Angleterre = new Pays ("Angleterre");
$Italie = new Pays ("Italie");


// Les Equipes 

$OM = new Equipe ( "OM", $France, 1899);
$REAL = new Equipe ( "Real Madrid", $Espagne, 1902);
$MANU = new Equipe ("Manchester United", $Angleterre, 1878);
$BARCA= new Equipe ("Barcelone", $Espagne, 1899);
$JUVE = new Equipe ("Juventus", $Italie, 1897);




// Joueurs 

$Evra = new Joueur ( "EVRA", "Patrice", 1981, $France);
$POGBA= new Joueur ( "POGBA", "Paul", 1993, $France);
$BECKHAM = new Joueur ( "BECKHAM", "David", 1975,$Angleterre);
$PIQUE = new Joueur ( "PIQUE", "Gerrard", 1986, $Espagne);
$FABIO = new Joueur ( "CANNAVARO", "Fabio", 1973, $Italie);

// Carrières en club 

$EvraMANU= new Carriere ( $Evra, $MANU, 2006);
$EvraOM = new Carriere ( $Evra, $OM, 2017);

$PogbaMANU= new Carriere ( $POGBA, $MANU, 2011);
$PogbaJUVE= new Carriere ( $POGBA, $JUVE, 2012);
$PogbaMANU2 = new Carriere ( $POGBA, $MANU,2016);
$PogbaJUVE2= new Carriere ( $POGBA, $JUVE, 2022);

$BeckhamMANU = new Carriere ( $BECKHAM, $MANU, 1992);
$BeckhamREAL = new Carriere ( $BECKHAM, $REAL, 2003);

$PiqueMANU = new Carriere ( $PIQUE, $MANU, 2004);
$PiqueBARCA= new Carriere ( $PIQUE, $BARCA,2008);

$FabioJUVE = new Carriere ( $FABIO, $JUVE, 2004);
$FabioREAL = new Carriere ( $FABIO, $REAL, 2006);


// Affichages Carte Pays: 
// var_dump($Espagne);

echo "<section style='display:flex; flex-wrap: wrap; gap:100px; justify-content: center'>";
$Espagne -> infoPays();
$France -> infoPays();
$Italie -> infoPays();
echo "</section> <br> <br> <br> <br> <br> <br> <br> <br";


//affichages carte Equipes: 
echo "<section style='display:flex; flex-wrap: wrap; gap:100px; justify-content: center'>";

// $OM -> infoEquipe();

echo " </section> <br> <br> <br> <br> <br> <br";


//affichages carte Joueur : 

echo "<section style='display:flex; flex-wrap: wrap; gap:100px; justify-content: center'>";
$POGBA -> afficherInfosJoueur ();
$BECKHAM -> afficherInfosJoueur ();
$PIQUE -> afficherInfosJoueur ();

echo " </section> <br> <br> <br> <br> <br> <br";