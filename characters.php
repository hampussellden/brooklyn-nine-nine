<?php require_once 'header.php'; ?>
<?php require 'data/charactersArray.php'; ?>
<?php require 'data/actorsArray.php'; ?>
<main>
    <h2> Characters in the show:</h2>
    <section class="cards">
        <?php shuffle($characters); ?>
        <?php foreach ($characters as $character) : ?>
            <article class="card">
                <div class="card-top">
                    <img src="<?= $character['photo'] ?>" alt="<?= $character['name'] ?>">
                    <div class="card-title">
                        <h3><?= $character['occupation'] . '. ' . $character['name'] ?></h3>
                        <h4><?= $character['actor'] ?></h4>
                    </div>
                </div>
                <p><?= $character['description'] ?></p>
            </article>
        <?php endforeach ?>
    </section>
</main>
<?php require 'footer.php'; ?>
