<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisence</title>
    <link rel="stylesheet" href="../public/assets/css/enregistrement.css">
</head>
<body>
    
    <main class="container">
        <p class="alert-message <?= isset($_GET['erreur']) ? "visible": ""; ?>">
            <span>Oops!</span> Veuillez renseigner votre nom. <?php echo "Pardon!"?>
        </p>    
        <h1>Lisence</h1>
        <form action="../traitements/enregistrement.php" method="POST">
            <legend>Veuillez renseigner votre nom complet</legend>
            <div class="input-field">
                <input type="text" class="input-text" name="name" placeholder="Entrez votre nom complet" />
                <input type="submit" class="input-button" value="VALIDER" />
            </div>
        </form>

        <div class="footer">
            <a href="../" class="footer-link">Retour a la liste</a>
        </div>
    </main>

</body>
</html>