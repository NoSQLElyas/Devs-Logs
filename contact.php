<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: #f2f2f2;
            color: #333;
            padding: 1rem;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 10px;
        }
        section {
            padding: 2rem;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
</style>
<body>
    <h1>Contactez-nous</h1>
    <form action="send_email.php" method="post">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom"><br>
        <label for="email">E-mail :</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message :</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>