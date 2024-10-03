<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Augmenter la durée maximale d'exécution
set_time_limit(300);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'romdhanemalek59@gmail.com';
            $mail->Password   = 'lmbjzeyxdtrjuywy';  // Vérifie ton mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Option de désactivation SSL (pour tests uniquement)
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Expéditeur et destinataire
            $mail->setFrom($email, $name);
            $mail->addAddress('romdhanemalek59@gmail.com'); // Ton adresse email

            // Contenu du message
            $mail->isHTML(true);
            $mail->Subject = 'Nouveau message de ' . $name;
            $mail->Body    = "Message de <b>$name</b> (<a href='mailto:$email'>$email</a>):<br><br>$message";
            $mail->AltBody = "Message de $name ($email): $message";

            // Envoyer l'email
            $mail->send();
            header("Location:themes/theme-dust.php?message=10");
            exit;
        } catch (Exception $e) {
            echo "L'envoi a échoué. Erreur: {$mail->ErrorInfo}";
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
} else {
    echo "Méthode de requête non supportée.";
}
?>
