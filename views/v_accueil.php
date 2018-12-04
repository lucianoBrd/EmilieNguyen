
<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section id="hero" class="module-hero module-parallax module-full-height bg-light-30" data-background="assets/images/lyon.jpg">

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

<!-- PORTFOLIO -->
<section id="portfolio" class="module">

  <div class="container">

    <!-- WORKS GRID -->
    <div class="row">

      <div id="works-grid" class="works-grid works-hover-w">

        <!-- DO NOT DELETE THIS DIV -->
        <div class="grid-sizer"></div>

        <?php
          foreach ($imagesListe as $image) {
            list($width, $height, $type, $attr) = getimagesize($image[0]->getLink());
            if($height < $width){
        ?>
        <!-- PORTFOLIO ITEM -->
        <div class="work-item wide">
          <a href="portfolio-single-1.html">
            <img src="<?=$image[0]->getLink()?>" alt="<?=$image[1]->getPrenom()?>">
            <div class="work-caption font-alt">
              <h3 class="work-title"><?=$image[1]->getPrenom().' '.$image[1]->getNom()?></h3>
              <div class="work-descr">
                <?=$image[0]->getDescription()?>
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->
        <?php

            } else {
        ?>
        <!-- PORTFOLIO ITEM -->
        <div class="work-item wide-tall">
          <a href="portfolio-single-1.html">
            <img src="<?=$image[0]->getLink()?>" alt="<?=$image[1]->getPrenom()?>">
            <div class="work-caption font-alt">
              <h3 class="work-title"><?=$image[1]->getPrenom().' '.$image[1]->getNom()?></h3>
              <div class="work-descr">
                <?=$image[0]->getDescription()?>
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->
        <?php

            }
          }
        ?>

      </div>

    </div>
    <!-- /WORKS GRID -->

    <!-- SHOW MORE -->
    <div class="row m-t-70 text-center wow fadeInUp">
      <div class="col-sm-12">

        <button id="show-more" class="btn btn-block btn-lg btn-g show-more">More works</button>

      </div>
    </div>
    <!-- /SHOW MORE -->

  </div>

</section>
<!-- /PORTFOLIO -->

<?php require_once(PATH_VIEWS.'footer.php');?>
