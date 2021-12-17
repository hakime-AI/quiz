<?php

require "init.php" ;

// Test de l'envoi du formulaire
if(!empty($_POST)) 
{
  if(!empty($_POST['login_inscription']) && !empty($_POST['password_inscription']) && !empty($_POST['pseudo_inscription']))
    {
        $pseudo_inscription= $_POST['pseudo_inscription'];
        $profil_inscription= $_POST['login_inscription'];
        $pass_inscription=$_POST['password_inscription'];

        if($query = $codb->query("SELECT PseudoUtil FROM `utilis` WHERE PseudoUtil = '$pseudo_inscription'")){
            $verification = $query->fetchColumn();
        }
        if(empty($verification)){
            echo "c'est bon vous étes enregistrer";
            $query = $codb->query(" INSERT INTO utilis(LoginUtil, PassUtil,PseudoUtil) 
            VALUES ('$profil_inscription', '$pass_inscription','$pseudo_inscription')");
        }else{

        }
        
        

    }else
        {
        $errorMessage = 'Veuillez inscrire vos identifiants svp !';
        }
        
    

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
  <title>Formulaire d'authentification</title>
  <link href="./style.css" rel="stylesheet">
</head>
<body>
    
    
        

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <legend>Inscrivez-vous</legend>
      <p>
        <label for="pseudo_inscription">Pseudo :</label> 
        <input type="text" name="pseudo_inscription" id="pseudo_inscription" value="" />
      </p>
     <p>
        <label for="login_inscription">Login :</label> 
        <input type="text" name="login_inscription" id="login_inscription" value="" />
      </p>
      <p>
        <label for="password_inscription">Password :</label> 
        <input type="password" name="password_inscription" id="password_inscription" value="" /> 
        <input type="submit" name="submit" value="S'inscrire" />
      </p>
    </fieldset>
  </form>
  <a href="login.php">Déjà un compte? connectez vous</a>
</body>
</html>