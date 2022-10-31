<?php require 'header.php'; ?>
<?php require 'functions.php' ?>
<main class="results-page">
    <section class="results-presentation">

        <h2>Quiz results</h2>
        <?php $totalPoints = getPoints($_POST); //Get the total score from our form
        ?>

        <h3>You scored <?= $totalPoints ?> points</h3>
        <p><?= evaluation($totalPoints) ?></p>

    </section>
</main>
<?php require 'footer.php';
