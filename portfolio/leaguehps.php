<?php
include '../library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>League of Heroic Public Speakers - GIF Design Studios</title>

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
    $projectColor = "#b9a152";

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
<body class="single-portfolio no-hijack project-leaguehps">
<?php echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--PROJECT HEADER-->
      <div id="single-project-cover" class="project_25 desktop">
          <div class="keepScrollingContainer">
              <a href="#anchor">
                  <div class="animated bounce">
                      <img src="../img/GIF-Scroll-@2x.png" width="25">
                  </div>
                  <div class="white">Keep Scrolling</div>
              </a>
            </div></div>
      <div class="col col-12 hide-on-desktop"><img src="../img/GIF-LeagueHPS-01.jpg" alt="LeagueHPS" class="full-width"></div>
      <!--END PROJECT HEADER-->

      <!--PROJECT INFO-->
      <div class="portfolio-info-container" id="anchor">
        <div class="single-portfolio-info">
          <div class="portfolio-summary col-9">
            <p class="txt-label">Sumary:</p>
            <p class="text">
                Michael and Amy Port, who together run the Heroic Public Speaking school, were having some troubles nailing the look and feel for their new Speaker Bureau, and came to us to see if we could help. They needed a brand and website that was high end, felt luxurious and established and that at the same time, created intrigue.
                <br />According to them, we nailed what they were after as you can see below Michael Ports’s video testimonial. His words, not ours.
            <p>
          </div>
          <div class="portfolio-details col-3">
            <p class="txt-label">Client:</p>
            <p class="text">Michael & Amy Port</p>
            <p class="txt-label">Art direction:</p>
            <p class="text">Joana Galvão</p>
            <p class="txt-label">Branding:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">UI/UX:</p>
            <p class="text">João Loureiro</p>
            <p class="txt-label">Development:</p>
            <p class="text">José Freitas</p>
          </div>
        </div>
        <!--PORTFOLIO NAV-->
        <div class="project-nav">
          <div class="nav-prev">
              <a href="nicholas-kusmich.php"><img width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"></a>
              <div>Previous</div>
          </div>
          <div class="nav-next">
              <a href="rythm24.php"><img width="43" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Right"></a>
              <div style="text-align:center;">Next</div>
          </div>
        </div>
      </div>
      <!--END PROJECT INFO-->

      <div class="col col-12" ><img src="../img/GIF-LeagueHPS-02.jpg" alt="LeagueHPS" class="full-width"></div>
      <div class="cell col-12 table video-testimonial testimonial">
          <div class="video-testimonial-block">
              <div class="video-testimonial-img">
                  <div class="video-testimonial-btn">
                      <svg width="100px" height="100px" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-toggle="modal" data-src="https://player.vimeo.com/video/286887607?color=B9A152&title=0&byline=0&portrait=0" data-target="#myModal" data-youtube="MlCOdJuRh7Q" class="video-btn">
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
                      <img src="../img/GIF-Portfolio-LeagueOfHPS-VideoTestimonial.jpg" alt="LeagueHPS" class="full-width">
                  </div>
              </div>
          </div>
      </div>
      <div class="col col-12" ><img src="../img/GIF-LeagueHPS-04.jpg" alt="LeagueHPS" class="full-width"></div>
      <div class="col col-12" ><img src="../img/GIF-LeagueHPS-05.jpg" alt="LeagueHPS" class="full-width"></div>

      <!--FOOTER-->
      <div class="project-links project-color">
        <div class="col col-3"></div>
        <div class="col col-3">
          <a class="link-block" href="https://www.behance.net/gallery/69592519/League-of-Heroic-Public-Speakers" target="_blank"><div class="link-icon"><i class="fa fa-behance white" aria-hidden="true"></i></div>
          <div class="link-text white">Behance</div></a>
        </div>
        <div class="col col-3">
          <div class="link-icon"><a target="_blank" class="white" href="http://www.leagueofspeakers.com"><i class="fa fa-link active" aria-hidden="true"></i></a></div>
          <div class="link-text hide-on-mobile"><a target="_blank" class="white" href="http://www.leagueofspeakers.com">www.leagueofspeakers.com</a></div>
          <div class="link-text mobile"><a target="_blank" class="white" href="http://www.leagueofspeakers.com">Website</a></div>
        </div>
        <div class="col col-3"></div>
      </div>
      <div class="footer-project-nav project-nav">
        <div class="nav-prev"><a href="nicholas-kusmich.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowLeft-White-@2x.png" alt="Left"><img class="grey-arrow mobile" width="43" src="../img/GIF-ArrowLeft-Grey-@2x.png" alt="Left"><div>Previous</div></a></div>
        <div class="nav-next"><a href="rythm24.php"><img class="white-arrow hide-on-mobile" width="43" src="../img/GIF-ArrowRight-White-@2x.png" alt="Right"><img width="43" class="grey-arrow mobile" src="../img/GIF-ArrowRight-Grey-@2x.png" alt="Left"><div>Next</div></a></div>
      </div>
      <?php echo getFooter(); ?>
      <!--END FOOTER-->

      <?php echo videoModal(); ?>

    </div>
</main>
</div>

</body>
</html>
