<?php
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Nicholas Kusmich - GIF Design Studios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/typed.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/typed.min.js"></script>
  <script src="../js/squareResponsive.js"></script>

  <?php
//ESCOLHER COR DO PROJETO
      $projectColor = "#fc463d";

      echo changeProjectColor($projectColor);
  ?>

  <script type="text/javascript">
    $(document).ready(function() {
      function fullscreen(){
		      jQuery('#single-project-cover').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
          });
	    }

	     fullscreen();

      // Run the function in case of window resize
      jQuery(window).resize(function() {
           fullscreen();

        });

    });
  </script>
    <?php echo scriptsHead(); ?>
    <?php echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-nicholas-kusmich">
<?php echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_13 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div class="white">Keep Scrolling</div>
              </a>
            </div></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-NicholasKusmich-01.jpg" alt="NicholasKusmich" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Nicholas helps businesses rapidly scale revenue by getting them more customers using Facebook Advertising. He is the guy behind the highest campaign ROI’s in the world.
                <br />Specializing in working with high growth companies including thought-leaders, influencers, professional service providers, ecommerce companies, and big brands, Nicholas came to us to get a brand overhaul that reflected the high caliber work he did.
                <br/>We did this by first designing a new brand identity, and then rolling it out to his website and other marketing materials.

            <p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Nicholas Kusmich</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">UI/UX Design:</p>
            <p class="text">Rúben Silva</p>
            <p class="txt-label">Development:</p>
            <p class="text">Diana Pinheiro</p>
            <p class="txt-label">Merchandising:</p>
            <p class="text">Diana Santa</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev">
              <a href="alma-cheia.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
              <div>Previous</div>
          </div>
          <div class="nav-next">
              <a href="leaguehps.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
              <div style="text-align:center;">Next</div>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-02.jpg" alt="NicholasKusmich" class="full-width"></div>
      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center">
            <p>"Just to go on record that Joana Galvão and her team were such an amazing delight to work with. They captured everything I was looking to do and executed smooth like butter!!!"</p>
            <p class="bold project-text-color">Nicholas Kusmich | Author, Speaker & Facebook Ad Expert</p>
        </div>
      </div>
      <div class="cell col-6 desktop" >
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-04.jpg" alt="NicholasKusmich" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-05.jpg" alt="NicholasKusmich" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-06.jpg" alt="NicholasKusmich" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-07.jpg" alt="NicholasKusmich" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-NicholasKusmich-08.jpg" alt="NicholasKusmich" class="full-width"></div>


      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <a class="link-block" target="_blank" href="https://www.behance.net/gallery/53528303/Nicholas-Kusmich"><div class="link-icon"><i class="fa fa-behance white" aria-hidden="true"></i></div>
          <div class="link-text white">Behance</div></a>
        </div>
        <div class="col col-3">
          <div class="link-icon"><a target="_blank" class="white" href="http://www.nicholaskusmich.com"><i class="fa fa-link active" aria-hidden="true"></i></a></div>
          <div class="link-text hide-on-mobile"><a target="_blank" class="white" href="http://www.nicholaskusmich.com">www.nicholaskusmich.com</a></div>
          <div class="link-text mobile"><a target="_blank" class="white" href="http://www.nicholaskusmich.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="alma-cheia.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="leaguehps.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <?php echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
