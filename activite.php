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
		$hosts = getAnimator();
	}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planning pour <?= $activity->animation ?> </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" /> 
</head>
<body class="container-fluid">
	<h1><?= $activity->animation ?> du <?= date('d m Y', strtotime($activity->date_rendezvous)) ?></h1> 
	<form action="" method="POST">
		<table>
			<tr>
				<td>L'activité :</td>
				<td><?= $activity->animation ?></td>
			</tr>
			<tr>
				<td>normalement animée par :</td>
				<td><?= $activity->benevole ?></td>
			</tr>
			<tr>
				<td>sera finalement animée par :</td>
				<td>
					<select id="host">
					<?php foreach ($hosts as $key => $host): ?>
						<option value="valeur<?php $key?>"><?= $host->benevole ?></option>
					<?php endforeach; ?>	
					</select>
				</td>
			</tr>			
			<tr>
				<td><label for="date" >Date de l'activité annoncée :</label></td>
				<td><input id="date" type="date" name="date" value="<?= $activity->date_rendezvous ?>"></td>
			</tr>			
			<tr>
				<td><label for="hour">Heure de l'activité annoncée :</label></td>
				<td><input id="hour" type="time" name="hour" value="<?= $activity->heure_rendezvous ?>"></td>
			</tr>
			<tr>
				<td>Nom du Lieu de rendez-vous :</td>
				<td><textarea name="local" rows="2" cols="50"><?php echo (isset($activity->lieu_rendezvous))?$activity->lieu_rendezvous:'';?></textarea></td>
			</tr>
			<tr>
				<td>Adresse indiquée :</td>
				<td><textarea name="address" rows="4" cols="50"><?php echo (isset($activity->adresse_rendezvous))?$activity->adresse_rendezvous:'';?></textarea></td>
			</tr>
			<tr>
				<td>Editer le lien<br>vers Google Maps</td>
				<td><textarea name="address" rows="6" cols="50"><?php echo (isset($activity->adresse_rendezvous))?$activity->url_maps_rendezvous:'';?></textarea></td>
			</tr>
			<tr>
				<td>Saisissez le mot de passe<br>pour enregistrer les modifications</td>
				<td><input type"text" name="result" value = ""><input id="enregistrer" type="submit" value="Enregistrer les modifications"></td>
			</tr>																		
		</table>
		<p><strong><a href="index.php">Retour au sommaire principal</a></strong></p>
	</form>	
	<div>
	<img class="card-img-top" src="img/<?= $activity->image ?>" alt="sport-paris-<?= $activity->category_animation ?>">
		<!--<img src="img/card<?= $key ?>.jpg" alt="sport-<?= $key ?>"> -->
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>