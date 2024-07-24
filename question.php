<?php include 'database.php' ?>
<?php include 'header.php' ?>
<?php
// Set question number
$number = (int) $_GET['n'];

// Get Question

$query = "SELECT * FROM `questions` WHERE question_number = $number";


// Get result
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);


$question = $result->fetch_assoc();

// Get Choices

$query = "SELECT * FROM `choices` WHERE question_number = $number";


// Get results
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

// $question = $result->fetch_assoc();
?>

<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $question['question_number']; ?> of 5</div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <?php while ($row = $choices->fetch_assoc()) : ?>
                        <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text'] ?></li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" value="Submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>">
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2022, PHP Quizzer
        </div>
    </footer>
</body>

</html>