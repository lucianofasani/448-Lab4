<?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    $quizCounter = 0;

    echo "<p>Question 1: How many Pokemon are there as of the 6th Generation (X and Y)?</p>";
    echo "<p>You answered: $q1</p>";
    echo "<p>Correct answer: 721</p><br><br>";

    echo "<p>Question 2: What is Pikachu's favorite condiment?</p>";
    echo "<p>You answered: $q2</p>";
    echo "<p>Correct answer: Ketchup</p><br><br>";

    echo "<p>Question 3: What is the first Pokemon Ash catches in the TV series?</p>";
    echo "<p>You answered: $q3</p>";
    echo "<p>Correct answer: Caterpie</p><br><br>";

    echo "<p>Question 4: How many total Eeveelutions are there as of the newest gen?</p>";
    echo "<p>You answered: $q4</p>";
    echo "<p>Correct answer: 8</p><br><br>";

    echo "<p>Question 5: Which gen had 16 gyms?</p>";
    echo "<p>You answered: $q5</p>";
    echo "<p>Correct answer: Gold/Silver</p><br><br>";

    if($q1 == "721"){
        $quizCounter++;
    }

    if($q2 == "Ketchup"){
        $quizCounter++;
    }

    if($q3 == "Caterpie"){
        $quizCounter++;
    }

    if($q4 == "8"){
        $quizCounter++;
    }

    if($q5 == "Gold/Silver"){
        $quizCounter++;
    }

    $quizScore = $quizCounter * 20;

    echo "You got $quizCounter/5 correct!<br>";
    echo "Your final score is: $quizScore%";
?>