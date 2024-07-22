<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
          <div class="current">Question 1 of 5</div>  
          <p class="question">
            What does PHP stand for?
          </p>
          <form action="process.php" method="post">
            <ul class="choices">
                <li><input type="radio" name="choice" value="1">PHP: Hypertext Preprocessor</li>
                <li><input type="radio" name="choice" value="1">PHP: Priveate Home Page</li>
                <li><input type="radio" name="choice" value="1">PHP: Personal Home Page</li>
                <li><input type="radio" name="choice" value="1">PHP: Personal Preprocessor</li>
            </ul>
            <input type="submit" value="Submit">
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