<?php require_once 'header.php'; ?>
<?php require 'data/charactersArray.php'; ?>
<h2> Characters in the show:</h2>

<section class="cards">
    <?php shuffle($characters); ?>
    <?php foreach ($characters as $character) : ?>
        <article class="card">
            <div class="card-top">
                <img src="<?= $character['photo'] ?>" alt="<?= $character['name'] ?>">
                <div class="card-title">
                    <h2><?= $character['name'] ?></h2>
                    <h3><?= $character['actor'] ?></h3>
                </div>
            </div>
            <p><?= $character['description'] ?></p>
        </article>
    <?php endforeach ?>
</section>
<?php require 'footer.php'; ?>
