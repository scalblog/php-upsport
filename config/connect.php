<?php
/*
$bdd = new PDO('mysql:host=http://mysql.hostinger.fr;dbname=u552546477_sport;charset=utf8', 'u552546477_sport', 'artichau76');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
*/

session_start();
$sqlHost     = 'mysql.hostinger.fr';         
$sqlUser     = 'u552546477_sport';            
$sqlPassword = 'artichau76';                
$dbName      = 'u552546477_sport';   

$bdd = new PDO('mysql:host='.$sqlHost.';dbname='.$dbName.';charset=utf8',$sqlUser,$sqlPassword) or die($bdd->errorInfo());


?>

