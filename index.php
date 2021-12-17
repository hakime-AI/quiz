<?php

require "selection.php" ;

// On prolonge la session

// On teste si la variable de session existe et contient une valeur
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
    <title>Quiz</title>
  <link href="./style.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <?php
    require "quit.php" ;
    ?>
    <div id="quiz">
      <h1>Quiz</h1>

      <h2 id="question"></h2>
        
      <h3 id="score"></h3>
<?php
if(empty($_SESSION['compte'])){
  $_SESSION['scoreActuel']=0;
  $_SESSION['compte']=1;
}
    
    // Ici on est bien loggué, on affiche un message
    echo 'Bienvenue ', $_SESSION['pseudo'],"<br>";
    
    echo "<form action='index.php' id='formulaire' class='choices' method='post'> ";
      echo "<br>",$country,"<br>";
  
      echo "<button id='guess0' class='btn' name='response' value='",$responses[0],"'><p id='choice0'>",$responses[0],"</p></button>";
      echo "<button id='guess1' class='btn' name='response' value='",$responses[1],"'><p id='choice1'>",$responses[1],"</button>";
      echo "<button id='guess2' class='btn' name='response' value='",$responses[2],"'><p id='choice2'>",$responses[2],"</button>";
      echo "<button id='guess3' class='btn' name='response' value='",$responses[3],"'><p id='choice3'>",$responses[3],"</button>";
      
    echo "</form>";
    

    if(!empty($_POST['response'] )){
      
      $_SESSION['compte']++;
      if($_SESSION['goodresponse']==$_POST['response']){
        $_SESSION['scoreActuel']++;
      }
      if($_SESSION['compte']>3){
        $_SESSION['compte']=null;
        $_SESSION['scoreFinal']=$_SESSION['scoreActuel'];
        $_SESSION['scoreActuel']=0;
   
        header('Location: calculScore.php');
      } 
    }

    
    $_SESSION['goodresponse']=$goodResponse['Brand'];
    





    echo "Petit tips: ",$_SESSION['goodresponse']." ;) <br>";
    echo " vous etes a la question ",$_SESSION['compte']." sur 10";
    echo " score Actuel : ",$_SESSION['scoreActuel']," ";
    ?>
<p id="progress"></p>

</div>
</div>
</body>

<script>
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>

</html>
