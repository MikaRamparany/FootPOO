<?php 

class Pays
{
    private string $nom;
    private array $equipes; 

    public function __construct($nom)
    {
        $this-> nom = $nom;
        $this-> equipes = [];
    
    }

    public function getNom ()
    {
        return $this -> nom;
    }

    public function setNom()
    {
        return  $this -> nom;
    }

    public function addEquipe (Equipe $equipe)
    { 
        $this -> equipes [] = $equipe;
    }

    public function infoPays ()
    {
        echo "<div style='color:#0a5d7b; 
        background-color:#c06464;
         margin:0; width:350px;
          height:360px;
           border-radius:10px;
            display:flex;
             flex-direction: column;
              justify-content: space-around;
               box-shadow:rgba(100, 100, 111, 0.2)0px 7px 29px 0px'> <span style='text-align:center;
                font-size:28px'><b>$this</b></span><br><span style='font-size:14px;
                 text-align:center'>";
                 
        foreach($this->equipes as $equipe)
        {
            echo "<span style='font-size:20px'><br> $equipe <br></span>";
        }
        echo "</span></span></div><br>";

    }
    public function __toString()
    {
        return $this-> nom;
    }
}