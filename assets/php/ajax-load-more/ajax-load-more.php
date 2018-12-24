<?php
require_once('../../../config/configuration.php');
require_once('../../../'.PATH_MODELS.'ImagesDAO.php');

$imagesDAO = new ImagesDAO();

$imagesListe = $imagesDAO->getImages();

?>

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

  </div>

</section>
<!-- /PORTFOLIO -->
