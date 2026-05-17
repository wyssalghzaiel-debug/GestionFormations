<?php require 'partials/header.php'; ?>

<section class="success-page">

<div class="success-box">

<h1>
Paiement réussi
</h1>

<p>
Votre accès premium est activé.
</p>

<a
href="index.php?page=cours&id=<?= $_SESSION['formation_id']; ?>"
class="btn">

Accéder aux cours

</a>

</div>

</section>

<?php require 'partials/ffooter.php'; ?>