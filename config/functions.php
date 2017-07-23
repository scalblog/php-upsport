<?php

function getRendezvous()
{
	require('config/connect.php');
	$req = $bdd->prepare('SELECT * FROM rendezvous ORDER BY date_rendezvous');
	$req->execute();
	$data = $req->fetchAll(PDO::FETCH_OBJ);
	return $data;
	$req->closeCursor();

}