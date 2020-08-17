<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisence</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css" />
</head>
<body>

    <main>
        <h1>Lisence</h1>

        <div class="header">
            <time datetime="2020-08-13">Liste de presence du <?= date("j/m/Y") ?></time>
            <a class="button" href="pages/enregistrement.php">S'enregister</a>
        </div>

        <?php 
            $nom_du_fichier = "liste-". date("dmY").".txt";
            $mon_fichier = fopen("stockage/$nom_du_fichier", "r");

            // Si le fichier n'existe pas , on affiche un message 
            if (!$mon_fichier) {
        ?>
            <p>Aucun Apprenant enregistre aujourd'hui </p>
        <?php
                // On arrete d'executer le code qui suit !!
                die();
            }
            $compteur = 0;
            $eleves = [];
            // echo fgets($mon_fichier);
            while (!feof($mon_fichier)) {
                $ligne = fgets($mon_fichier);
                $compteur++;
                array_push($eleves, $ligne);
                // $array = explode(";", $ligne);
                // echo "<p> $array[0] - $array[1] </p>";
            }
            array_pop($eleves);
            // die();
        ?>

        <!-- Liste des apprenants -->
        <table>
            <!-- entete du tableau -->
            <thead>
                <tr>
                    <th>Noms (<?= count($eleves) ?> au total)</th>
                    <th>Heure d'arrivee</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach ($eleves as $eleve) {
                        list($nom , $heure) = explode(";", $eleve);
                        echo "<tr><td> $nom </td><td> $heure </td></tr>";
                    }
                ?>
            </tbody>
        </table>

        <footer class="footer">
            <a href="#" class="btn-secondary">
               <i class="fa fa-download" aria-hidden="true"></i> Imprimer la liste
            </a>
        </footer>

    </main>
    
    <script type="text/javascript">
        
        let bouton = document.querySelector(".btn-secondary");
        //on cree un evenement click sur le bouton
        bouton.onclick = e =>{
            e.preventDefault();
            window.print();   
        }
    </script>

</body>
</html>