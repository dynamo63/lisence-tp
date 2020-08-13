<?php

$nom = $_POST['name'];

// Validation du nom
if (strlen($nom) < 10) {
    echo "<p> Votre nom doit comporter plus de 10 caracteres </p>";
    die();
}

// 
$nomDuFichier = "liste-". date("dmY").".txt";

$monFichier = fopen("../stockage/$nomDuFichier", "a+");
fputs($monFichier,"$nom;".date("H:i")."\n");
fclose($monFichier);

header("location:../");
exit();
