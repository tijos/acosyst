<?php 
require_once '../librairies/Mail.php';

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['tel']) && isset($_POST['msg'])) {
	$resultat ='OK';
	$mail = new Mail ( array (
			'nom' => strip_tags ( $_POST ['nom'] ),
			'prenom' => strip_tags ( $_POST ['prenom'] ),
			'telephone' => stripcslashes ( $_POST ['tel'] ),
			'email' => stripcslashes ( $_POST ['email'] ),
			'entreprise' => stripcslashes ( $_POST ['entreprise'] ),
			//'object' => strip_tags ( $_POST ['.objet'] ),
			'message' => strip_tags ( $_POST ['msg'] )
				
	) );
	
	//print_r($mail);
	
	if ($mail->isValid ()) {
		ini_set ('SMTP', 'smtp.neuf.fr' );
		ini_set("display_errors",0);error_reporting(0);
		
		$email = 'tijoscarlos@gmail.com'; // Déclaration de l'adresse de destination.
		if (! preg_match ( "#^[a-z0-9._-]+@(hotmail|live|msn|gmail|yahoo).[a-z]{2,4}$#", $email )) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		} else {
			$passage_ligne = "\n";
		}
	
		$message_txt = $mail->message ();
		$sujet = $mail->object ();
	
		$header = 'From: "' . $mail->nom () . ' ' . $mail->prenom () . '"<' . $mail->email () . '>' . $passage_ligne;
		$header .= 'Reply-to: "' . $mail->nom () . ' ' . $mail->prenom () . '" <' . $mail->email () . '>' . $passage_ligne;
		$header .= "MIME-Version: 1.0" . $passage_ligne;
		$message = $passage_ligne . $message_txt . $passage_ligne;
	
		// =====Envoi de l'e-mail.
	
		try {
			if(mail ( $email, $sujet, $message, $header )){
				$resultat = '<img alt="" src="../static/images/autres/ok2.png">Le message a &#233;t&#233; bien envoy&#233;. Nous allons vous r&#233;pondre d&#232;s que possible';
			}else{
				$resultat = '<img alt="" src="../static/images/autres/erreur.png">Le message n\'a pas &#233;t&#233; envoy&#233;.Veillez &eacute;essayer plus tard';
			}
		} catch ( Exception $ex ) {
			$resultat = '<img alt="" src="../static/images/autres/erreur.png"> Erreur d\'envoie' . $ex->getMessage ();
		}
	} else {
		// $erreurs = $membre->erreurs ();
		$resultat = '<img alt="" src="../static/images/autres/erreur.png"> Message non valide';
	}
	
	echo $resultat;
}