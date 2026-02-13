<?php
class Personne
{
    private $nom;
    private $prenom;
    private $age;
    function __construct($nom,$prenom,$age){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getAge(){
        return $this->age;
    }
    function setNom($nom){
        $this->nom=$nom;
    }
    function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    function setAge($age){
        if($age>0){
            $this->age=$age;
        }else{
            echo "L'age doit etre positif";
        }
        }
    function sePresenter(){
        echo "Bonjour, je m'appelle ". $this->nom ."  ".$this->prenom. " et j'ai ".$this->age. " ans.";
    }
    function __toString(){
        return "Personne : Nom : ".$this->nom.", Prénom : ".$this->prenom.", Âge : ".$this->age."ans.";
    }
    }
    
    //Exemple d'utilisation
    $p= new Personne("Dabo", "Malick",23);
    echo $p->sePresenter();
    $p->setNom("Mbaye");
    echo "<br>";
    echo $p->sePresenter();
    echo "<br><br>";
    $p->getPrenom();
    $p->setPrenom("El Hadji");
    echo $p->__toString();
    ?>

