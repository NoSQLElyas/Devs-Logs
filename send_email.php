<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $destinataire = "damien.frappa.co@gmail.com";
    $sujet = "Nouveau message de la part de $nom";
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Email: $email\n\n";
    $corpsMessage .= "Message:\n$message";

    $headers = "From: $email\r\n";

    if (mail($destinataire, $sujet, $corpsMessage, $headers)) {
        echo "Votre message a été envoyé avec succès. Nous vous contacterons bientôt.";
    } else {
        echo "Désolé, une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
    }
}
?>