
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
        <p>Je suis là pour vous mettre à l’aise, pour vous accompagner tout au long du shooting dans la bonne humeur !</p>
        <p>Je suis également à votre disposition après le shooting si vous avez besoin de conseils, ou avant le shooting pour toutes questions !</p>
        <ul>
          <li>Possibilité de choisir de vous faire maquiller ou non, pour un coût supplémentaire</li>
          <li>Vous pouvez emmener plusieurs tenues pour varier les photos</li>
          <li> Plusieurs spots différents lors d’un shooting</li>
        </ul>
        <p>Pour toute demande particulière de shooting, veuillez <a href="?page=contact">me contacter</a> pour un devis !</p>
        <p>Si vous avez un petit budget, ne vous inquiétez pas ! Il est possible de payer en 2 fois sans frais*.</p>
        <p><small>*Un acompte de 15% vous sera demandé avant le shooting.</small></p>
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
          <p class="price"><span>€</span>90</p>
          <ul class="price-details">
            <li>30 minutes de shooting</li>
            <li>3 photos retouchées</li>
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
          <p class="price"><span>€</span>220</p>
          <ul class="price-details">
            <li>1 heure de shooting</li>
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
          <p class="price"><span>€</span>240</p>
          <ul class="price-details">
            <li>Plus d'une heure de shooting avec Make up d'artiste</li>
            <li>10 photos retouchées</li>
            <li>Et envoyées en HD</li>
          </ul>
          <a href="?page=contact" class="btn btn-d btn-round">Me contacter</a>
        </div>
      </div>
      <!-- /PRICE-TABLE -->

      <!-- PRICE-TABLE -->
      <div class="col-sm-6 col-md-3 col-lg-3">
        <div class="price-table font-alt">
          <h4>Basic</h4>
          <div class="borderline"></div>
          <p class="price"><span>€</span>175</p>
          <ul class="price-details">
            <li>45 minutes de shooting</li>
            <li>7 photos retouchées</li>
            <li>Et envoyées en HD</li>
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
