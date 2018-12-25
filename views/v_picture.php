
<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section id="hero" class="module-hero module-parallax module-full-height bg-light-30" data-background="<?=$image[0]->getLink()?>">

  <!-- HERO TEXT -->
  <div class="hero-caption">
    <div class="hero-text">

      <h1 class="mh-line-size-1 font-alt m-b-50">Emilie Nguyen</h1>
      <h5 class="mh-line-size-4 font-alt">Photographe</h5>

    </div>
  </div>
  <!-- /HERO TEXT -->

</section>
<!-- /HERO -->

<!-- SINGLE PORTFOLIO -->
<section class="module">

  <div class="container">

    <!-- PORTFOLIO CONTENT -->
    <div class="row">

      <div class="col-sm-12">

        <!-- IMAGE WITH CAPTION -->
        <div class="image-caption">
          <div class="caption-text text-right">
            <h5 class="font-alt">Emilie Nguyen</h5>
            <p class="font-serif">Modèle : <?=$image[1]->getPrenom().' '.$image[1]->getNom()?></p>
          </div>
          <img src="<?=$image[0]->getLink()?>" alt="">
        </div>
        <!-- /IMAGE WITH CAPTION -->

      </div>

    </div>
    <!-- /PORTFOLIO CONTENT -->

    <!-- PROJECT DETAILS -->
    <div class="row m-t-70">

      <div class="col-sm-4 m-b-sm-30">
        <h5 class="font-alt m-t-0">Modèle</h5>
        <p><?=$image[1]->getPrenom().' '.$image[1]->getNom()?></p>
        <a target="_blank" href="<?=$image[1]->getUrl()?>">Instagram du modèle →</a>
      </div>

      <div class="col-sm-4 m-b-sm-30">
        <h5 class="font-alt m-t-0">Photo</h5>
        <p><?=$image[0]->getDescription()?></p>
        <a target="_blank" href="<?=$image[0]->getUrl()?>">Instagram →</a>
      </div>


    </div>
    <!-- /PROJECT DETAILS -->

  </div>

</section>
<!-- /SINGLE PORTFOLIO -->

<?php require_once(PATH_VIEWS.'footer.php');?>
