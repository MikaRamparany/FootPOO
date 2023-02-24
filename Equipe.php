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
        // echo "<div style='background-color:blue;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>".$this."</strong><span style='font-size:20px'>".$this->pays."</span></div><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>";

        echo "<div style='color:#ceb10a; 
        background-color:#3c498c;
         margin:0; width:350px;
          height:360px;
           border-radius:10px;
            display:flex;
             flex-direction: column;
              justify-content: space-around;
               box-shadow:rgba(100, 100, 111, 0.2)0px 7px 29px 0px'> <span style='text-align:center;
                font-size:28px'><b>$this <br> ".$this-> pays." </b></span><br><span style='font-size:14px;
                 text-align:center'>";
        
        foreach($this->carrieres as $carriere)
        {

            echo "<span style='font-size:20px'><br> ".$carriere->getjoueur()." ".$carriere. "<br></span>"; 
            // j'ai rajouté ".carriere. après ".$carroere->getjoueur()." pour pouvoir afficher la date de début de contrat du joueur dans la carte infoEquipe
        }
        echo "</span></span></div><br>";

    }   

    
    
    public function __toString()
    {
        return $this-> nom ;
    }
    
}