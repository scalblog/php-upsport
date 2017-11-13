<?php

	if(!isset($_GET['id']) OR !is_numeric($_GET['id'])) {
		header('Location: index.php');
	}
	else 
	{
		extract($_GET);
		$id = strip_tags($id);

		require_once('config/functions.php');

		$activity = getActivity($id);

	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planning pour <?= $activity->id ?> </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" /> 
</head>
<body class="container-fluid">
	<h1><?= $activity->animation ?> du <?= $activity->date_rendezvous ?></h1> 
	<p>Activité : <?= $activity->animation ?></p>
	<p>Animé par : <?= $activity->benevole ?></p>
	<p>Date de l'activité annoncée sur l'application : <?= $activity->date_rendezvous ?></p>
	<p>Heure de l'activité annoncée sur l'application : <?= $activity->heure_rendezvous ?></p>
	<p>Lieu de rendez-vous : <?= $activity->lieu_rendezvous ?></p>
	<p>Adresse indiquée : <?= $activity->adresse_rendezvous ?></p>
	<p><a href="<?= $activity->url_maps_rendezvous ?>" target="_blank" >Lien vers Google Maps</a></p>
	<p><a href="index.php">Retour au sommaire principal</a></p>
	<div>
		<!--<img src="img/card<?= $key ?>.jpg" alt="sport-<?= $key ?>"> -->
	</div>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</body>
</html>