<?php
	require_once('config/functions.php');

	$rendezvousList = getRendezvous();	
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UpSport : plannificateur</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css" type="text/css" /> 
</head>
<body class="container-fluid">
	<main>
	
	<h1>UpSport :<br>Planning des prochaines activités</h1>
	<div class="text-center">
		<img src="/img/logo.png" alt="association-sport-paris-15">
	</div>
	<?php foreach ($rendezvousList as $key => $activity): ?>

		<div class="card">
	 	   <img class="card-img-top" src="img/<?= $activity->image ?>" alt="sport-<?= $key ?>">
	  
			<h2 class="card-title text-success"><?= $activity->animation ?></h2>
			<p class="card-text"><i class="material-icons">map</i> Lieu de l'activité : <bold><?= $activity->lieu_rendezvous ?></bold></p>
			<p class="card-text"><i class="material-icons">today</i> Rendez-vous le : <bold><?= date('d m Y', strtotime($activity->date_rendezvous)) ?></bold></p>
			<p class="card-text"><i class="material-icons">alarm</i> A <bold><?= date('H \h m', strtotime($activity->heure_rendezvous))?></bold> précises</p>
			<p class="card-text"><i class="material-icons">contacts</i> C'est <?= $activity->benevole ?> qui coordonnera cet atelier.</p>
			<?php 
			if (isset($activity->email) && $activity->email != ""){
				?>
				<p class="card-text"><i class="material-icons">contact_mail</i> <a	href="mailto:<?= $activity->email ?>">Contacter  <?= $activity->benevole ?> par email</a></p>
				<?php
				}

				?>
			<p class="card-text"><i class="material-icons">map</i> Adresse détaillée du point de rendez-vous :</p>
			<p class="card-text"><?= $activity->adresse_rendezvous ?></p>
			<?php 
			if (isset($activity->url_maps_rendezvous) && $activity->url_maps_rendezvous != ""){
				?>
				<p class="card-text"><a	href="<?= $activity->url_maps_rendezvous ?>" target="_blank">Ouvrir le point de rendez-vous dans Google Maps</a></p>
				<?php
			}
			?>
			<a href="activite.php?id=<?= $activity->id ?>" class="btn btn-success">Modifier ce rendez-vous</a>
		</div>
	<?php endforeach; ?>
	</main>
	<footer class="text-center">

		
		<!-- Button trigger modal -->
		<button type="button" class="btn" data-toggle="modal" data-target="#myModal" aria-hidden="true">
			Mentions légales
		</button>
		<p class="text-center">Site codé avec <i class="material-icons">favorite_border</i> par <a href="https://pascal-geay.fr" target"_blank">Pascal Geay</a></p>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Mentions légales</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Ce site n'exploite pas les cookies<br>ni les données personnelles des internautes.</p>
						<p>Vous voilà parfaitement tranquilles.</p>
						<p>Si besoin, vous pouvez contacter le webmaster via <a href="https://pascal-geay.fr/#contact" target="_blank">son site web</a>.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer la fenêtre</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>