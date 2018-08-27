<?
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Atticus - GIF Design Studios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="../css/typed.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script src="../js/script.js"></script>
  <script src="../js/typed.min.js"></script>
  <script src="../js/squareResponsive.js"></script>
  <script type="text/javascript" src="../js/background-check.min.js"></script>
  <style>
  a{
      color:#B5945F;
  }
  .project-color{
    background-color: #B5945F;
  }
  .txt-label{
    color: #B5945F;
  }
  .project-text-color{
      color: #B5945F;
  }
  </style>
  <script type="text/javascript">
    $(document).ready(function() {
        BackgroundCheck.init({
            targets: '.logo, #menu_toggle_container'
          });


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
    <? echo scriptsHead(); ?>
    <? echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-atticus">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
        <div id="single-project-cover" class="project_01 desktop">
            <div class="keepScrollingContainer">
                <a href="#anchor">
                    <div class="animated bounce">
                        <img src="../img/GIF-Scroll-@2x.png" width="25">
                    </div>
                <div>Keep Scrolling</div>
                </a>
            </div>
        </div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-Atticus-01.jpg" alt="Atticus" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Joana Galvão, our founder,  met Kimberley Bell at the conference: <a target="_blank" href="http://www.tropicalthinktank.com/">Tropical Think Tank</a>. Kimberley was at a time a corporate lawyer, with the ability to practice law in the US, Canada, Australia and England - something very rare for lawyers in this day and age.</p><p>She came to us with a dream to become a lawyer for entrepreneurs and small business owners like myself, to help them from simple things like terms and conditions on websites, to creating contracts for staff, client work and protecting her client’s IP.</p><p>We started by giving her an elegant identity that stood out from the other lawyers and next we are excited to work on her website and bring her vision for her new business to life.</p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Kimberley Bell</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">Diana Castro</p>
            <p class="txt-label">Print:</p>
            <p class="text">Diana Castro</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev"><a href="bibliohive.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
          <div class="nav-next"><a href="the-bridal-collection-harrogate.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12"><img src="../img/GIF-Atticus-02.jpg" alt="Atticus" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Atticus-03.jpg" alt="Atticus" class="full-width"></div>
      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center"><p class="bold">Joana Galvao and her team at GIF Studio are amazingly talented creatives. </p>They very successfully coaxed my ill-formed thoughts into a gorgeous, cohesive brand strategy.  Her team easily exceeded all of my expectations and made my branding journey exciting and stress-free. </p><p>Not only do I highly recommend Gif Design Studios, I will use them again.</p><p class="bold project-text-color">Kimberley Bell | Lawyer | Founder | Atticus</p>
        </div>
      </div>
      <div class="cell col-6 desktop">
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12 tablet"><img src="../img/GIF-Atticus-04.jpg" alt="Atticus" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Atticus-05.jpg" alt="Atticus" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Atticus-06.jpg" alt="Atticus" class="full-width"></div>
      <div class="col col-12"><img src="../img/GIF-Atticus-07.jpg" alt="Atticus" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a href="#"><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><i class="fa fa-link inactive" aria-hidden="true"></i></div>
          <div class="link-text">Coming Soon</div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="bibliohive.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="the-bridal-collection-harrogate.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
