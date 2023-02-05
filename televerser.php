<!-- CODE PHP START -->
<?php 
require('./header.php'); 
require('./popus.php'); 
?>
<!-- CODE PHP END -->

<div class="sprayed_area overlay" style="background: white; color: #000;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text text-center">
                <h3 style="font-family: 'Poppins', sans-serif;"> Importer vos documents </h3>
                <p style="font-size: 14px; margin: 30px 0;">

                    Vos contributions seront distribuées gratuitement selon les termes de la licence Pexels. En savoir plus
                    <br>
                    Pour augmenter vos chances de voir votre travail mis en avant, veuillez vous assurer que vos suggestions respectent nos directives.
                    <br>
                    Nous allons examiner votre contribution. Si elle est sélectionnée, vous serez notifié par e-mail, et votre contenu figurera dans notre outil de recherche.

                </p>

                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">

                    <div class="col-sm-6">
                    <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Votre nom">
                    </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Votre prénom">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nom de votre binôme">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Prénom de votre binôme">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Directeur de memoire">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Niveau d'étude">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Année">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Pays">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Secteur">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Nom de l'établisement">
                        </div>
                    </div>

                    <div class="col-12">
                    <div class="form-group">
                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Titre du document">
                    </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Résumé"></textarea>
                        </div>
                    </div>
                    </div>

                    <div class="upload-form" onclick="document.querySelector('.js-file-input').click()">
                        <input type="file" class="hidden js-file-input" accept="pdf/docx" multiple="">
                    </div>

                    <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm btn_4 boxed-btn">Publier</button>
                    </div>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- CODE PHP START -->
<?php require('./footer.php'); ?>
<!-- CODE PHP END -->