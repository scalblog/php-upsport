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
	  <!--<img class="card-img-top" src="https://theheadofthehammer.files.wordpress.com/2013/10/real_waikato.jpg&width=634" alt="Card image cap"> -->
	  <img class="card-img-top" src="img/card<?= $key ?>.jpg" alt="sport-<?= $key ?>">
	  
    <h2 class="card-title"><?= $activity->animation ?></h2>
    <p class="card-text">Lieu de l'activité :<?= $activity->lieu_rendezvous ?></p>
    <p class="card-text">Rendez-vous le :<?= $activity->date_rendezvous ?></p>
    <p class="card-text">A <?= $activity->heure_rendezvous?> précises</p>
    <p class="card-text">Adresse détaillée du point de rendez-vous :</p>
    <p class="card-text"><?= $activity->adresse_rendezvous ?></p>
	<?php 
	if (isset($activity->url_maps_rendezvous)){
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
		<p>Mentions légales</p>
	</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>