<php>
  <!-- Ce fichier servira comme fichier main du projet de page web -->
</php>
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma petite page PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            padding: 8px;
            width: 80%;
        }
        input[type="submit"] {
            padding: 8px 16px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenue sur ma page PHP</h1>

    <p>Nous sommes le <?php echo date("d/m/Y"); ?> et il est <?php echo date("H:i:s"); ?></p>

    <hr>

    <h2>Dites-moi votre nom</h2>

    <form method="post">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nom'])) {
        $nom = htmlspecialchars($_POST['nom']); // Sécurise l'entrée
        echo "<p>Bonjour, <strong>$nom</strong> ! Ravi de vous voir ici 😊</p>";
    }
    ?>
</div>

</body>
</html>
