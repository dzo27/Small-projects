<?php
include "database.php";

//start session
session_start();

//check to see if score is set
if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 0;
}


//check if question is submitted
if ($_POST) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];

    $next = $number + 1;

    //get total number of questions
    $query = "SELECT * FROM questions";
    //get result
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;

    //get correct choices
    $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";

    //get results
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //get row
    $row = $result->fetch_assoc();

    //get correct choice
    $correct_choice = $row['id'];

    //Compare to find if correct_choice
    if ($correct_choice == $selected_choice) {
        //Answer is correct
        $_SESSION['score'] ++;
    }

    //check if last question
    if ($number == $total) {
        header("Location: final.php");
        exit();
    }else {
        header("Location:  question.php?n=$next");
    }
}
