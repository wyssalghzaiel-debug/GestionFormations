<?php require 'views/partials/header.php'; ?>

<section class="payment-section">

    <div class="payment-card">

        <h1>
            Paiement sécurisé
        </h1>

        <h2>
            <?= $inscription['formation_titre'] ?>
        </h2>

        <p class="price">

            <?= $inscription['prix'] ?> DT

        </p>


        <form method="POST">

            <button
            type="submit"
            name="mode"
            value="ok">

                Paiement réussi

            </button>

        </form>

    </div>

</section>

<?php require 'views/partials/ffooter.php'; ?>