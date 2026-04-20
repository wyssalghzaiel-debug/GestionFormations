<?php

$erreur = "";
  // Récupération des données
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifications

    if (empty($nom)) {
        $erreur .= "Le nom est obligatoire.<br>";
    }

    if (empty($prenom)) {
        $erreur .= "Le prénom est obligatoire.<br>";
    }

    if (empty($email)) {
        $erreur .= "L'email est obligatoire.<br>";
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur .= "Format email invalide.<br>";
    }

    // Affichage des erreurs ou succès

    if (!empty($erreur)) {
        echo "<div style='color:red;'>$erreur</div>";
    } else {
        echo "<div style='color:green;'>Formulaire validé </div>";
        echo "Nom : $nom <br>";
        echo "Prénom : $prenom <br>";
        echo "Email : $email";
    }

} else {
    echo "<div style='color:red;'>Accès invalide au fichier.</div>";
}

