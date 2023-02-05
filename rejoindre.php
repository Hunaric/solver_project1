
        
<!-- CODE PHP START -->
<?php 
session_start();
require('./header.php'); 
require('./popus.php'); 
?>
<!-- CODE PHP END -->



<section class="contact-section section_padding">
    <div class="container">
   
    <div class="row">
        <div class="col-12" >
        <h1 style="font-family: 'Poppins', sans-serif; margin: 30px 0; margin-top: 100px; text-align: justify;">Devenez publieur sur Webmemo</h1>
        <p style="font-family: 'Poppins', sans-serif; margin: 30px 0;">Rentabiliser vos documents et sujets d'études dès maintenant.</p>
        </div>

        <div class="col-lg-8">
            <form class="form-contact contact_form" action="" method="post">

            <!-- CODE PHP START -->
            <?php
            require_once('./db.php');
            require_once('./fonctions.php');

                if(!empty($_POST))
                {
                    $errors = [];
                    
                    // Verification du NOM
                    if(empty($_POST['nom']) /*|| !preg_match("#^[a-zA-Z]+$#", $_POST['nom'])*/)
                    {
                        $errors['nom'] = "Votre nom n'est pas valide";
                        var_dump($errors['nom']);
                    }
                    else
                    {
                        //RECHERCHER DES DOUBLONS DU NOM DANS LA BASE DE DONNEE
                        $query = "SELECT * FROM utilisateurs WHERE nom = ?";
                        $req = $pdo->prepare($query);
                        $req->execute([$_POST['nom']]);
                        if($req->fetch())
                        {
                            $errors['nom'] = "Il existe déjà un compte à ce nom";
                        }
                    }

                    // Verification du EMAIL
                    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                    {
                        $errors['email'] = "Veuillez mettre un email valide";
                        var_dump($errors['email']);
                    }
                    else
                    {
                        //RECHERCHER DES DOUBLONS DANS LA BASE DE DONNEE
                        $query = "SELECT * FROM utilisateurs WHERE email = ?";
                        $req = $pdo->prepare($query);
                        $req->execute([$_POST['email']]);
                        if($req->fetch())
                        {
                            $errors['email'] = "Il existe déjà un compte avec cet email";
                        }
                    }
                  
                    // Verification du MOT DE PASSE
                    if(empty($_POST['mdp']) || $_POST['mdp'] !== $_POST['mdp1'])
                    {
                        $errors['mdp'] = "Votre mot de passe n'est pas valide ou mal retapez.";
                        var_dump($errors['mdp']);
                    }
                    else
                    {

                    }

                    if(!empty($errors))
                    {
                        $query = "INSERT INTO utilisateurs(nom,email,mdp,activation_token) VALUES (?,?,?,?)";
                        $req = $pdo->prepare($query);
                        $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);               

                        $token = generateToken(100);
                        $req->execute([$_POST['nom'],$_POST['email'],$mdp,$token]);
                        $userId = $pdo->lastInsertId();

                        $mail = $_POST['email'];
                        $subject = "Confirmation de compte";
                        $message = "Confirmer votre compte webmemo en cliquant sur ce lien\n\n
                                    http://127.0.0.1/Webmemo/confirm.php?id=$userId&token=$token";

                        mail($mail, $subject, $message);

                        $_SESSION['flash']['success'] = "Votre compte a été créé. Veuillez votre boîte mail afin de confirmer votre compte.";

                        header("Location: connexion.php");
                        exit();
                    }
                }
            ?>
                <div class="row">

                <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="nom" type="text" placeholder="Nom et Prenoms">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="email" type="email" placeholder="Adresse email">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="mdp" type="password" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="mdp1" type="password" placeholder="Retapez le mot de passe">
                    </div>
                </div>

                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm btn_4 boxed-btn">Créer un compte</button>
                </div>

                <p>En devenant membre, vous acceptez nos <a href="#" style="color: #7657E6;">Conditions d'utilisation</a> et notre <a href="#" style="color: #7657E6;"> Politique de confidentialité</a></p>
            </form>
        </div>
 
    </div>
    </div>
</section>

<!-- CODE PHP START -->
<?php require('./footer.php'); ?>
<!-- CODE PHP END -->

</body>
</html>