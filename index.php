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
$C3 = new Comptebancaire( 'Compte Livret A', $T1, '30000','€');
$C4 = new Comptebancaire( 'Compte Livret A', $T2, '5000','€');


echo $C1-> get_Infocompte();


// $compteCourant->virement(50, $compteEpargne);