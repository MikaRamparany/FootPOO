<?php

class Equipe 

{

    private string $nom;
    private Pays $pays;
    private  $anneeCreation;
    private array $carrieres; // année saisons au sein d'une équipe, lie équipes, joueurs.
    
    public function __construct(string $nom, Pays $pays, $anneeCreation)
    { 
        $this-> nom = $nom;
        $this-> pays = $pays;
        $this-> anneeCreation = $anneeCreation;
        $this-> carrieres=[];
        $this -> pays -> addEquipe($this);
        

    }

    public function getNom()
    {
        return $this ->nom;
    }

    public function setNom(string $nom)
    {
        return $this ->nom= $nom;
    }

    public function getPays()
    {
        return $this ->pays;
    }
    public function setPays(Pays $pays)
    {
        return $this ->pays=$pays;
    }

    public function getAnneeCreation()
    {
        return $this ->anneeCreation;
    }

    public function setAnneeCreation($anneeCreation)
    {
        return $this ->anneeCreation = $anneeCreation;
    }

    public function addCarriere($carriere)
    {
        $this-> carrieres[] = $carriere;
    }

    //FONCTION POUR AFFICHER LA CARTE INFO EQUIPE 

    public function infoEquipe()
    
    { 
        echo "<div style='background-color:blue;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>".$this."</strong><span style='font-size:20px'>".$this->pays." - ".$this->anneeCreation." ans</span></div><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>";
        
        foreach($this->carrieres as $carriere)
        {

            echo "<span style='font-size:15px'>".$this->$carriere." ( ".$carriere." )</span>";
        }
        echo "<div><div style='display:flex;flex-direction </div></div>";

    }   

    
    
    public function __toString()
    {
        return "$this-> nom";
    }
    
}