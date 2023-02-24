<?php 

class Joueur 
{
    private string $nom;
    private string $prenom;
    private $anneeNaissance;
    private Pays $pays; 
    private array $carrieres;
    private Equipe $equipe;

    public function __construct(string $nom, string $prenom, $anneeNaissance, Pays $pays)

    {
        $this->nom = $nom;
        $this-> prenom = $prenom;
        $this-> anneeNaissance = new DateTime($anneeNaissance);
        $this-> carrieres = [];
        $this -> pays = $pays;
        
    }

    public function getnom()
    {
        return $this ->nom;
    }

    public function setnom(string $nom)
    {
        return $this ->nom= $nom;
    }


    public function getprenom()
    {
        return $this ->prenom;
    }

    public function setprenom(string $prenom)
    {
        return $this ->prenom= $prenom;
    }

    public function getanneeNaissance()
    {
        return $this ->anneeNaissance;
    }

    public function setanneeNaissance(string $anneeNaissance)
    {
        return $this ->anneeNaissance= new DateTime ($anneeNaissance);
    }

    public function getpays()
    {
        return $this ->pays;
    }

    public function setpays(Pays $pays)
    {
        return $this ->pays= $pays;
    }

    public function getequipe()
    {
        return $this ->equipe;
    }

    public function setequipe(Equipe $equipe)
    {
        return $this ->equipe= $equipe;
    }


// FONCTIONS 

    public function ageJoueur ()

    {
        $dateToday = new DateTime();
        $ageToday = date_diff($this->anneeNaissance,$dateToday);
        return $ageToday-> format ('%Y');
    }

    public function addCarriere (Carriere $carriere)
    {
        $this-> carrieres[] = $carriere;
    }
    public function afficherInfosJoueur ()
    {
    
        echo "<div style='background-color:#74c55c
        ;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><div style='display:flex;flex-direction:column'><strong style='font-size:30px'>".$this."</strong><span style='font-size:20px'>".$this->pays." - ".$this->ageJoueur()." ans</span></div><div style='display:flex;flex-direction:column'>";
        foreach($this->carrieres as $carriere)

        {
            echo "<span style='display:flex; flex-direction:column; gap:5px'>".$this->getequipe()." ".$carriere."<br>";
        }
        echo "</span></span></div><br>";
    }

    public function __toString()
    {
        return $this-> prenom . " " . $this->nom;
    }
}