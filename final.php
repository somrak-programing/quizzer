<?php include 'header.php' ?>
<?php session_start(); ?>
<?php session_destroy(); ?>

<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
          <h2>You're Done!</h2>
          <p>Congrats! You have completed the Test</p>
          <p>Final Score: <?php echo $_SESSION['score']; ?></p>
          <a href="question.php?n=1" class="start">Take Again</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &copy; 2022, PHP Quizzer
        </div>
    </footer>
</body>
</html>