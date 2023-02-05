<!-- CODE PHP START -->
<?php 
session_start();
require('./header.php'); 
?>
<!-- CODE PHP END -->



<div class="sprayed_area overlay" style="background: white; color: #000;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text text-center">

                    <div class="thumb">
                        <img src="img/avatar.jpg" alt="" width="200" height="200" style="margin-bottom: 20px; border-radius: 100%;">
                        </div>

                    <h3 style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #101010;"> <?= $_SESSION['auth']->nom ?> </h3>


                    <a href="editer_le_profil.html" class="boxed-btn2" style="margin: 30px 0 ;">
                        <i class="fa-solid fa-pen" style="margin-right: 10px;"></i>
                        Modifier le profil
                    </a>

                    <div class="row" style="margin-top: 10px; font-family: 'Poppins', sans-serif;">
                        <div class="col-md-4">
                        <div class="single-defination">
                        <h4 class="mb-20">Nombre de vues total</h4>
                        <p>200</p>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                            <h4 class="mb-20">Nombre de pack</h4>
                            <p>343 millier</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="single-defination">
                        <h4 class="mb-20">Revenus généré</h4>
                        <p>5.000.000 XOF</p>
                        </div>
                        </div>
                    </div>



                </div>

                <div class="explorer_europe">
                    <div class="container">
                        <div class="explorer_wrap">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-md-4">

                                </div>
                                <div class="col-xl-6 col-md-8">
                                <div class="explorer_tab">
                                <nav>
                                <div class="nav" id="nav-tab" role="tablist" style="font-weight:bold;">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mes publications</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Statistiques</a>
                                </div>
                                </nav>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/exemple.png" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                    <div class="explorer_info">
                                    <h3><a href="single_listings.html">Le vécu de Camara LAYE à Kouroussouma</a></h3>
                                    <p>Ajouté le 00/00/00 - LICENCE</p>
                                    <ul>
                                        <li style="margin-top: 10px;"><a href="editer_document.html" class="genric-btn info-border radius">Editer</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/exemple.png" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                    <div class="explorer_info">
                                    <h3><a href="single_listings.html">Freshly Food</a></h3>
                                    <p>Ajouté le 00/00/00 - LICENCE</p>
                                    <ul>
                                        <li style="margin-top: 10px;"><a href="#" class="genric-btn info-border radius">Editer</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/exemple.png" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                    <div class="explorer_info">
                                    <h3><a href="single_listings.html">Midnight</a></h3>
                                    <p>Ajouté le 00/00/00 - LICENCE</p>
                                    <ul>
                                        <li style="margin-top: 10px;"><a href="#" class="genric-btn info-border radius">Editer</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>


                        <!-- STATISTICS -->

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/x4.png.pagespeed.ic.zTEXRoEfnk.jpg" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                    <div class="explorer_info">
                                    <h3><a href="single_listings.html">Barber</a></h3>
                                    <p>Nombre d'abonnement: <strong>20</strong> </p>
                                    <p>Nombre de vue: <strong>20</strong> </p>
                                    <p>Nombre de packs: <strong>20</strong> </p>

                                    <ul class="blog-info-link" style="margin: 20px 0;">
                                        <li><a href="#"><i class="fa fa-thumbs-up"></i> 20 Likes</a></li>
                                        <li><a href="index.html#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/x1.png.pagespeed.ic.lpo2xrIJng.jpg" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                    <div class="explorer_info">
                                    <h3><a href="single_listings.html">Saintmartine</a></h3>

                                    <p>Nombre d'abonnement: <strong>20</strong> </p>
                                    <p>Nombre de vue: <strong>20</strong> </p>
                                    <p>Nombre de packs: <strong>20</strong> </p>

                                    <ul class="blog-info-link" style="margin: 20px 0;">
                                        <li><a href="#"><i class="fa fa-thumbs-up"></i> 20 Likes</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single_explorer">
                                    <div class="thumb">
                                    <img src="img/explorer/x2.png.pagespeed.ic.YQRTmVle7E.jpg" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">

                                        <div class="explorer_info">
                                        <h3><a href="single_listings.html">Saintmartine</a></h3>
                                        <p>Nombre d'abonnement: <strong>20</strong> </p>
                                        <p>Nombre de vue: <strong>20</strong> </p>
                                        <p>Nombre de packs: <strong>20</strong> </p>
                                        <ul class="blog-info-link" style="margin: 20px 0;">
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i> 20 Likes</a></li>
                                            <li><a href="#"><i class="fa fa-comments"></i> 03 Commentaires</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- STATISTICS -->
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



<!-- CODE PHP START -->
<?php require('./footer.php'); ?>
<!-- CODE PHP END -->
