<?php

require "init.php" ;

// Test de l'envoi du formulaire
if(!empty($_POST)) 
{
  if(!empty($_POST['login']) && !empty($_POST['password'])){
      $profil= $_POST['login'];
      $pass=$_POST['password'];

      $query = $codb->query("SELECT PseudoUtil FROM `utilis` WHERE LoginUtil = '$profil' AND PassUtil = '$pass' ");
      $pseudo = $query->fetchColumn();

      

      if (empty($pseudo)){
        echo "Profil ou mot de pass erroné n'existe pas" ;
      }
      else
      {
        
        // On enregistre le login en session
        $_SESSION['pseudo'] = $pseudo;
        echo "bienvenu ",$_SESSION['pseudo'];
        header('Location: index.php');
      } 
    }
    else
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
      <legend>Identifiez-vous</legend>
     <p>
        <label for="login">Login :</label> 
        <input type="text" name="login" id="login" value="" />
      </p>
      <p>
        <label for="password">Password :</label> 
        <input type="password" name="password" id="password" value="" /> 
        <input type="submit" name="submit" value="Se logguer" />
      </p>
    </fieldset>
  </form>
  <a href="inscription.php">Pas encore de compte? inscrivez vous</a>
</body>
</html>