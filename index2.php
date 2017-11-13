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
	<h1>UpSport : Plannifions les événements<br/>visibles sur l'application mobile<br/>UP Unis Pour le Sport</h1>
	<img src="/img/logo.png">
	<?php foreach ($rendezvousList as $activity): ?>
		<h2><?= $activity->lieu_rendezvous ?></h2>
		<p><?= $activity->adresse_rendezvous ?></p>
		<a href="activite.php?id=<?= $activity->id ?>">Voir le détail de cette activité / Modifier</a>
		<hr>
	<?php endforeach; ?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>