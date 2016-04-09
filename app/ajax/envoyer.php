
<?php 

require_once '../librairies/class.phpmailer.php';
require_once '../librairies/PHPMailerAutoload.php';
require_once '../librairies/Mail.php';

if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['msg'])) {

	//check if any of the inputs are empty
	/*if (empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['.objet']) || empty($_POST['msg'])) {
		$data = array('success' => false, 'message' => 'Please fill out the form completely.');
		echo json_encode($data);
		exit;
	}
*/
	//create an instance of PHPMailer
	/*$mail = new PHPMailer();

	$mail->From = $_POST['mail'];
	$mail->FromName = $_POST['nom'];
	$mail->AddAddress('tijoscarlos@gmail.com'); //recipient
	$mail->Subject = $_POST['prenom'];
	$mail->Body = "Name: " . $_POST['nom'] . "\r\n\r\nMessage: " . stripslashes($_POST['msg']);

	if (isset($_POST['ref'])) {
		$mail->Body .= "\r\n\r\nRef: " . $_POST['ref'];
	}
*/

	$mail = new Mail ( array (
			'nom' => strip_tags ( $_POST ['nom'] ),
			'prenom' => strip_tags ( $_POST ['prenom'] ),
			'telephone' => stripcslashes ( $_POST ['tel'] ),
			'entreprise' => stripcslashes ( $_POST ['entreprise'] ),
			'email' => stripcslashes ( $_POST ['mail'] ),
			//'object' => strip_tags ( $_POST ['.objet'] ),
			'message' => strip_tags ( $_POST ['msg'] )
			
	) );
	
	print_r($mail);
	
	
	if ($mail->isValid ()) {
		ini_set ('SMTP', 'smtp.neuf.fr' );
		ini_set("display_errors",0);error_reporting(0);
		// print_r($mail);
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
				$resultat = '<img alt="" src="../static/images/autres/erreur.png">Le message n\'a  pas &#233;t&#233; envoy&#233;. Nous allons r&eacute;soudre le probl&egrave;me d&egrave;s que possible';
			}
			} catch ( Exception $ex ) {
			$resultat = 'Erreur d\'envoie' . $ex->getMessage ();
		}
	} else {
		// $erreurs = $membre->erreurs ();
		$resultat = "message non valide";
	}
	
	echo $resultat;
	
}
// 	if(!$mail->send()) {
// 		$data = array('success' => false, 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
// 		echo json_encode($data);
// 		exit;
// 	}

// 	$data = array('success' => true, 'message' => 'Thanks! We have received your message.');
// 	echo json_encode($data);

/*} else {

	$data = array('success' => false, 'message' => 'Please fill out the form completely.');
	echo json_encode($data);

}

*/
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