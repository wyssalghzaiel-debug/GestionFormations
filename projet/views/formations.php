<?php require 'partials/header.php'; ?>

<section class="formations">

<h1 class="title">
Nos Formations
</h1>

<p class="subtitle">
Découvrez nos formations premium inspirées des meilleures plateformes e-learning.
</p>

<div class="cards">

<?php

$formations = [

[
"id"=>1,
"titre"=>"Intelligence Artificielle",
"prix"=>"299 DT",
"image"=>"https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200",
"description"=>"Machine Learning et Deep Learning."
],

[
"id"=>2,
"titre"=>"Data Science",
"prix"=>"249 DT",
"image"=>"https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200",
"description"=>"Analyse des données avec Python."
],

[
"id"=>3,
"titre"=>"Développement Web",
"prix"=>"199 DT",
"image"=>"https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200",
"description"=>"HTML, CSS, PHP, JavaScript."
],

[
"id"=>4,
"titre"=>"Cybersécurité",
"prix"=>"349 DT",
"image"=>"https://images.unsplash.com/photo-1510511459019-5dda7724fd87?q=80&w=1200",
"description"=>"Ethical hacking et sécurité."
],

[
"id"=>5,
"titre"=>"Développement Mobile",
"prix"=>"279 DT",
"image"=>"https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1200",
"description"=>"Flutter Android iOS."
],

[
"id"=>6,
"titre"=>"Cloud Computing",
"prix"=>"399 DT",
"image"=>"https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1200",
"description"=>"AWS Docker Kubernetes."
]

];

foreach($formations as $formation):

?>

<div class="card">

<div class="card-image">

<img
src="<?= $formation['image']; ?>"
alt="<?= $formation['titre']; ?>">

</div>

<div class="card-body">

<h2>
<?= $formation['titre']; ?>
</h2>

<p>
<?= $formation['description']; ?>
</p>

<div class="price">
<?= $formation['prix']; ?>
</div>

<div class="card-buttons">


<a
href="index.php?page=inscription&id=<?= $formation['id']; ?>"
class="btn">

S'inscrire à la formation

</a>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</section>

<?php require 'partials/ffooter.php'; ?>