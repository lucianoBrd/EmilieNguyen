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
        <h2 class="module-title font-alt">Gérer les avis</h2>
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
        <h2 class="module-title font-alt">Liste des avis</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">
      <?php require_once(PATH_VIEWS.'alert.php');?>

      <div class="col-sm-6 col-sm-offset-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Avis</th>
              <th scope="col">Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 0;
              foreach ($avisListe as $avis) {
            ?>
              <tr>
                  <td><?=$avis->getName()?></td>
                  <td><?=$avis->getFirstName()?></td>
                  <td><?=$avis->getAvis()?></td>
                  <td><?= $jours[date("N", $avis->getDate()) - 1].' '.date("d - m - Y, H:i", $avis->getDate()) ?></td>
                  <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $i ?>">Supprimer</button>
                  </td>
                  <div class="modal" id="delete<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Supprimer</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Voulez-vous vraiment supprimer l'avis de <?=$avis->getName()?> <?=$avis->getFirstName()?> ?</p>
                        </div>
                        <div class="modal-footer">
                          <a href="?page=editAvis&id=<?=$avis->getId()?>" class="btn btn-border-d">Confirmer</a>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </tr>
              <?php
                  $i++;
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
