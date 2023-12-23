<?php
// Initialisation de la session
session_start();

// Configuration de l'application <link>Discord</link> (vous devez créer une application <link>Discord</link> sur le portail des développeurs <link>Discord</link>)
$clientID = '1166057412466327683';
$clientSecret = 'barpv5KIl_moEUvyZoBjnAEewxLsSQmY';
$redirectURI = ''; // Par exemple, http://votre-site.com/connexion.php

// Étape 1 : Redirection vers l'URL d'authentification <link>Discord</link>
if (!isset($_GET['code'])) {
    $authorizationUrl = 'https://discord.com/api/oauth2/authorize?client_id='.$clientID.'&redirect_uri='.urlencode($redirectURI).'&response_type=code&scope=identify';
    header('Location: '.$authorizationUrl);
    exit;
}

// Étape 2 : Échange du code d'autorisation contre un jeton d'accès
if (isset($_GET['code'])) {
    $tokenURL = 'https://discord.com/api/oauth2/token';

    $postData = [
        'client_id' => $clientID,
        'client_secret' => $clientSecret,
        'grant_type' => 'authorization_code',
        'code' => $_GET['code'],
        'redirect_uri' => $redirectURI,
    ];

    $ch = curl_init($tokenURL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $tokenResponse = curl_exec($ch);
    curl_close($ch);

    $tokenData = json_decode($tokenResponse, true);

    // Étape 3 : Utilisation du jeton d'accès pour obtenir les informations de l'utilisateur
    $userURL = 'https://discord.com/api/users/@me';

    $ch = curl_init($userURL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer '.$tokenData['access_token']
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $userResponse = curl_exec($ch);
    curl_close($ch);

    $userData = json_decode($userResponse, true);

    // Affichage des informations de l'utilisateur
    echo 'ID utilisateur : '.$userData['id'].'<br>';
    echo 'Nom d\'utilisateur : '.$userData['username'].'#'.$userData['discriminator'].'<br>';
    echo 'Email : '.$userData['email'].'<br>';
    echo 'Avatar : <img src="https://cdn.discordapp.com/avatars/'.$userData['id'].'/'.$userData['avatar'].'.png" alt="Avatar">';
}
?>