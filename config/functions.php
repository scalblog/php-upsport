<?php

// Pour récupérer le planing complet avec toutes les activités
function getRendezvous()
{
	require('config/connect.php');
	$req = $bdd->prepare('SELECT * FROM rendezvous 
		JOIN benevoles ON id_animateur = benevoles.id_benevole
		JOIN animations ON categorie_animation = animations.id_animation 
		ORDER BY date_rendezvous');
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();

}


// Pour récupérer toutes les infos d'une activité planifiée
function getActivity($id)
{
	require('config/connect.php');
	$req = $bdd->prepare('SELECT * FROM rendezvous 
		JOIN benevoles ON rendezvous.id_animateur = benevoles.id_benevole
		JOIN animations ON rendezvous.categorie_animation = animations.id_animation 
		WHERE id = ?');
	$req->execute(array($id));
	if($req->rowCount() == 1)
	{
		$data = $req->fetch(PDO::FETCH_OBJ);
		return $data;
	}
	else 
	{
		header('Location: header.php');
	}
}


//Pour récupérer la liste des animateurs de l'association
function getAnimator(){
	require('config/connect.php');
	$req = $bdd->prepare('SELECT * FROM benevoles');
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();
}

//Pour vérifier le mot de passe associé à une des activités

function getPassword($id){
	require('connect.php');
	$req= $bdd->prepare('SELECT motdepasse FROM rendezvous WHERE id= ?');
	$req->execute(array($id));
	$key = $req->fetch(PDO::FETCH_OBJ);
	return $key;
	var_dump( $key);
}