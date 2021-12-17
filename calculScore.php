<?php
    require "selection.php" ;
    
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
    <?php

    $codb -> query("UPDATE utilis
    SET Score ='". ($score+$_SESSION['scoreFinal'])."'
    WHERE PseudoUtil  ='". $_SESSION['pseudo']."'");

    if($MaxScore<$_SESSION['scoreFinal']){
        $codb -> query("UPDATE utilis
        SET MaxScore ='". $_SESSION['scoreFinal']."'
        WHERE PseudoUtil  ='". $_SESSION['pseudo']."'");
    }
        $partiesfini++;
        $codb -> query("UPDATE utilis
        SET Compte ='". $partiesfini ."'
        WHERE PseudoUtil  ='". $_SESSION['pseudo']."'");

        $codb -> query("UPDATE utilis   
        SET Moyenne ='". (($score+$_SESSION['scoreFinal'])/$partiesfini) ."'
        WHERE PseudoUtil  ='". $_SESSION['pseudo']."'");
    
        header('Location: acceuil.php');
    ?>
    <a href="index.php">AGAIN!</a>
</body>
</html>