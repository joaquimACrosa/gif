<?php
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Alex Shalman - GIF Design Studios</title>

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
    background-color: #29bab5;
  }
  .txt-label{
    color: #29bab5;
  }
  .project-text-color{
      color: #29bab5;
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
    <?php echo scriptsHead(); ?>
    <?php echo getAnalytics(); ?>
</head>
<body class="single-portfolio no-hijack project-alex-shalman">
<?php echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_11 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div class="white">Keep Scrolling</div>
              </a>
            </div>
        </div>
            <div class="col col-12 hide-on-desktop"><img src="../img/GIF-AlexShalman-01.png" alt="AlexShalman" class="full-width"></div>
            <!--END PROJECT HEADER-->

            <!--PROJECT INFO-->
            <div class="portfolio-info-container" id="anchor">
              <div class="single-portfolio-info">
                <div class="portfolio-summary col-9">
                  <p class="txt-label">Sumary:</p>
                  <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
                <div class="portfolio-details col-3">
                  <p class="txt-label">Client:</p>
                  <p class="text">Alex Shalman</p>
                  <p class="txt-label">Art direction:</p>
                  <p class="text">Joana Galvão</p>
                  <p class="txt-label">Branding:</p>
                  <p class="text">João Loureiro</p>
                  <p class="txt-label">UI/UX Design:</p>
                  <p class="text">Rúben Silva</p>
                  <p class="txt-label">Animations:</p>
                  <p class="text">Diana Santa</p>
                  <p class="txt-label">Development:</p>
                  <p class="text">André Bento / José Freitas</p>
                </div>
              </div>
              <!--PORTFOLIO NAV-->
              <div class="project-nav">
                <div class="nav-prev"><a href="naturally-made-essentials.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
                <div class="nav-next"><a href="peter-shankman.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"><div>Next</div></a></div>
              </div>
            </div>
            <!--END PROJECT INFO-->

            <div class="col col-12" ><img src="../img/GIF-AlexShalman-02.png" alt="AlexShalman" class="full-width"></div>
            <div class="cell col-6 table testimonial">
              <div class="square-responsive square-center">
                  <p>Joana Galvao and her team at GIF Design Studios were a crucial part in branding and opening my business.
                      They searched deep down to understand what my brand was about, and worked tirelessly to make it into a reality both with elements for my website, as well as physical elements within the office.
                      I highly recommend them and will be using them again for future projects for sure.</p>
                  <p class="bold project-text-color">Dr. Alex Shalman, NYC Cosmetic</p>
              </div>
            </div>
            <div class="cell col-6 desktop" >
              <div class="square-responsive square-image1"></div>
            </div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-04.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-05.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-06.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-07.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-08.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-09.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-10.png" alt="AlexShalman" class="full-width"></div>
            <div class="col col-12" ><img src="../img/GIF-AlexShalman-11.png" alt="AlexShalman" class="full-width"></div>


            <!-- FOOTER -->

            <div class="project-links project-color" >
              <div class="col col-3"></div>
              <div class="col col-3">
                <div class="link-icon"><a class="isDisabled" href=""><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
                <div class="link-text isDisabled">Behance</div>
              </div>
              <div class="col col-3">
                <div class="link-icon"><i class="fa fa-link active" aria-hidden="true"></i></div>
                <div class="link-text hide-on-mobile"><a target="_blank" class="white" href="http://www.alexshalman.com">www.alexshalman.com</a></div>
                <div class="link-text mobile"><a target="_blank" class="white" href="http://www.alexshalman.com">Website</a></div>
              </div>
              <div class="col col-3"></div>
            </div>
            <div class="footer-project-nav project-nav" >
              <div class="nav-prev"><a href="naturally-made-essentials.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
              <div class="nav-next"><a href="peter-shankman.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
            </div>

      <?php echo getFooter(); ?>
      <!--END FOOTER-->

    </div>
</main>
</div>

</body>
</html>
