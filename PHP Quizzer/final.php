<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Quizzer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>You are done!</h2>
                <p>Congratulations! You have completted your test</p>
                <p>Final score: <?php echo $_SESSION['score']?></p>
                <a href="question.php?n=1" class="start">Try again?</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2018, PHP Quizzer
            </div>
        </footer>
    </body>
</html>
