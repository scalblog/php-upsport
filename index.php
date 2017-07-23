<?php
	require_once('config/functions.php');

	$rendezvousList = getRendezvous();	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>UpSport : plannificateur</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h1>UpSport : Plannifions les événements<br/>visibles sur l'application mobile<br/>UP Unis Pour le Sport</h1>
	<?php foreach ($rendezvousList as $activity): ?>
		<h2><?= $activity->lieu_rendezvous ?></h2>
		<p><?= $activity->adresse_rendezvous ?></p>
		
	<?php endforeach; ?>
</body>
</html>