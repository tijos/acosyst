<?php 
 require_once '../librairies/DBFactory.class.php';
 $db = DBFactory::getMysqlConnexionWithPDO ();

/*
try
{
	// On se connecte � MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=acosyst;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arr�te tout
	die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

*/

// On r�cup�re tout le contenu de la table jeux_video
$reponse = $db->query('SELECT * FROM contenu ORDER BY id');

// On affiche chaque entr�e une � une
while ($donnees = $reponse->fetch())
{
	?>
    <p>
    <?php echo $donnees['apropos']; ?>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requ�te

?>