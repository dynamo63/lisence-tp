<?php

// Si le dossier n'existe pas , on le cree
if (!file_exists("../stockage")) {
    mkdir("../stockage");
}

$nom = $_POST['name'];

// Validation du nom
if (strlen($nom) < 10) {
    //echo "<p> Votre nom doit comporter plus de 10 caracteres </p>";
    header("location:../pages/enregistrement.php?erreur=1");
    die();
}

// On genere le nom du fichier
$nomDuFichier = "liste-". date("dmY").".txt";

// Creation du fichier 
$monFichier = fopen("../stockage/$nomDuFichier", "a+");

// 
if ($monFichier === false) {
    header("location:../pages/enregistrement.php?erreur_serveur=1");
    die();
}
fputs($monFichier,"$nom;".date("H:i")."\n");
fclose($monFichier);


// Redirection vers l'accueil
header("location:../");
exit();
