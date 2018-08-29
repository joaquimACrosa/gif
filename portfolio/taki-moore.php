<?php
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Million Dollar Coach - GIF Design Studios</title>

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
    background-color: #fbcc47;
  }
  .txt-label{
    color: #fbcc47;
  }
  .project-text-color{
      color: #fbcc47;
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
<body class="single-portfolio no-hijack project-taki-moore">
<?php echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_20 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div class="white">Keep Scrolling</div>
              </a>
            </div></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-MillionDollarCoach-01.jpg" alt="MillionDollarCoach" class="full-width"></div>
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
            <p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Taki Moore</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">UI/UX:</p>
            <p class="text">João Loureiro<br />Rúben Silva</p>
            <p class="txt-label">Development:</p>
            <p class="text">José Freitas</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev">
              <a href="tier11.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
              <div>Previous</div>
          </div>
          <div class="nav-next">
              <a href="naomi-whittle.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
              <div style="text-align:center;">Next</div>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12" ><img src="../img/GIF-MillionDollarCoach-02.jpg" alt="MillionDollarCoach" class="full-width"></div>
      <div class="cell col-12 table video-testimonial testimonial">
          <div class="video-testimonial-block">
              <div class="video-testimonial-img">
                  <div class="video-testimonial-btn">
                      <svg width="100px" height="100px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-toggle="modal" data-src="https://player.vimeo.com/video/76979871" data-target="#myModal" data-youtube="MlCOdJuRh7Q" class="video-btn">
                          <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                          <title>Play</title>
                          <desc>Created with Sketch.</desc>
                          <defs></defs>
                          <g id="Play" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g id="Group-2">
                                  <circle id="play-circle" fill="#FF9C1A" cx="50" cy="50" r="50"></circle>
                                  <path d="M68.4932459,49.6788178 L39.2338308,65.8391011 C38.8959946,66.0288795 38.6059003,66.0507767 38.3635394,65.9047933 C38.1211786,65.7588099 38,65.4960437 38,65.1164868 L38,32.8835119 C38,32.5039567 38.1211786,32.24119 38.3635394,32.0952068 C38.6059003,31.9492237 38.8959946,31.9711197 39.2338308,32.1608997 L68.4932459,48.3211824 C68.8310836,48.5109575 69,48.7372309 69,48.9999976 C69,49.2627692 68.8310836,49.4890426 68.4932459,49.6788178 Z" id="Fill-1" fill="#FFFFFF"></path>
                              </g>
                          </g>
                      </svg>
                  </div>
                  <div class="video-thumb">
                      <img src="../img/GIF-Portfolio-MillionDollarCoach-VideoTestimonial.jpg" alt="MillionDollarCoach" class="full-width">
                  </div>
              </div>
          </div>
      </div>
      <div class="col col-12" ><img src="../img/GIF-MillionDollarCoach-04.jpg" alt="MillionDollarCoach" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-MillionDollarCoach-05.jpg" alt="MillionDollarCoach" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-MillionDollarCoach-06.jpg" alt="MillionDollarCoach" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <div class="link-icon"><a class="isDisabled" href=""><i class="fa fa-behance inactive" aria-hidden="true"></i></a></div>
          <div class="link-text isDisabled">Behance</div>
        </div>
        <div class="col col-3">
          <div class="link-icon"><a target="_blank" class="white" href="http://www.takimoore.com"><i class="fa fa-link active" aria-hidden="true"></i></a></div>
          <div class="link-text hide-on-mobile"><a target="_blank" class="white" href="http://www.takimoore.com">www.takimoore.com</a></div>
          <div class="link-text mobile"><a target="_blank" class="white" href="http://www.takimoore.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="tier11.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="naomi-whittle.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <?php echo getFooter(); ?>
      <!--END FOOTER-->

      <?php echo videoModal(); ?>

    </div>
</main>
</div>

</body>
</html>
