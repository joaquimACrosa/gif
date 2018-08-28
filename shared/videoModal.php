<?php

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
    $('.header-play-button').click(function() {
        var videoSrc = $(this).data( 'src' );
        $('.modal-video-frame').attr('src', videoSrc);

        $( '#myModal' ).fadeIn( 600, function() {
        });

            $('body').addClass( 'no-scroll' );

        });

    $('.close-body').click(function() {
        $( '#myModal' ).fadeOut( 'slow', function() {
          // Animation complete.
        });
        $('.modal-video-frame').attr('src', '');
        $("body").removeClass( "no-scroll" );
    });

    $('#myModal').click(function() {
        $( '#myModal' ).fadeOut( 'slow', function() {
          // Animation complete.
        });
        $('.modal-video-frame').attr('src', '');
        $('body').removeClass( 'no-scroll' );
    });
    // document ready
});
</script>


?>
