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


<!-- PARAGRAPH -->
<section class="module">

  <div class="container">

    <!-- MODULE TITLE -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Connexion</h2>
      </div>
    </div>
    <!-- /MODULE TITLE -->

    <div class="row">

      <div class="col-sm-6 col-sm-offset-3">
        <?php require_once(PATH_VIEWS.'alert.php');?>

      <form method = "post" action = "?page=connexion" enctype = "multipart/form-data">
        <div class="form-group">
          <label for="email">Email</label>
          <input required value="<?=isset($_GET['email'])?$_GET['email']:''?>" name="email" type="email" class="form-control" id="email" placeholder="email@exemple.com">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input required name="password" type="password" class="form-control" id="password" placeholder="***********">
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input name="check_connect" class="form-check-input" type="checkbox" value="" checked="">
            Rester connecter
          </label>
        </div>
        <button type="submit" class="btn btn-border-d">Connexion</button>
      </form>
      </div>

    </div>

  </div>

</section>
<!-- /PARAGRAPH -->





<?php require_once(PATH_VIEWS.'footer.php');?>
