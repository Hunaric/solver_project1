

<!-- CODE PHP START -->
<?php 
session_start();
require('./header.php'); 
?>
<!-- CODE PHP END -->



<section class="contact-section section_padding">
    <div class="container">
   
    <div class="row">
        <div class="col-12" >
        <h1 style="font-family: 'Poppins', sans-serif; margin: 30px 0; margin-top: 100px; text-align: justify;">Conectez-vous</h1>
        <p style="font-family: 'Poppins', sans-serif; margin: 30px 0;">Rentabiliser vos documents et sujets d'études dès maintenant.</p>
        </div>

        <div class="col-lg-8">
            <form class="form-contact contact_form" action="verification.php" method="post">

            <!-- CODE PHP START -->
            <?php
            require_once('./db.php');
            require_once('./fonctions.php');
            ?>

            <?php if(isset($_SESSION['flash'])): ?>
                <?php foreach($_SESSION['flash'] as $type => $message): ?>
                    <div class="alert alert-<? $type ?>">
                        <? $message ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
                <div class="row">

            <?php
            if(!empty($_POST)){
                $errors = [];
                
                // Verification du mail
                if(empty($_POST['email']))
                {
                    $errors['mail'] = "Votre mail n'est pas valide";
                    var_dump($errors['mail']);
                }
                  
                // Verification du MOT DE PASSE
                if(empty($_POST['mdp']))
                {
                    $errors['mdp'] = "Votre mot de passe ne peut être vide.";
                    var_dump($errors['mdp']);
                } 

            }
            ?>

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

                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm btn_4 boxed-btn">Connexion</button>
                </div>

            </form>
        </div>
 
    </div>
    </div>
</section>




<!-- CODE PHP START -->
<?php require('./footer.php'); ?>
<!-- CODE PHP END -->
