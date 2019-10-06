
<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="assets/images/avis.jpg">

  <!-- HERO TEXT -->
  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 class="mh-line-size-3 font-alt m-b-20">Avis</h1>
        <h5 class="mh-line-size-4 font-alt">Laissez moi un avis.</h5>
      </div>
    </div>

  </div>
  <!-- /HERO TEXT -->

</section>
<!-- /HERO -->

<!-- AVIS -->
<section class="module">

  <div class="container">

    <!-- COMMENT FORM -->
    <div class="comment-form">
      <h4 class="comment-form-title font-alt">Laisser un avis</h4>
      <hr class="divider m-b-30">

      <div class="row">
        <?php require_once(PATH_VIEWS.'alert.php');?>
        <form method = "post" action = "?page=avis" enctype = "multipart/form-data">
          <div class="col-md-4">
            <div class="form-group">
              <input id="nom" required type="text" class="form-control" placeholder="Nom" name="nom">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input id="prenom" required type="text" class="form-control" placeholder="Prenom" name="prenom">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input id="email" required type="email" class="form-control" placeholder="E-mail" name="email">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea id="avis" required name="avis" class="form-control" placeholder="Votre avis" rows="6"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <button class="btn btn-round btn-g">Poster l'avis</button>
          </div>
        </form>

      </div>

    </div>
    <!-- /COMMENT FORM -->

    <!-- COMMENTS -->
    <div class="comments">
      <h4 class="comment-title font-alt"><?= $nbAvis ?> avis</h4>
      <hr class="divider m-b-30">

        <?php
          foreach ($avisListe as $avis) {
        ?>
        <!-- Avis -->
        <div class="comment clearfix post">
          <div class="comment-content clearfix">
            <h5 class="comment-author font-alt">
              <p><?= $avis->getFirstName().' '.$avis->getName() ?></p>
            </h5>
            <div class="comment-body">
              <p><?= $avis->getAvis() ?></p>
            </div>
            <div class="comment-meta font-alt"><?= $jours[date("N", $avis->getDate()) - 1].' '.date("d - m - Y, H:i", $avis->getDate()) ?></div>
          </div>
          <hr class="divider m-b-30">
        </div>
        <!-- /Avis -->
        <?php
          }
        ?>

    </div>
    <!-- /COMMENTS -->

  </div>
</section>
<!-- /AVIS -->

<?php require_once(PATH_VIEWS.'footer.php');?>
