<?php
    echo "<form action=".$pageActuel." id='formulaire' class='choices' method='post'> ";
        

        echo "<button id='guess0' class='btn' name='quit' value='quit'><p id='choice0'> Déconnéction </p></button>";

        echo "</form>";
        if(isset($_POST['quit']) && $_POST['quit']=='quit' ){
          session_unset();
          header('Location: login.php');
        }
    ?>