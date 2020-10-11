
<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="assets/images/tarifs.jpg">

  <!-- HERO TEXT -->
  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 class="mh-line-size-3 font-alt m-b-20">Tarifs</h1>
      </div>
    </div>

  </div>
  <!-- /HERO TEXT -->

</section>
<!-- /HERO -->

<!-- PARAGRAPH -->
<section class="module">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Informations</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3" id="tarifsinfo">
        <p>
            Je n’ai aucun critère pour les shootings, mes séances sont ouvertes à tout le monde.
            Donc, pas de panique, si tu n’as jamais fait de shooting, il n’y a aucun souci.
            On prendra le temps d’essayer plein de choses différentes pour avoir le rendu que tu aimes.
            Je suis là pour te mettre à l’aise, pour t’accompagner tout au long du shooting dans la bonne humeur !
            Je suis également à ta disposition après le shooting si tu as besoin de conseils, ou avant le shooting pour toutes questions.
        </p>

      </div>

    </div>

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Comment cela se passe ?</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3" id="tarifsinfo">
        <p>
            Tout d’abord choisis la formule qu’il te convient le mieux, puis nous discuterons ensemble du déroulement du shooting (des projets, des thèmes, des lieux, du make up, des tenues etc.).
            Plusieurs spots seront proposés lors du shooting.
            Ensuite, nous fixerons ensemble une date et un horaire qui nous convienne.
            Pour le paiement, si tu as un petit budget, ne t’inquiète pas, il est possible de payer en plusieurs fois sans frais.
        </p>
        <p>
          À la fin du shooting, je ferai un tri où j’enlèverai les doublons, les photos floues etc., et je te les enverrai par e-mail pour que tu puisses choisir tranquillement chez toi tes photos préférées.
          Puis je les retoucherai et je te les enverrai sous 2 semaines.
          Si tu as besoin de conseil, je suis là pour t’aider et je peux même faire la sélection pour toi si tu en as envie !
        </p>
        <p>
          <small>
            (Pour des questions de sécurité, un acompte de 15% du prix du shooting te sera demandé avant le shooting.
            À régler par virement bancaire, ou par Paypal)
          </small>
        </p>
        <p>
          Pour toute demande particulière de shooting, veuillez <a href="?page=contact">me contacter</a> pour un devis.
        </p>

      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->

<?php
  if($nbAvis > 0){
?>
<!-- TESTIMONIALS -->
<section class="module module-parallax bg-light-30" data-background="assets/images/avis_t.jpg">

  <div class="container">

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">

        <!-- TESTIMONIALS CAROUSEL -->
        <div class="owl-carousel slider-testimonials text-center">

          <?php
            foreach ($avisListe as $avis) {
          ?>
          <!-- SLIDE -->
          <div class="item">
            <h5 class="module-icon m-b-20">
              <i class="ion-ios-chatboxes-outline"></i>
            </h5>
            <div class="font-serif m-b-20">
              <?= $avis->getAvis() ?>
            </div>
            <div class="quote-author font-alt"><?= $avis->getFirstName().' '.$avis->getName() ?></div>
          </div>
          <!-- /SLIDE -->
          <?php
            }
          ?>

        </div>
        <!-- /TESTIMONIALS CAROUSEL -->

      </div>

    </div>

  </div>

</section>
<!-- /TESTIMONIALS -->
<?php
  }
?>

<!-- PRICING 3 COLUMNS -->
<section class="module">

  <div class="container">

    <div class="row multi-columns-row">

      <!-- PRICE-TABLE -->
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="price-table font-alt">
          <h4>Light</h4>
          <div class="borderline"></div>
          <p class="price"><span>€</span>70</p>
          <ul class="price-details">
            <li>4 photos retouchées</li>
            <li>Et envoyées en HD</li>
          </ul>
          <a href="?page=contact" class="btn btn-d btn-round">Me contacter</a>
        </div>
      </div>
      <!-- /PRICE-TABLE -->

      <!-- PRICE-TABLE -->
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="price-table font-alt">
          <h4>Avancé</h4>
          <div class="borderline"></div>
          <p class="price"><span>€</span>180</p>
          <ul class="price-details">
            <li>10 photos retouchées</li>
            <li>Et envoyées en HD</li>
          </ul>
          <a href="?page=contact" class="btn btn-d btn-round">Me contacter</a>
        </div>
      </div>
      <!-- /PRICE-TABLE -->

      <!-- PRICE-TABLE -->
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="price-table best font-alt">
          <h4>Avancé - Make Up Artist</h4>
          <div class="borderline"></div>
          <p class="price"><span>€</span>210</p>
          <ul class="price-details">
            <li>10 photos retouchées</li>
            <li>Et envoyées en HD + Make Up Artist</li>
          </ul>
          <a href="?page=contact" class="btn btn-d btn-round">Me contacter</a>
        </div>
      </div>
      <!-- /PRICE-TABLE -->

      <!-- PRICE-TABLE -->
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="price-table font-alt">
          <h4>Basic - Make Up Artist</h4>
          <div class="borderline"></div>
          <p class="price"><span>€</span>160</p>
          <ul class="price-details">
            <li>6 photos retouchées</li>
            <li>Et envoyées en HD + Make Up Artist</li>
          </ul>
          <a href="?page=contact" class="btn btn-d btn-round">Me contacter</a>
        </div>
      </div>
      <!-- /PRICE-TABLE -->

    </div>

  </div>

</section>
<!-- /PRICING 3 COLUMNS -->

<?php require_once(PATH_VIEWS.'footer.php');?>
