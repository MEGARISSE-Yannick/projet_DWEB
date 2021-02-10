<?php
session_start();
if(isset($_POST['utilisateur']) && isset($_POST['mot_de_passe']))
{
    // connexion à la base de données
    $db_utilisateur = 'Root';
    $db_mot_de_passe = 'Simplon974';
    $db_name     = 'electronix';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_utilisateur, $db_mot_de_passe,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $utilisateur = mysqli_real_escape_string($db,htmlspecialchars($_POST['utilisateur'])); 
    $mot_de_passe = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe']));
    
    if($utilisateur !== "" && $mot_de_passe !== "")
    {
        $requete = "SELECT count(*) FROM connexion where 
              nom_utilisateur = '".$utilisateur."' and mot_de_passe = '".$mot_de_passe."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['utilisateur'] = $utilisateur;
           header('Location: index.php');
        }
        else
        {
           header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}


mysqli_close($db); // fermer la connexion
?>