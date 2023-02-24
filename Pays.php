<?php 

class pays
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
        echo "<div style='background-color:lightcoral;color:white;width:360px;height:360px;padding:40px;display:flex;flex-direction:column;justify-content:space-between'><strong style='font-size:30px'>$this</strong><div style='display:flex;flex-direction:column'>";
        foreach($this->equipes as $equipe)
        {
            echo "<span style='font-size:15px'>$equipe</span>";
        }
        echo "</div><div style='    display:flex;flex-direction:column'>";

    }
    public function __toString()
    {
        return $this-> nom;
    }
}