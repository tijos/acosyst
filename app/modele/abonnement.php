<?php 

require_once '../librairies/DBFactory.class.php';
$db = DBFactory::getMysqlConnexionWithPDO ();

$email = $_POST['email'];

$requete = $db->prepare('INSERT INTO abonnement(email) VALUES(:mail)') or exit(print_r($bdd->errorInfo()));

$requete->execute(array(
		':mail' => $email
));


$msg = $requete->errorInfo();
echo $msg[0];
$requete->closeCursor();


?>