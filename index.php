<?php
require "selection.php" ;
echo    "laquelle de ces marques vient de ce pays: ",$country," ?","<br>",$responses[0],"<br>",$responses[1],"<br>",$responses[2],"<br>",$responses[3],"<br>","la bonne reponse est ",$goodResponse["Brand"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>OnlineFormaQuiz</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <h2> header</h2>
            <ul class="menu">
                <li><a href="">quiz</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">equipe</a></li>
            </ul>
        </header>
        <main>
            <h2>main</h2>
        </main>
        <section>
            <h2>section</h2>
            <form action='quiz.php' method='post'>
                <?php
                    
                    
                    echo "Prét a commencer le quiz ?";
                    echo "<button name='quiz' value='",$quizOrder[0],"'> Allons y!</button>";
                ?>
            </form>
            <!-- <form action="php/init.php" method="post">
                    <input type="checkbox" id="verification" name="verification">
            </form>
 -->
            
        </section>
        <footer>
            <h2>footer</h2>
        </footer>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </div>

</body>

</html>