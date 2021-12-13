<?php
require "selection.php" ;
// echo    "laquelle de ces marques vient de ce pays: ",$country," ?","<br>",$responses[0],"<br>",$responses[1],"<br>",$responses[2],"<br>",$responses[3],"<br>","la bonne reponse est ",$goodResponse["Brand"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <title>Quiz</title>
  <link href="./style.css" rel="stylesheet">

</head>

<body>

  <div class="container">
    <div id="quiz">
      <h1>Quiz</h1>

      <h2 id="question"></h2>
        
      <h3 id="score"></h3>

      <div class="choices">
        <button id="guess0" class="btn">        
          <p id="choice0"></p>
        </button>

        <button id="guess1" class="btn">
          <p id="choice1"></p>
        </button>
          
        <button id="guess2" class="btn">
          <p id="choice2"></p>
        </button>
          
        <button id="guess3" class="btn">
          <p id="choice3"></p>
        </button>
      </div>

      <p id="progress"></p>

    </div>
  </div>
   
  
</body>



</html>
