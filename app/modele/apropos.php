<?php 
 require_once '../librairies/DBFactory.class.php';
 $db = DBFactory::getMysqlConnexionWithPDO ();

/*
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=acosyst;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

*/

// On récupère tout le contenu de la table jeux_video
$reponse = $db->query('SELECT * FROM contenu ORDER BY id');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	?>
    <p>
    <?php echo $donnees['apropos']; ?>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>