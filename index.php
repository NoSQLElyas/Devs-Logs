<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
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
</head>
<body>
    <header>
        <h1>'NoSQL Devs-Logs</h1>
        <?php
        // Vérifier si l'utilisateur est connecté
        $utilisateurConnecte = true; // Remplacez ceci par votre logique d'authentification
        
        if ($utilisateurConnecte) {
            // L'utilisateur est connecté, n'afficher aucun lien
        } else {
            // L'utilisateur n'est pas connecté, afficher le lien de connexion
            echo '<li><a href="<link>connexion.php</link>">Connexion</a></li>';
        }
        ?>
    </header>
    <nav>
        <ul>
            <li><a href="dev-logs.php">Dev-Logs</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section>
        <h2>Bienvenue sur notre site !</h2>
        <p>C'est un plaisir de vous accueillir.</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> 'NoSQL Devs-Logs</p>
    </footer>
</body>
</html>