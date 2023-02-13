<?php

Class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private  datetime $_dateNaissance;
    private $allcomptes;

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
    
    //setters 

    public function set_nom($_nom)
    {
         $this->_nom=$_nom;
    } 

    public function set_prenom($_prenom)
    {
         $this->_prenom=$_prenom;
    } 

    public function set_dateNaissance($_dateNaissance)
    {
         $this->_dateNaissance=$_dateNaissance;
    }

    public function set__ville($_ville)
    {
         $this->_ville=$_ville;
    }
    
// Fin getters et setters


// CRÉATION DE FONCTIONS POUR POUVOIR "L'ensemble des comptes d'un titulaire et son âge" COMME DEMANDÉ DANS L'EXERCICE. 

    public function AgeActuelle()
    {
        
    $Dateactuelle = new DateTime();
    $result =  $this -> _dateNaissance -> diff ($Dateactuelle);
    return $result-->  ("%Y ans ");
    }

    public function InfoTitulaire ()
    {
        $result = " Information Titulaire du Compte <br>".
            "Nom du titulaire : ".$this->_nom."<br>".
            "Prenom du titulaire : ".$this->_prenom."<br>".
            "Ville : " .$this->_ville."<br>";
            " Age : ".$this->AgeActuelle();
            " Le(s) compte(s) du titulaire : ".$this-> allcomptes. " <br> ";
        return $result;
    }


}