<? include '../library/template_functions/t_functions.php'; ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Elia Truly- GIF Design Studios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/typed.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/typed.min.js"></script>
  <script src="../js/squareResponsive.js"></script>
  <style>
  .project-color{
    background-color: #73a09a;
  }
  .txt-label{
    color: #73a09a;
  }
  .project-text-color{
      color: #73a09a;
  }

  </style>
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
    <? echo scriptsHead(); ?>
    <? echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-elia-truly">
<? echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_31 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div class="white">Keep Scrolling</div>
              </a>
            </div>
          </div>
        <div class="col col-12 hide-on-desktop"><img src="../img/GIF-EliaTruly-01.jpg" alt="EliaTruly" class="full-width"></div>
      </div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">Lectus lacinia lacus potenti consequat parturient amet condimentum a parturient et fames adipiscing
            impers iaculis conubia eleifend a condimentum ligeleifend a condimectus lacinia lacus potenti consequat.</p>
            <p>Parturient amet condimentum a parturient et fames adipiscing impers iaculis conubia eleifend a condimentum ligula. 
            Lectus lacinia lacus potenti consequat parturient amet condimentum a parturient et fames adipiscing impers iaculis conubia
            eleifend a condimentum ligeleifend a condimectus lacinia lacus potenti consequat.<p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Deborah Runge</p>

            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>

            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro <br/> Diana Santa</p>

            <p class="txt-label">Packaging:</p>
            <p class="text">Diana Santa</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev">
              <a href="content-snare.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
              <div>Previous</div>
          </div>
          <div class="nav-next">
              <a href="foodie.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
              <div style="text-align:center;">Next</div>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12" ><img src="../img/GIF-EliaTruly-02.jpg" alt="EliaTruly" class="full-width"></div>
      <div class="cell col-6 table testimonial">
        <div class="square-responsive square-center">
            <p class="bold project-text-color">Brief text description about project</p>
            <p>Lectus lacinia lacus potenti consequat parturient amet condimentum a parturient et fames adipiscing impers iaculis conubia eleifend a condimentum ligeleifend a condimectus lacinia lacus potenti consequat.
            <p>Parturient amet condimentum a parturient et fames adipiscing impers iaculis conubia eleifend a condimentum ligula.</p>
        </div>
      </div>
      <div class="cell col-6 desktop" >
        <div class="square-responsive square-image1"></div>
      </div>
      <div class="col col-12" ><img src="../img/GIF-EliaTruly-04.jpg" alt="EliaTruly" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-EliaTruly-05.jpg" alt="EliaTruly" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-EliaTruly-06.jpg" alt="EliaTruly" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-6">
          <div class="link-icon"><a class="isDisabled" href=""><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text isDisabled">Behance</div>
        </div>
        <!-- <div class="col col-3">
          <div class="link-icon"><a target="_blank" class="white" href="http://www.tiereleven.com"><i class="fa fa-link active" aria-hidden="true"></i></a></div>
          <div class="link-text hide-on-mobile"><a target="_blank" class="white" href="http://www.tiereleven.com">www.tiereleven.com</a></div>
          <div class="link-text mobile"><a target="_blank" class="white" href="http://www.tiereleven.com">Website</a></div>
        </div> -->
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="content-snare.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="foddie.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <? echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
