<?php require 'views/partials/header.php'; ?>

<?php

$cours = [

1 => [
"Introduction au Machine Learning",
"Deep Learning avec Python",
"Réseaux de neurones",
"Vision par ordinateur",
"Projet IA réel"
],

2 => [
"Python pour Data Science",
"Pandas & NumPy",
"Visualisation avec Matplotlib",
"Machine Learning",
"Analyse de données réelles"
],

3 => [
"HTML & CSS",
"JavaScript Moderne",
"PHP & MySQL",
"React JS",
"Projet Full Stack"
],

4 => [
"Introduction à la cybersécurité",
"Ethical Hacking",
"Sécurité réseaux",
"Tests de pénétration",
"Protection des systèmes"
],

5 => [
"Flutter & Dart",
"Développement Android",
"Développement iOS",
"Firebase Mobile",
"Projet application mobile"
],

6 => [
"Introduction au Cloud",
"AWS Cloud",
"Microsoft Azure",
"Docker & Kubernetes",
"Déploiement Cloud"
]

];

?>

<section class="course-page">

<div class="course-left">

<h1>

<?= htmlspecialchars($formation['titre']); ?>

</h1>

<p>

<?= htmlspecialchars($formation['description']); ?>

</p>

<div class="infos">

<span>

Durée : <?= htmlspecialchars($formation['duree']); ?>

</span>

<span>

Niveau : <?= htmlspecialchars($formation['niveau']); ?>

</span>

</div>

<h2>

Cours inclus dans cette formation

</h2>

<ul>

<?php

if(isset($cours[$formation['id']])){

foreach($cours[$formation['id']] as $cours_item){

echo "<li>$cours_item</li>";

}

}

?>

</ul>

<a
href="index.php?page=inscription"
class="btn">

S'inscrire maintenant

</a>

</div>

</section>

<?php require 'views/partials/ffooter.php'; ?>