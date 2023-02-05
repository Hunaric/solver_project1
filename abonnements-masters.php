<!-- CODE PHP START -->
<?php 
require('./header.php'); 
require('./popus.php'); 
?>
<!-- CODE PHP END -->
<link rel="stylesheet" href="css/abonnements.css">   

<section class="wm-pricing">

    <div class="wm-priceHeader">

        <div class="wm-text">
            <h1>Nos abonnements</h1>
            <p>Profitez de nos packs maintenant</p>
        </div>

        <div class="wm-grade">

            <a href="./abonnements.php">
                <button>Licence</button>
            </a>

            <a href="./abonnements-masters.php">
                <button id="master">Master</button>
            </a>

        </div>
    </div>

    <!-- PLAN MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Moyen de payement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Adresse Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Methode de paiement</label>
                  <br>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Mobile</option>
                    <option>Bancaire</option>
                  </select>
                  <br>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Fedapay</option>
                    <option>Kkiapay</option>
                  </select>
                </div>
   
              </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <button type="button" class="btn btn-primary">Payer</button>
        </div>
        </div>
    </div>
    </div>
    <!-- PLAN MODAL -->


    <div class="wm-packs">

        <div class="pack">
            <h2>Intro</h2>
            <p class="pack-prices"> <span>5000 XOF</span></p>

            <p class="pack-description">Pour les minimalistes qui recherche une lecture précise.</p>

            <ul class="avantages">
                <li> <i class="fa-solid fa-circle-check"></i> 1 document.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 1 session autorisée.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 1 mois d'utilisation.</li>
            </ul>

            <a href="#abonnements">
                <button style="background: #7657E6;color: #fff;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Choisir ce plan</button>
            </a>
            
        </div>


        <div class="pack active">
            <h2>Populaire</h2>
            <p class="pack-prices"> <span>25000 XOF</span></p>

            <p class="pack-description">Pour amoureux de la recherche avec un catalogue plus vaste.</p>

            <ul class="avantages">
                <li> <i class="fa-solid fa-circle-check"></i> 6 documents.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 6 sessions autorisées.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 6 mois d'utilisation.</li>
            </ul>

            <button data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Choisir ce plan</button>
        </div>


        <div class="pack">
            <h2>Base</h2>
            <p class="pack-prices"> <span>12000 XOF</span></p>

            <p class="pack-description">Pour vous permettre des recherches plus poussées.</p>

            <ul class="avantages">
                <li> <i class="fa-solid fa-circle-check"></i> 3 documents.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 3 sessions autorisées.</li>
                <li> <i class="fa-solid fa-circle-check"></i> 3 mois d'utilisation.</li>
            </ul>

            <button style="background: #7657E6; color: #fff;"  data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Choisir ce plan</button>
        </div>

    </div>

</section>


<!-- CODE PHP START -->
<?php require('./footer.php'); ?>
<!-- CODE PHP END -->