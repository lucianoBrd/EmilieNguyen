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
        <h2 class="module-title font-alt">Gérer les modèles</h2>
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
        <h2 class="module-title font-alt"><a href="?page=edit" class="btn btn-border-d btn-xs">Nouvelle photo</a> Ajouter un modèle</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">
        <?php require_once(PATH_VIEWS.'alert.php');?>

        <form method = "post" action = "?page=editModele" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="url_modele">Url du modèle</label>
            <input required name="url" type="text" class="form-control" id="url_modele" placeholder="https://www.instagram.com/...">
          </div>
          <div class="form-group">
            <label for="nom_modele">Nom du modèle</label>
            <input required name="nom" type="text" class="form-control" id="nom_modele" placeholder="Nom">
          </div>
          <div class="form-group">
            <label for="prenom_modele">Prenom du modèle</label>
            <input required name="prenom" type="text" class="form-control" id="prenom_modele" placeholder="Prenom">
          </div>
          <button type="submit" class="btn btn-border-d">Ajouter</button>
        </form>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->

<!-- PARAGRAPH -->
<section class="module">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Liste des modèles</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($modeles as $modele) {
            ?>
              <tr>
                  <td><?=$modele->getNom()?></td>
                  <td><?=$modele->getPrenom()?></td>
                  <td><a href="?page=edit1Modele&id=<?=$modele->getId()?>" class="btn btn-border-d btn-xs">Modifier</a></td>
              </tr>
              <?php
                }
              ?>
          </tbody>
        </table>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->




<?php require_once(PATH_VIEWS.'footer.php');?>
