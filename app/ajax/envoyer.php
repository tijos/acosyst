<?php 


require_once 'librairies/PHPMailerAutoload.php';

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['msg'])) {

	//check if any of the inputs are empty
	if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['objet']) || empty($_POST['msg'])) {
		$data = array('success' => false, 'message' => 'Please fill out the form completely.');
		echo json_encode($data);
		exit;
	}

	//create an instance of PHPMailer
	$mail = new PHPMailer();

	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['nom'];
	$mail->AddAddress('tijoscarlos@gmail.com'); //recipient
	$mail->Subject = $_POST['objet'];
	$mail->Body = "Name: " . $_POST['nom'] . "\r\n\r\nMessage: " . stripslashes($_POST['msg']);

	if (isset($_POST['ref'])) {
		$mail->Body .= "\r\n\r\nRef: " . $_POST['ref'];
	}

	if(!$mail->send()) {
		$data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
		echo json_encode($data);
		exit;
	}

	$data = array('success' => true, 'message' => 'Thanks! We have received your message.');
	echo json_encode($data);

} else {

	$data = array('success' => false, 'message' => 'Please fill out the form completely.');
	echo json_encode($data);

}


//if (isset ( $_POST ['nom'] )) {
/*
	$mail = new Mail ( array (
			'nom' => strip_tags ( $_POST ['nom'] ),
			'prenom' => strip_tags ( $_POST ['prenom'] ),
			'telephone' => stripcslashes ( $_POST ['telephone'] ),
			'email' => stripcslashes ( $_POST ['email'] ),
			'object' => strip_tags ( $_POST ['object'] ),
			'message' => strip_tags ( $_POST ['message'] )
	) );
	*/
	// print_r($membre);
/*
    $nom ="titi";
    $prenom ="carlos";
    $emailfrom ="titi@yahoo.fr";

	//if ($mail->isValid ()) {
		ini_set ( 'SMTP', 'smtp.sfr.fr' );
		// print_r($mail);
		$email = 'tijoscarlos@gmail.com'; // Déclaration de l'adresse de destination.
		if (! preg_match ( "#^[a-z0-9._-]+@(hotmail|live|msn|gmail|yahoo).[a-z]{2,4}$#", $email )) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		} else {
			$passage_ligne = "\n";
		}

		$message_txt = "Bonjour hahaha";
		$sujet = $mail->object ();

		$header = 'From: "' . $nom . ' ' . $prenom. '"<' . $emailfrom. '>' . $passage_ligne;
		$header .= 'Reply-to: "' . $nom. ' ' . $prenom. '" <' . $emailfrom. '>' . $passage_ligne;
		$header .= "MIME-Version: 1.0" . $passage_ligne;
		$message = $passage_ligne . $message_txt . $passage_ligne;

		// =====Envoi de l'e-mail.

		try {
			mail ( $email, $sujet, $message, $header );
			$resultat = '<img alt="" src="static/images/ok2.png">Le message a &#233;t&#233; bien envoy&#233;. Nous allons vous r&#233;pondre d&#232;s que possible';
		} catch ( Exception $ex ) {
			$resultat = 'Erreur d\'envoie' . $ex->getMessage ();
		}
		
		echo $resultat;
		
		*/
	/*} else {
		// $erreurs = $membre->erreurs ();
		$resultat = "message non valide";
	}*/
//}




















?>