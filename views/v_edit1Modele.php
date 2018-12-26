<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="assets/images/lyon.jpg">

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
        <h2 class="module-title font-alt"><a href="?page=editModele" class="btn btn-border-d btn-xs">Retour</a> Modifier un modèle</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">
        <?php require_once(PATH_VIEWS.'alert.php');?>

        <form method = "post" action = "?page=edit1Modele&id=<?=$modele->getId()?>" enctype = "multipart/form-data">
          <div class="form-group">
            <label for="url_modele">Url du modèle</label>
            <input required name="url" type="text" class="form-control" id="url_modele" placeholder="https://www.instagram.com/..." value="<?=$modele->getUrl()?>">
          </div>
          <div class="form-group">
            <label for="nom_modele">Nom du modèle</label>
            <input required name="nom" type="text" class="form-control" id="nom_modele" placeholder="Nom" value="<?=$modele->getNom()?>">
          </div>
          <div class="form-group">
            <label for="prenom_modele">Prenom du modèle</label>
            <input required name="prenom" type="text" class="form-control" id="prenom_modele" placeholder="Prenom" value="<?=$modele->getPrenom()?>">
          </div>
          <button type="submit" class="btn btn-border-d">Modifier</button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Supprimer</button>

          <div class="modal" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Supprimer</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Voulez-vous vraiment supprimer <?=$modele->getPreNom()?> <?=$modele->getNom()?> ?</p>
                </div>
                <div class="modal-footer">
                  <a href="?page=deleteModele&id=<?=$modele->getId()?>" class="btn btn-border-d">Confirmer</a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->




<?php require_once(PATH_VIEWS.'footer.php');?>
