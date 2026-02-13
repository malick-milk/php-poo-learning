<?php 
class Produits
{
    private $id;
    private static $compteur=0;
    private $nom;
    private $prix;
    const TVA = 0.18;
    public function __construct($nom, $prix){
        self::$compteur++;
        $this->nom=$nom;
        $this->prix=$prix;
        $this->id=self::$compteur;
    }
    public function afficherproduit(){
        echo "Nom du produit: ".$this->nom. "; Prix du produit : " .$this->prix. "; Identifiant de l'article : ".$this->id;
    }
    public function getNom(){
         return $this->nom;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function calculeTVA(){
        return $this->prix + ($this->prix*self::TVA);
    }
    public function __toString()
    {
        return "id ".$this->id. "Nom du produit ". $this->nom. "Prix : ".$this->prix;
    }
}
//Exemple d'utilisation
$produit1 = new Produits("Ordinateur", 1000);
$produit2 = new Produits("Souris gamer",10000);
$produit3 = new Produits("Clavier gamer",12000);
$produit1->afficherproduit();
echo "<br>";
$produit2->afficherproduit();
echo "<br>";
$produit3->afficherproduit();
echo "<br>";
$produit3->__toString();
?>