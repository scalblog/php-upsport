<?php

//Pour mettre à jour une activité de l'association

require('connect.php');
require('functions.php');
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
// var_dump($_POST['result']);
$new_result = sha1($_POST['result']);
// var_dump($new_result);

// $key= $bdd->prepare('SELECT motdepasse FROM rendezvous WHERE id= ?');
// $new_key = $key->execute(array($_POST['id_animation']));


$key = getPassword($POST['id_animation']);
var_dump($key);

$req = $bdd->prepare('UPDATE rendezvous SET categorie_animation = ?, id_animateur = ?, date_rendezvous = ?, heure_rendezvous = ?, lieu_rendezvous = ?, adresse_rendezvous = ?,  url_maps_rendezvous = ? WHERE id = ?');

// $req->execute(array(
// 	'id' => [$_POST['id_animation']],
// 	'categorie_animation' => [$_POST['id_animation']],
// 	'lieu_rendezvous' => [$_POST['local']]
// ));


$req->execute(array(htmlspecialchars($_POST['id_animation']), htmlspecialchars($_POST['animateur']), htmlspecialchars($_POST['date']), htmlspecialchars($_POST['hour']), htmlspecialchars($_POST['local']), htmlspecialchars($_POST['address']), htmlspecialchars($_POST['map']), htmlspecialchars($_POST['id_animation'])));



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

