<?php
require "init.php" ;
try{
    $query = $codb->query("SELECT CountryId FROM country ");
    $result = $query -> fetchall(PDO::FETCH_ASSOC);

    $goodKey = rand(1,count($result)); // séléction de clé de selection


    $query = $codb->query("SELECT Brand FROM carbrand WHERE BrandId = $goodKey");
    $result = $query -> fetchall(PDO::FETCH_ASSOC);

    $goodResponse = $result[rand(0,count($result)-1)]; // séléction de la bonne reponse
    $responses = array();
    array_push($responses,$goodResponse["Brand"]); // mise en place de la liste reponses 

    $query = $codb->query("SELECT Brand FROM carbrand WHERE BrandId != $goodKey");
    $result = $query -> fetchall(PDO::FETCH_ASSOC);

    $k = array();
    for ($i = 0; $i <= 2; $i++){
        do{
            $j = rand(0,count($result)-1);
        }while(in_array($j,$k));
        array_push($k,$j);
        array_push($responses,$result[$j]["Brand"]); // séléction des mauvaises réponses
    } 
    $k= null;
    $j= null;


    $query = $codb -> query("SELECT CountryName FROM carbrand INNER JOIN country WHERE BrandId =CountryId AND Brand = \"$responses[0]\" ");
    $result = $query -> fetch(PDO::FETCH_ASSOC);
    $country =$result["CountryName"];   // séléction du pays
    shuffle($responses);  // randomise les reponses  

    $query = $codb -> query("SELECT Score,Compte,Moyenne,MaxScore FROM utilis WHERE PseudoUtil = '". $_SESSION['pseudo']."'");
    $result = $query -> fetch(PDO::FETCH_ASSOC);

    $score =$result["Score"];
    $Moyenne=$result["Moyenne"];
    $MaxScore=$result["MaxScore"];
    $partiesfini=$result["Compte"];
    

}
catch(PDOException $e)
{
  echo "Message d'erreur : " .$e->getMessage(). "<br />";
}
?>
