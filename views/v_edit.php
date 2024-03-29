<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="assets/images/home.jpg">

  <!-- HERO TEXT -->
  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 class="mh-line-size-3 font-alt m-b-20">Gestion du site</h1>
      </div>
    </div>

  </div>
  <!-- /HERO TEXT -->

</section>
<!-- /HERO -->

<!-- DARK SMALL -->
<section class="module-small bg-dark">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Gérer les photos</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

  </div>

</section>
<!-- /DARK SMALL -->

<!-- PARAGRAPH -->
<section class="module">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Ajouter une photo</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">
        <?php require_once(PATH_VIEWS.'alert.php');?>

      <form method = "post" action = "?page=edit" enctype = "multipart/form-data">
        <div class="form-group">
          <label for="url_image">Url de la photo</label>
          <input required name="url" type="text" class="form-control" id="url_image" placeholder="https://www.instagram.com/...">
        </div>
        <div class="form-group">
          <label for="modele">Modèle de la photo <a href="?page=editModele" class="btn btn-border-d btn-xs">Nouveau modèle</a></label>
          <select name="modele" class="form-control" id="modele">
            <?php
              foreach ($modeles as $modele) {
            ?>
            <option value="<?=$modele->getId()?>"><?=$modele->getPrenom().' '.$modele->getNom()?></option>
            <?php
              }
            ?>
          </select>

        </div>
        <div class="form-group">
          <label for="description">Description de la photo</label>
          <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="picture">Photo</label>
          <input required name="image" type="file" class="form-control-file " id="picture">
        </div>
        <button type="submit" class="btn btn-border-d">Ajouter</button>
      </form>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->

<!-- PORTFOLIO -->
<section id="portfolio" class="module">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Liste des photos</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

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
          <a href="?page=edit1&id=<?=$image[0]->getId()?>">
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
          <a href="?page=edit1&id=<?=$image[0]->getId()?>">
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




<?php require_once(PATH_VIEWS.'footer.php');?>
