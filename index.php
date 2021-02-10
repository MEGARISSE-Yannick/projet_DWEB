<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
</head>
<body>
<?php 
    include('navbar.php');
?>
    
    <a href="login.php"> Déja un compte</a>

    <a href="new_login.php">Pas encore de compte</a> 

        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['utilisateur'] !== ""){
                    $user = $_SESSION['utilisateur'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
            
        </div>
        <img src="/var/www/your_domain/ProPro/electronix-removebg.png" alt="">

</body>
</html>