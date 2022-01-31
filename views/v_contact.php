
<?php require_once(PATH_VIEWS.'header.php');?>

<?php require_once(PATH_VIEWS.'menu.php');?>

<!-- HERO -->
<section class="module module-parallax bg-light-30" data-background="assets/images/contact.jpg">

  <!-- HERO TEXT -->
  <div class="container">

    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 class="mh-line-size-3 font-alt m-b-20">Me contacter</h1>
        <h5 class="mh-line-size-4 font-alt">Je reviendrai vers vous dès que possible.</h5>
      </div>
    </div>

  </div>
  <!-- /HERO TEXT -->

</section>
<!-- /HERO -->

<!-- CONTACT -->
<section class="module">

  <div class="container">

    <div class="row">

      <div class="col-sm-6 col-sm-offset-1">

        <form id="contact-form" role="form" novalidate="">

          <div class="form-group">
            <label class="sr-only" for="cname">Nom</label>
            <input type="text" id="cname" class="form-control" name="cname" placeholder="Nom*" required="" data-validation-required-message="S'il vous plaît entrez votre nom.">
            <p class="help-block text-danger"></p>
          </div>

          <div class="form-group">
            <label class="sr-only" for="cemail">Votre Email</label>
            <input type="email" id="cemail" name="cemail" class="form-control" placeholder="Votre E-mail*" required="" data-validation-required-message="S'il vous plaît entrez votre addresse email.">
            <p class="help-block text-danger"></p>
          </div>

          <div class="form-group">
            <textarea class="form-control" id="cmessage" name="cmessage" rows="7" placeholder="Message*" required="" data-validation-required-message="S'il vous plaît entrez votre message."></textarea>
            <p class="help-block text-danger"></p>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-block btn-round btn-d">Envoyer</button>
          </div>

        </form>

        <!-- Ajax response -->
        <div id="contact-response" class="ajax-response font-alt"></div>

      </div>

      <div class="col-sm-4">

        <!-- ALT CONTENT BOX -->
        <div class="alt-content-box m-t-0 m-t-sm-30">
          <div class="alt-content-box-icon">
            <i class="ion-paper-airplane"></i>
          </div>
          <h5 class="alt-content-box-title font-alt">
            Say Hello
          </h5>
          Email: contact@emilie-ngy.com <br>
          Twitter : <a target="_blank" href="https://twitter.com/ngyemilie_">@ngyemilie_</a> <br>
          Instagram: <a target="_blank" href="https://www.instagram.com/ngyemilie/?hl=fr">ngyemilie</a>
        </div>
        <!-- /ALT CONTENT BOX -->

        <!-- ALT CONTENT BOX -->
        <div class="alt-content-box">
          <div class="alt-content-box-icon">
            <i class="ion-map"></i>
          </div>
          <h5 class="alt-content-box-title font-alt">
            Où me rencontrer
          </h5>
          Lyon <br>
          Actuellement, je ne me déplace pas encore dans toute la France, mais cela est prévu à partir de mars-avril 2022.
        </div>
        <!-- /ALT CONTENT BOX -->

      </div>

    </div>

  </div>
</section>
<!-- /CONTACT -->

<?php require_once(PATH_VIEWS.'footer.php');?>
