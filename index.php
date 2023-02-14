<h1> Exercice POO Compte bancaire</h1>

<br>
On doit pouvoir :<br><br>
Afficher toutes  les  informations  d'un(e)  titulaire  (dont  l'âge)<br>
et  l'ensemble  des  comptes appartenant à celui(celle)-ci.<br>
<br>
Afficher  toutes  les  informations  d'un  compte  bancaire,  <br>
notamment  le  nom  /  prénom  du titulaire du compte.<br></p>


<h2> Résultat </h2>


<?php 

require "Titulaires.php";
require "Comptebancaire.php";

$T1 = new Titulaire('DUPONT', 'Jean','Paris', '12-12-1990');
$T2 = new Titulaire('DUCHEMIN', 'Christiane','Paris', '23-04-1985');
$C1 = new Comptebancaire( 'Compte Courant', $T1, '5000','€');
$C2 = new Comptebancaire( 'Compte Courant', $T2, '15000','€');
$C1A = new Comptebancaire( 'Compte Livret A', $T1, '30000','€');
$C2A = new Comptebancaire( 'Compte Livret A', $T2, '5000','€');

//Infos et Mouvements Comptes DUPONT : 

echo $T1-> InfoTitulaire() ."<br>";
echo $C1-> get_Infocompte()."<br>";
echo $C1A -> get_Infocompte()."<br>";
// echo$C1A-> debiter(99) ."<br>";
// echo$C1-> crediter(99)."<br>";
echo $C1 -> virement(1099,$C1A)."<br>";

// Infos Mouvements Comptes DUCHEMIN : 
echo $T2-> InfoTitulaire()."<br>";
echo $C2-> get_Infocompte()."<br>";

// $compteCourant->virement(50, $compteEpargne);