<?php require 'header.php'; ?>
<?php require 'data/quizData.php'; ?>

<h2>Quiz time</h2>
<?php session_start() ?>
<!-- Create a form with cards of questions and answers -->
<form action="results.php" method="post">

    <?php
    //counter that acts like and index for the inner loop
    $counter = 0;
    $inputN = 1; //this variable will be used to give each answered its own value, which it will carry over with the form and be used to assign points

    //foreach loop generates questions
    foreach ($questions as $question) : ?>
        <article class="question">
            <h3> <?= $question ?></h3>
            <div class="answers">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <input type="radio" class="answer" value="answer<?= $inputN++; ?>" name="<?= $counter ?>"> <?= $answers[$counter][$i] ?>
                <?php endfor ?>
                <?php $counter++; //We up the counter to make sure we pick the correct options with next iteration
                ?>
            </div>
        </article>
    <?php endforeach ?>

    <input class="submit" type="submit" name="submitAnswers">
</form>

<?php require 'footer.php';
