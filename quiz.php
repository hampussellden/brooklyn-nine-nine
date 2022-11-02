<?php require 'header.php'; ?>
<?php require 'data/quizData.php'; ?>
<main class="quiz">
    <h2>Quiz time</h2>
    <?php session_start() ?>
    <!-- Create a form with cards of questions and answers -->
    <form action="results.php" method="post">

        <!-- counter that acts like and index for the inner loop -->
        <?php $counter = 0; ?>
        <?php $inputN = 1; ?>
        <!-- this variable will be used to give each answered its own value, which it will carry over with the form and be used to assign points -->

        <!-- foreach loop generates questions -->
        <?php foreach ($questions as $question) : ?>
            <article class="question">
                <h3>Question #<?= $counter + 1 ?></h3>
                <h4> <?= $question ?></h4>
                <div class="answers">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div>
                            <input type="radio" class="answer" value="answer<?= $inputN ?>" id="answer<?= $inputN ?>" name="<?= $counter ?>">
                            <label for="answer<?= $inputN++; ?>"><?= $answers[$counter][$i] ?></label>
                        </div>
                    <?php endfor ?>
                    <?php $counter++; //We up the counter to make sure we pick the correct options with next iteration
                    ?>
                </div>
            </article>
        <?php endforeach ?>

        <input class="submit" type="submit" name="submitAnswers" value="Submit">
    </form>
</main>

<?php require 'footer.php';
