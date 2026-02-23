<?php
$nom = "AYARI";
$prenom = "Asma";
$email = "asma.ayari@email.com";
$age = 30;
$ville="Tunis";
$formation="Développement Web";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Profil utilisateur</title>
</head>

<body>

<h1>Profil utilisateur</h1>

<div class="container">
  <p><strong>Nom :</strong> AYARI</p>
  <p><strong>Prénom :</strong> Asma</p>
  <p><strong>Email :</strong> asma.ayari@email.com</p>
  <p><strong>Âge :</strong> 30 ans</p>

  <?php
  echo "<p>Bienvenue $prenom dans la formation $formation</p>";
  ?>
</div>

</body>
</html>