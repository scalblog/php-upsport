<?php

//Pour mettre à jour une activité de l'association

require('connect.php');
//$req = $bdd->prepare("UPDATE rendezvous SET lieu_rendezvous= :lieu_rendezvous WHERE id ='{$_POST['id']}'");
//$req = $bdd->prepare("UPDATE rendezvous SET lieu_rendezvous= :lieu_rendezvous WHERE id =:id");
/*$req->execute(array(

	//':lieu_rendezvous' => [$_POST['lieu_rendezvous']]
	'lieu_rendezvous' => $lieu_rendezvous,
	'id' => $id
	//':lieu_rendezvous' => $lieu_rendezvous
	//'lieu_rendezvous' => 'updated'
	
	));

*/

//$bdd->exec('UPDATE rendezvous SET lieu_rendezvous = "updated" WHERE id=8');

var_dump($_POST);

$req = $bdd->prepare('UPDATE rendezvous SET lieu_rendezvous = ?, id = 8 WHERE id = 8');
/*
$req->execute(array(
	'lieu_rendezvous' => [$_POST['local']],
	'id' => 8
));
*/
$req->execute([$_POST['local']]);



/*
$req->execute(array(
	'lieu_rendezvous' => $lieu_rendezvous,
	'id' => $id
));
*/


// Retour à la page d'accueil
//header('Location: ../index.php');
//exit();	

