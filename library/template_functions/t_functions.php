<?php

function Template($file, $array = array() ) {
    if (file_exists($file)) {
        $output = file_get_contents($file);
		while (list($key, $val) = each($array)) {
		    $replace = '<!--['.$key.']-->';
			$output = str_replace($replace, $val, $output);
		}
		return $output;
    }
}
function teste(){?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php }
function scriptsHead(){
    $output = "<!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html itemscope itemtype='//schema.org/Article'>

<!-- Place this data between the <head> tags of your website -->
<title>GiF Design Studios - Web Design and Web Development</title>
<meta name='description' content='We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go.' />

<!-- Schema.org markup for Google+ -->
<meta itemprop='name' content='GiF Design Studios - Web Design and Web Development'>
<meta itemprop='description' content='We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go.'>
<meta itemprop='image' content='//gifdesignstudios.com/img/GIF-FB-Header.jpg'>

<!-- Twitter Card data -->
<meta name='twitter:card' content='summary_large_image'>
<meta name='twitter:site' content='@gifdesignstudios'>
<meta name='twitter:title' content='GiF Design Studios - Web Design and Web Development'>
<meta name='twitter:description' content='We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go.'>
<meta name='twitter:creator' content='@gifdesignstudios'>
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name='twitter:image:src' content='https://gifdesignstudios.com/img/GIF-FB-Header.jpg'>

<!-- Open Graph data -->
<meta property='og:title' content='GiF Design Studios - Web Design and Web Development' />
<meta property='og:type' content='article' />
<meta property='og:url' content='https://gifdesignstudios.com/' />
<meta property='og:image' content='https://gifdesignstudios.com/img/GIF-FB-Header.jpg' />
<meta property='og:description' content='We want our design to help your business evolve into your big vision. So our process starts with a deep dive into your 5-year business goals to make sure that, from Day 1, your brand is where you want to go.' />
<meta property='og:site_name' content='GiF Design Studios, i.e. Moz' />



<script rel='text/javascript'>
        $(function() {
  $(\"[href*='#']:not([href='#'])\").click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
        </script>
        <script type='text/javascript'>
            $(window).load(function() {
                $('.loader').fadeOut('slow');
            })
        </script>";

    return $output;

}

function getHeader(){

$output = '<header>
        <div class="loader"></div>
        <div class="logo" id="logo">
            <a href="/"></a>
        </div>
        <div id="menu_toggle_container">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div id="circle"></div>
        <div id="menu_container" style="display:none;">
            <nav>
                <ul>
                    <li>
                        <a class="link link--kukuri" data-letters="Home" href="/">Home</a>
                    </li>
                    <li>
                        <a class="link link--kukuri" data-letters="Portfolio" href="https://www.gifdesignstudios.com/portfolio/">Portfolio</a>
                    </li>
                    <li>
                        <a class="link link--kukuri" data-letters="Studio" href="/studio">Studio</a>
                    </li>
                    <li>
                        <a class="link link--kukuri" data-letters="Contact" href="/contact">Contact</a>
                    </li>
                    <li class="hide-on-desktop">
                        <a class="link link--kukuri" data-letters="Hire Us.php" href="/hire-us">Hire Us</a>
                    </li>
                </ul>
            </nav>
            <footer>
                <div class="footer-container">
                    <div class="col-4 footer-text">
                        <div class="vertical-center">
                            <div>
                                Spreading magic from <span class="bold">Porto</span> to the world.
                            </div>
                        </div>
                    </div>
                    <div class="col-4 align-center footer-social-row">
                        <div class="vertical-center">
                            <div class="social-icons">
                                <a target="_blank" href="http://www.behance.net/gifdesignstudios"><i aria-hidden="true" class="fa fa-behance"></i></a><a target="_blank" href="http://www.facebook.com/gifdesignstudios"><i aria-hidden="true" class="fa fa-facebook"></i></a><a target="_blank" href="http://www.instagram.com/gifdesignstudios"><i aria-hidden="true" class="fa fa-instagram"></i></a><a target="_blank" href="https://www.linkedin.com/company/gif-design-studios"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 desktop">
                        <a class="btn btn-orange dektop" href="/hire-us.php">Hire Us!</a>
                    </div>
                </div>
            </footer>
        </div>
    </header>';
return $output;
}

function portfolioHead(){
    $output = '  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" media="screen" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/typed.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/typed.min.js"></script>
  <script src="../js/squareResponsive.js"></script>';
    return $output;
}
function getFooter(){
    $output = '<footer class="pages-footer">
        <div class="footer-container">
            <div class="col-4 footer-text">
                <div class="vertical-center">
                    <div>
                        Spreading magic from <span class="bold">Porto</span> to the world.
                    </div>
                </div>
            </div>
            <div class="col-4 align-center footer-social-row">
                <div class="vertical-center">
                    <div class="social-icons">
                        <a target="_blank" href="http://www.behance.net/gifdesignstudios"><i aria-hidden="true" class="fa fa-behance"></i></a><a target="_blank" href="http://www.facebook.com/gifdesignstudios"><i aria-hidden="true" class="fa fa-facebook"></i></a><a target="_blank" href="http://www.instagram.com/gifdesignstudios"><i aria-hidden="true" class="fa fa-instagram"></i></a><a target="_blank" href="https://www.linkedin.com/company/gif-design-studios"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-4 desktop">
                <a class="btn btn-orange dektop" href="/hire-us">Hire Us!</a>
            </div>
        </div>
    </footer>';

    return $output;
}
function getAnalytics(){
    $output = "
    <!-- Hotjar Tracking Code for http://gifdesignstudios.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:293965,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script>";
    $output .= "
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84550396-1', 'auto');
  ga('send', 'pageview');

</script>";
    return $output;

}

function videoModal(){
    $output = '
    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-body">
              <div class="close-body">
                  <i class="fas fa-times"></i>
              </div>
              <iframe class="modal-video-frame" src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
          </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".video-btn").click(function() {
            var videoSrc = $(this).data( "src" );
            $(".modal-video-frame").attr("src", videoSrc);

            $( "#myModal" ).fadeIn( 600, function() {
            });

                $("body").addClass( "no-scroll" );

            });

        $(".close-body").click(function() {
            $( "#myModal" ).fadeOut( "slow", function() {
              // Animation complete.
            });
            $(".modal-video-frame").attr("src", "");
            $("body").removeClass( "no-scroll" );
        });

        $("#myModal").click(function() {
            $( "#myModal" ).fadeOut( "slow", function() {
              // Animation complete.
            });
            $(".modal-video-frame").attr("src", "");
            $("body").removeClass( "no-scroll" );
        });
        // document ready
    });
    </script>';
    return $output;

}

?>
