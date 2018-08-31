<?php
include 'library/template_functions/t_functions.php';

?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title>Portfolio - GiF Design Studio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fullpage.css" />
  <link rel="stylesheet" href="css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/typed.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/typed.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fullpage.js"></script>
  <script type="text/javascript" src="/js/midnight.jquery.min.js"></script>
  <?php echo getAnalytics(); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      function fullscreen(){
		      jQuery('#portfolio-page-cover').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
        });
	     }
       if ($(window).width() > 992) {
          fullscreen();
       }

       $(document).ready(function(){
         // Change this to the correct selector.
         $('.logo').midnight();
         $('#menu_toggle_container').midnight();

       });

      // Run the function in case of window resize
      jQuery(window).resize(function() {
          if ($(window).width() > 992) {
              fullscreen();
          }else if ($(window).width() > 768){
              jQuery('#portfolio-page-cover').css({
                  height: 500,
                  width: '100%'
              });
          }else if ($(window).width() < 768) {
              jQuery('#portfolio-page-cover').css({
                  height: 300
              });
          }
      });


        //count animation functions
        $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 2000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    });
  </script>
 <?php echo scriptsHead(); ?>
</head>
<body class="portfolio_page no-hijack">
<?php echo getHeader(); ?>
<div id="wrapper">
  <main id="portfolio-page">
    <div>
      <!--SECTION 1-->
      <div class="header-section" id="portfolio-page-cover">
        <div class="header">
            <h2 class="white">Over 125 projects.</h2>
            <h1 class="white workwithus-h1">Over <span class="count orange">125</span> satisfied clients.</h1>

        </div>
        <div class="keepScrollingContainer">
            <div class="animated bounce">
                <a href="#scroll-anchor">
                    <img src="img/GIF-Scroll-@2x.png" width="25">
                </a>
            </div>
            <div>Keep Scrolling</div>
        </div>
      </div>
      <!--END SECTION 1-->
      <!--SECTION2-->
      <section class="rollover effect-subtle clearfix portfolio-mosaic" id="scroll-anchor">

                  <!-- item -->
                  <article class="mosaic2">
                          <div class="hover-overlay">
                              <div class="project-text">
                                <div class="project-title">Nicholas Kusmich</div>
                                <div class="project-link"><a class="btn btn-white" href="nicholas-kusmich">View Project</a></div>
                              </div>
                          </div>
                          <figure class="">
                              <img src="img/GIF-Portfolio-Cover-NicholasKusmich.jpg" alt="" class="full-width">
                          </figure>
                  </article>
                  <!-- / item -->

                  <!-- item -->
                  <article class="mosaic2">
                      <div class="hover-overlay">
                          <div class="project-text">
                            <div class="project-title">The League of Speakers</div>
                            <div class="project-link"><a class="btn btn-white" href="portfolio/leaguehps.php">View Project</a></div>
                          </div>
                      </div>
  					<figure class="">
  						<img src="img/GIF-Portfolio-Cover-LeagueOfHPS.jpg" alt="LeagueHPS" class="full-width">
  					</figure>
  				</article>
  				<!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Rythm 24</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/rythm24.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-Rythm24.jpg" alt="Rythm24" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Meal Prep Pro</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/meal-prep-pro.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-MealPrepPro.jpg" alt="MealPrepPro" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Bob Heilig</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/bob-heilig.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-BobHeilig.jpg" alt="BobHeilig" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Shaggy Supps</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/shaggy-supps.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-ShaggySupps.jpg" alt="ShaggySupps" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Tier 11</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/tier11.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-Tier11.jpg" alt="Tier11" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Taki Moore</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/taki-moore.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-MillionDollarCoach.jpg" alt="MillionDollarCoach" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Naomi Whittle</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/naomi-whittle.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-Naomi.jpg" alt="Naomi" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Alana Mitchell</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/alana-mitchell.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-AlanaMitchell.jpg" alt="AlanaMitchell" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Soul Power</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/soul-power.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-SoulPowered.jpg" alt="SoulPowered" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Andrew Hubbard</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/andrew-hubbard.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-AndrewHubbard.jpg" alt="AndrewHubbard" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Meal</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/meal.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-Meal.jpg" alt="Meal" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Nutrition Therapy Institute</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/nutrition-therapy-institute.php">View Project</a></div>
                        </div>
                    </div>
					<figure class="">
						<img src="img/GIF-Portfolio-Cover-NTI.jpg" alt="" class="full-width">
					</figure>
				</article>
				<!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Biddy Tarot</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/biddy-tarot.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-BiddyTarot.jpg" alt="" class="full-width">
                    </figure>
                </article>
                <!-- / item -->


                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Foodie</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/foodie.php">View Project</a></div>
                        </div>
                    </div>
					<figure class="">
						<img src="img/GIF-Portfolio-Cover-Foodie.jpg" alt="Foodie" class="full-width">
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->

				<article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Baby Bare Essentials</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/baby-bare-essentials.php">View Project</a></div>
                        </div>
                    </div>
					<figure class="">
						<img src="img/GIF-Portfolio-Cover-BabyBare.jpg" alt="" class="full-width">
					</figure>
				</article>
				<!-- / item -->

				<!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">The Bridal Collection Harrogate</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/the-bridal-collection-harrogate.php">View Project</a></div>
                        </div>
                    </div>
    				<figure class="">
    					<img src="img/GIF-Portfolio-Cover-TheBridalCollection.jpg" alt="" class="full-width">
    				</figure>
				</article>
				<!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Naturally Made Essentials</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/naturally-made-essentials.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-NaturallyMadeEssentials.jpg" alt="NaturallyMadeEssentials" class="full-width">
                    </figure>
                </article>
                <!-- / item -->

                <!-- item -->
                <article class="mosaic2">
                    <div class="hover-overlay">
                        <div class="project-text">
                          <div class="project-title">Alma Cheia</div>
                          <div class="project-link"><a class="btn btn-white" href="portfolio/alma-cheia.php">View Project</a></div>
                        </div>
                    </div>
                    <figure class="">
                        <img src="img/GIF-Portfolio-Cover-AlmaCheia.jpg" alt="AlmaCheia" class="full-width">
                    </figure>
                </article>
                <!-- / item -->


                <!-- <article class="mosaic2" style="background-color:#ffaa00;">
        					<figure class="">
        						<img style="visibility:hidden;" src="img/GIF-Portfolio-Cover-Nicholas-Kusmich.jpg" alt="" class="full-width">
                    <div class="overlay white">
                        <div class="project-text">
                          <div class="project-title">Have a project for us?</div>
                          <div class="project-link"><a class="btn btn-orange" href="/hire-us">Yes, actually I do!</a></div>
                        </div>
                      </div>
        					</figure>
        				</article>
        				<!-- / item -->

			</section>
      <!--END SECTION 2-->
      <!--SECTION 3-->
        <div class="bottom-section" style="position:relative;" id="section2">
          <h1 class="orange workwithus-h1">Ready to work with us?</h1>
          <p class="workwithus-p">Fill out the form below to get on a call with one of our co-founders.</p>
            <div class="btn-container">
                <a class="btn btn-orange animate" href="/hire-us">Oh Yeah!</a>
                <!-- <a class="btn hide-on-mobile btn-orange animate" href="/contact">I have a question</a> -->
            </div>
          <?php echo getFooter(); ?>
        </div>
      <!--END SECTION 3-->

    </div>
</main>
</div>

</body>
</html>
