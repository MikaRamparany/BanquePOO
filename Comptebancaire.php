<?php

class Comptebancaire {

    private string $_libelle;
    private string $_titulaire;
    private int $_soldeinitial;
    private float $_devise;
    
    public function __construct (string $_libelle, string $_titulaire , string $_soldeinitial ,float $_devise) 
    {

    $this->_libelle = $_libelle;
    $this->_titulaire = $_titulaire;
    $this->_soldeinitial = new datetime ($_soldeinitial);
    $this->_devise = $_devise;
  
    }
    

}

}