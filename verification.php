<?php
require_once('./db.php');
require_once('./fonctions.php');
session_start();

if(isset($_POST['email']) && isset($_POST['mdp']))
{
    // connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "1234", "webmemo_1");
    // contre les injections SQL
    $email = mysqli_real_escape_string($connexion, htmlspecialchars(($_POST['email'])));
    $mdp = mysqli_real_escape_string($connexion, htmlspecialchars(($_POST['mdp'])));

    if($email !== "" && $mdp !== "")
    {
        $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);  
        $query = "SELECT count(*) FROM utilisateurs WHERE email = '".$email."' and mdp ='".$mdp."' ";
        $req = $pdo->prepare($query);
        $req->execute([$_POST['email'], password_hash($_POST['mdp'], PASSWORD_BCRYPT)]);
        // email et mdp trouvé
        $count = $req->fetch();
        if($count!=0)
        {
            $_SESSION['email'] = $email;
            header('location:index.php');
        } else {
            header('location:'); // mot de passe incorrect ou compte inexistant
        }        
    } else {
        // champs vide
    }
} else {
    header('location:connexion.php');    
}

mysqli_close($connexion);