<?php
    require "selection.php" ;
    if(empty($_SESSION['pseudo'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de pseudo
  header('Location: login.php');
  exit();
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
<div class="container">
<?php
    require "quit.php" ;
    ?>
    <?php

    echo "<br> Ton meilleur score est ".$MaxScore;
    echo "<br> Tu as fait ". $partiesfini." parties";
    echo "<br> Ta moyenne est ".$Moyenne;
    echo "<br> Ton score total est ".$score."<br>";

    echo "Bravo ",$_SESSION['pseudo']," tu as fini, ton score est ",$_SESSION['scoreFinal'],", prét a recommencer ?<br>";
    $tryAgain = array("AGAIN!","YEAH!","LET'S DO A LITTLE MORE!","PLEASE!","I'LL STOP WHEN I'M DEAD!","I'M UNSTOPPABLE!");
    echo "<a href=\"index.php\"> ". $tryAgain[rand(0,count($tryAgain)-1)] ." </a>" ;
    ?>
</div>
</body>
</html>