<?php 

$email = $_POST['email'];

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=acosyst;charset=utf8', 'root', 'admin');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$requete = $bdd->prepare('INSERT INTO abonnement(email) VALUES(:mail)') or exit(print_r($bdd->errorInfo()));

$requete->execute(array(
		':mail' => $email
));


$msg = $requete->errorInfo();
echo $msg[0];
$requete->closeCursor();


?>