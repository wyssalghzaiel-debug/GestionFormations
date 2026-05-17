<?php require 'partials/header.php'; ?>

<?php



$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

/* =====================================
FORMATIONS
===================================== */

$formations = [

1 => [
"titre"=>"Intelligence Artificielle",
"prix"=>"299 DT",
"image"=>"https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200"
],

2 => [
"titre"=>"Data Science",
"prix"=>"249 DT",
"image"=>"https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200"
],

3 => [
"titre"=>"Développement Web",
"prix"=>"199 DT",
"image"=>"https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200"
],

4 => [
"titre"=>"Cybersécurité",
"prix"=>"349 DT",
"image"=>"https://images.unsplash.com/photo-1510511459019-5dda7724fd87?q=80&w=1200"
],

5 => [
"titre"=>"Développement Mobile",
"prix"=>"279 DT",
"image"=>"https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1200"
],

6 => [
"titre"=>"Cloud Computing",
"prix"=>"399 DT",
"image"=>"https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1200"
]

];

/* =====================================
VERIFICATION FORMATION
===================================== */

if(!isset($formations[$id])){

echo "<h1>Formation introuvable</h1>";

require 'partials/ffooter.php';

exit();

}

$formation = $formations[$id];

/* =====================================
COURS PAR FORMATION
===================================== */

$cours = [

1 => [

[
'titre'=>'Introduction Machine Learning',
'description'=>'Découverte des bases de l’IA.',
'video'=>'https://www.youtube.com/watch?v=aircAruvnKk',
'pdf'=>'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'
],

[
'titre'=>'Deep Learning',
'description'=>'Réseaux neuronaux avec Python.',
'video'=>'https://www.youtube.com/watch?v=6M5VXKLf4D4',
'pdf'=>'https://www.orimi.com/pdf-test.pdf'
]

],

2 => [

[
'titre'=>'Python Data Science',
'description'=>'Analyse de données avec Python.',
'video'=>'https://www.youtube.com/watch?v=LHBE6Q9XlzI',
'pdf'=>'https://www.africau.edu/images/default/sample.pdf'
],

[
'titre'=>'Pandas & NumPy',
'description'=>'Manipulation des données.',
'video'=>'https://www.youtube.com/watch?v=vmEHCJofslg',
'pdf'=>'https://www.clickdimensions.com/links/TestPDFfile.pdf'
]

],

3 => [

[
'titre'=>'HTML & CSS',
'description'=>'Introduction au développement web.',
'video'=>'https://www.youtube.com/watch?v=G3e-cpL7ofc',
'pdf'=>'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'
],

[
'titre'=>'JavaScript Moderne',
'description'=>'Les bases du JavaScript.',
'video'=>'https://www.youtube.com/watch?v=W6NZfCO5SIk',
'pdf'=>'https://www.orimi.com/pdf-test.pdf'
],

[
'titre'=>'PHP & MySQL',
'description'=>'Créer des sites dynamiques.',
'video'=>'https://www.youtube.com/watch?v=zZ6vybT1HQs',
'pdf'=>'https://www.africau.edu/images/default/sample.pdf'
]

],

4 => [

[
'titre'=>'Introduction Cybersécurité',
'description'=>'Sécurité informatique moderne.',
'video'=>'https://www.youtube.com/watch?v=inWWhr5tnEA',
'pdf'=>'https://www.clickdimensions.com/links/TestPDFfile.pdf'
]

],

5 => [

[
'titre'=>'Flutter Mobile',
'description'=>'Créer des applications mobiles.',
'video'=>'https://www.youtube.com/watch?v=1ukSR1GRtMU',
'pdf'=>'https://www.orimi.com/pdf-test.pdf'
]

],

6 => [

[
'titre'=>'AWS Cloud',
'description'=>'Introduction au cloud computing.',
'video'=>'https://www.youtube.com/watch?v=ulprqHHWlng',
'pdf'=>'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf'
]

]

];

?>

<section class="premium-course">

<div class="course-header">

<div>

<div class="course-badge">
Formation Premium
</div>

<h1>
<?= $formation['titre']; ?>
</h1>

<p>
Formation complète avec vidéos,
PDF et exercices pratiques.
</p>

<div class="course-meta">

<span>⭐ 4.9</span>

<span>👨‍🎓 1200 étudiants</span>

<span>📚 25 modules</span>

</div>

</div>

<div class="course-image">

<img
src="<?= $formation['image']; ?>"
alt="<?= $formation['titre']; ?>">

</div>

</div>

<div class="course-content">

<!-- LEFT -->

<div class="content-box">

<h2>
Contenu du cours
</h2>

<?php foreach($cours[$id] as $lesson): ?>

<div class="lesson-box">

<div class="lesson-left">

<h3>
<?= $lesson['titre']; ?>
</h3>

<p>
<?= $lesson['description']; ?>
</p>

</div>

<div class="lesson-actions">

<?php if(isset($_SESSION['paiement_ok']) && $_SESSION['paiement_ok'] == true): ?>

<a
href="<?= $lesson['video']; ?>"
target="_blank"
class="watch-btn">

Vidéo

</a>

<a
href="<?= $lesson['pdf']; ?>"
target="_blank"
class="pdf-download">

PDF

</a>

<?php else: ?>

<a
href="index.php?page=paiement&id=<?= $id; ?>"
class="watch-btn">

Débloquer

</a>

<?php endif; ?>

</div>

</div>

<?php endforeach; ?>

</div>

<!-- RIGHT -->

<div class="sidebar-card">

<div class="price">

<?= $formation['prix']; ?>

</div>

<?php if(isset($_SESSION['paiement_ok']) && $_SESSION['paiement_ok'] == true): ?>

<div class="buy-course-btn success-btn">

Accès autorisé

</div>

<?php else: ?>

<a
href="index.php?page=inscription&id=<?= $id; ?>"
class="buy-course-btn">

Acheter maintenant

</a>

<?php endif; ?>

<ul>

<li>✔ Accès illimité</li>
<li>✔ Certificat</li>
<li>✔ Vidéos HD</li>
<li>✔ PDFs Premium</li>
<li>✔ Support formateur</li>

</ul>

</div>

</div>

</section>

<?php require 'partials/ffooter.php'; ?>