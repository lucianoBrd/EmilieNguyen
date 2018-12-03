
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
          /*foreach ($imagesListe as $image) {
            list($width, $height, $type, $attr) = getimagesize("assets/".$image[0]->getLink());
            if($width > 4000){

            } else {

            }
          }*/
        ?>
        <!-- PORTFOLIO ITEM -->
        <div class="work-item tall branding">
          <a href="portfolio-single-1.html">
            <img src="assets/images/ngy/152500461817015629101949106609.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">Nom modele</h3>
              <div class="work-descr">
                Texte
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item design">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-1.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">The languages only</h3>
              <div class="work-descr">
                Design
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item design">
          <a href="portfolio-single-1.html">
            <img src="assets/images/ngy/152500461817015629101949106609.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">Everyone realizes</h3>
              <div class="work-descr">
                Design
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item design">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-4.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">Corporate Identity</h3>
              <div class="work-descr">
                Design
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item design">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-5.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">Cambridge friend</h3>
              <div class="work-descr">
                Design
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item wide-tall branding photo web">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-1.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">The grammar of the resulting language</h3>
              <div class="work-descr">
                Branding / Photo / Web
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item wide design photo web">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-7.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">A collection of textile samples</h3>
              <div class="work-descr">
                Design / Photo / Web
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item branding photo">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-8.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">Gregor then turned</h3>
              <div class="work-descr">
                Branding / Photo
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item branding photo">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-9.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">He must have tried it</h3>
              <div class="work-descr">
                Branding / Photo
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

        <!-- PORTFOLIO ITEM -->
        <div class="work-item wide design web">
          <a href="portfolio-single-1.html">
            <img src="assets/images/portfolio/img-1.jpg" alt="">
            <div class="work-caption font-alt">
              <h3 class="work-title">However hard he threw himself</h3>
              <div class="work-descr">
                Design / Web
              </div>
            </div>
          </a>
        </div>
        <!-- /PORTFOLIO ITEM -->

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
