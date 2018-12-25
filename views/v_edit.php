<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="">

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

      <form method = "post" action = "" enctype = "multipart/form-data">
        <div class="form-group">
          <label for="url_image">Url de la photo</label>
          <input type="text" class="form-control" id="url_image" placeholder="https://www.instagram.com/...">
        </div>
        <div class="form-group">
          <label for="modele">Modèle de la photo</label>
          <select class="form-control" id="modele">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description">Description de la photo</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="picture">Photo</label>
          <input type="file" class="form-control-file " id="picture">
        </div>
        <button type="submit" class="btn btn-border-d">Ajouter</button>
      </form>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->




<?php require_once(PATH_VIEWS.'footer.php');?>
