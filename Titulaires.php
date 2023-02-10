<?php

Class Titulaire {

    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private int $_dateNaissance;
    private $allcomptes;

public function __construct (string $_nom , string $_prenom , string $_ville ,string $_dateNaissance, $allcomptes) 
    {

    $this->_nom = $_nom;
    $this->_prenom = $_prenom;
    $this->_dateNaissance = new datetime ($_dateNaissance);
    $this->_ville = $_ville;
    $this->allcomptes = [];
    }


}