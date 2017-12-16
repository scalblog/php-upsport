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

// var_dump($_POST);
// var_dump($_POST['local']);
// var_dump($_POST['id_animation']);
var_dump($_POST['result']);

$req = $bdd->prepare('UPDATE rendezvous SET categorie_animation = ?, id_animateur = ?, date_rendezvous = ?, heure_rendezvous = ?, lieu_rendezvous = ?, adresse_rendezvous = ?,  url_maps_rendezvous = ? WHERE id = ?');

// $req->execute(array(
// 	'id' => [$_POST['id_animation']],
// 	'categorie_animation' => [$_POST['id_animation']],
// 	'lieu_rendezvous' => [$_POST['local']]
// ));

$req->execute(array($_POST['id_animation'], $_POST['animateur'], $_POST['date'], $_POST['hour'], $_POST['local'], $_POST['address'], $_POST['map'], $_POST['id_animation']));



/*
$req->execute([$_POST['local']]);
*/


/*
$req->execute(array(
	'lieu_rendezvous' => $lieu_rendezvous,
	'id' => $id
));
*/


// Retour à la page d'accueil
// header('Location: ../index.php');
// exit();	

