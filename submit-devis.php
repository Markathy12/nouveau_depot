<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Exemple d'envoi d'email
    $to = "votre-email@example.com";
    $subject = "Nouvelle demande de devis";
    $body = "Nom : $name\nEmail : $email";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre demande a été envoyée avec succès.";
    } else {
        echo "Une erreur s'est produite. Veuillez réessayer.";
    }
}
?>