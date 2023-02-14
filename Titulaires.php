<?php

Class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private  datetime $_dateNaissance;
    public array $allcomptes;

public function __construct (string $_nom , string $_prenom , string $_ville ,string $_dateNaissance) 
    {

    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = new datetime ($_dateNaissance);
    $this->_ville = $_ville;
    $this->allcomptes = [];
    }

    //Getters
    public function get_nom()
    {
        return $this->_nom;
    } 

    public function get_prenom ()
    {
        return $this->_prenom;
    } 

    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function get_ville()
    {
        return $this->_ville;
    }

    public function getallcomptes()
    {
        $this-> allcomptes;
    }

    
    //setters 

    public function set_nom($_nom)
    {
         $this->_nom=$_nom;
    } 

    public function set_prenom($_prenom)
    {
         $this->_prenom=$_prenom;
    } 

    public function set_dateNaissance($_DateNaissance)
    {
         $this->_dateNaissance=$_DateNaissance;
    }

    public function set__ville($_ville)
    {
         $this->_ville=$_ville;
    }
    public function setallcomptes()
    {
        $this-> allcomptes;
    }

    
// Fin getters et setters


// CRÉATION DE FONCTIONS POUR POUVOIR "L'ensemble des comptes d'un titulaire et son âge" COMME DEMANDÉ DANS L'EXERCICE. 

public function showComptes()
    {
        $result = "Le(s) compte(s) du titulaire : <br>";
        // echo  "Liste Comptes du titulaire";
    foreach ($this->allcomptes as $Compte) {
        $result .= $Compte;
        }
      
    return $result; 
    
    }

public function get_AGE()
    { //formule prise de l'exercice 15 exo php partie 1 

  $DateToday= new DateTime();

  $result = $this->_dateNaissance->diff($DateToday);
    return $result-> format('%y ans.');
    
    }

    public function InfoTitulaire ()
    {
        $result = " ***********Information Titulaire du Compte********** <br>".
            "Nom du titulaire : ".$this->_nom."<br>".
            "Prénom du titulaire : ".$this->_prenom."<br>".
            "Ville : " .$this->_ville."<br>".
            " Age du Titulaire: " .$this-> get_AGE()."<br>".
            "  <br>".$this-> showComptes (). " <br> ";
        return $result;
    }

    // public function __toString() // Permet d'afficher les public function via ECHO sur la feuille INDEX.php
    // {
    //   $result = $this -> showComptes().$this->InfoTitulaire() .$this->get_AGE() ."<br>";
    //   return $result;
    // }

}