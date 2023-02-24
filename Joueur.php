<?php 

class Joueur 
{
    private string $nom;
    private string $prenom;
    private $anneeNaissance;
    private Pays $pays; 
    private array $carrieres;


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

    // public function getequipe()
    // {
    //     return $this ->equipe;
    // }

    // public function setequipe(Equipe $equipe)
    // {
    //     return $this ->equipe= $equipe;
    // }


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
    
        // echo "<div style='background-color:#74c55c;
        // color:white;
        // width:350px;
        // margin:0;
        // height:360px;padding:40px; margin:0;
        // border-radius:10px;
        //  display:flex; 
        //  flex-direction:column; 
        //  justify-content:space-arround'><div style='display:flex; 
        //  flex-direction:column'><strong style='font-size:30px'box-shadow:rgba(100, 100, 111, 0.2)0px 7px 29px 0px'> <span style='text-align:center;
        //  font-size:18px'><b>".$this." 
        //  <br>
        //  </strong><span style='font-size:20px'>".$this->pays." - ".$this->ageJoueur()." ans <br><br></span></div><div style='display:flex;
        //  flex-direction:column'>"; //! attention aux syntaxes quand on rjoute du csshtml dans le code php... 
        echo "<div style='color:#45523e; 
        background-color:#74c55c;
         margin:0; width:350px;
          height:360px;
           border-radius:10px;
            display:flex;
             flex-direction: column;
              justify-content: space-around;
               box-shadow:rgba(100, 100, 111, 0.2)0px 7px 29px 0px'> <span style='text-align:center;
                font-size:28px'><b>$this <br> ".$this-> pays. " - " .$this->ageJoueur(). " ans" ." </b></span><br><span style='font-size:14px;
                 text-align:center'>";

         
        foreach($this->carrieres as $carriere)

        {
            echo "<span style='font-size:20px'><br> ".$carriere->getequipe()." <br>";
        }
        echo "</span></span></div><br>";
    }

    public function __toString()
    {
        return $this-> prenom . " " . $this->nom;
    }
}