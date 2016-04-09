<?php
require_once '../librairies/Mail.php';
$mail = new Mail ( array (
		'nom' => strip_tags ( $_POST ['name'] ),
		//'prenom' => strip_tags ( $_POST ['prenom'] ),
		'telephone' => stripcslashes ( $_POST ['honeyPot'] ),
		//'entreprise' => stripcslashes ( $_POST ['entreprise'] ),
		'email' => stripcslashes ( $_POST ['email'] ),
		//'object' => strip_tags ( $_POST ['.objet'] ),
		'message' => strip_tags ( $_POST ['message'] )
			
) );


print_r($mail);

ini_set ('SMTP', 'smtp.neuf.fr' );
//ini_set("display_errors",0);error_reporting(0);
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

/*
    $response = array( 'success' => false );
    $formData = file_get_contents( 'php://input' );
    $data = json_decode( $formData );
    print_r( $data);
   // print_r( $formData);
  //  if ( $data->submit && empty( $data->honeypot ) ) {
        $name = $data->name;
        $email = $data->email;
        $message = $data->message;

        echo $name;
        if ( $name != '' && $email != '' && $message != '' ) {
            $mailTo = 'tijoscarlos@gmail.com';
            $subject = 'New contact form submission';
            $body  = 'From: ' . $name . "\n";
            $body .= 'Email: ' . $email . "\n";
            $body .= "Message:\n" . $message . "\n\n";

            $success = mail( $mailTo, $subject, $body );

            if ( $success ) {
                $response[ 'success' ] = true;
            }
        }
  // }
*/
  //  echo json_encode( $response );
?>