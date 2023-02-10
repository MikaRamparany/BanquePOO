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
    $this->_soldeinitial = $_soldeinitial;
    $this->_devise = $_devise;
  
    }

    //Getters
    public function get_libelle()
    {
        return $this->_libelle;
    } 

    public function get_titulaire()
    {
        return $this->_titulaire;
    } 

    public function get_soldeinitial()
    {
        return $this->_soldeinitial;
    }

    public function get_devise()
    {
        return $this->_devise;
    }
    
    //setters 

    public function set_libelle($libelle)
    {
         $this->_libelle=$libelle;
    } 

    public function set_titulaire($titulaire)
    {
         $this->_titulaire=$titulaire;
    } 

    public function set_soldeinitial($soldeinitial)
    {
         $this->_soldeinitial=$soldeinitial;
    }

    public function set_devise($devise)
    {
         $this->_devise=$devise;
    }
    
// Fin getters et setters
// 


}