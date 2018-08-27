<?
include 'library/template_functions/t_functions.php';

?>
<?php include ('shared/start.php');?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<title> Contact - GIF Design Studios</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/jquery.fullpage.css" />
<link rel="stylesheet" href="css/styles.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/csshake.css">
<link rel="stylesheet" type="text/css" href="css/typed.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fullscreen-gallery.css" />

<!-- CONTACT SCRIPTS -->

<script type="text/javascript">
  $(document).ready(function() {
      $( "#contactSendMailBtn" ).on('click', function(e){
          e.preventDefault();
          var email = $('#contactsInputMail').val();
          var message = $('#textarea-contact').val();

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        if (email!='' && message!=''){
        $.ajax({
		    type: "POST",
			url: "library/send-mail.php",
				 data: { name: "John", email: email, message: message },
					success: function(msg) {
                        $('.s-message').show();
						//DEBUG
						//console.log(msg);

					}
            });
        }else{
            if (message==''){
                $('.message-error').show();
            }
            $('.email-error').show();
        }
        });
      $('#fullpage').fullpage({
          sectionsColor: ['#FFFFFF'],
          anchors: ['Contacts'],
          menu: '#menu',
          css3: true,
          scrollingSpeed: 1000
      });

  });

    $(function() {
            $('textarea').focus(function() {
                $(this).prev().css("visibility", "hidden");
          });
          $('textarea').focusout(function() {
              if ($(this).val()==''){
                  $(this).css("visibility", "visible");
              }

          });

      jQuery.each(jQuery('textarea[data-autoresize]'), function() {
      var offset = this.offsetHeight - this.clientHeight;

      var resizeTextarea = function(el) {
          jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
      };
      jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
  });
      cbpBGSlideshow.init();
    });

</script>

<?php include ('shared/scripts.php');?>

</head>
<body class="<?= $basename ?>">

<?php include ('shared/header.php');?>

<div id="wrapper">

    <main id="contact-page">
        <div class="contactpage-header"><h1 class="orange">Contact Us</h1></div>

        <div class="fullpage-wrapper">

            <div id="contact-adress">
                <a href="mailto:info@gifdesignstudios.com"><p>info@gifdesignstudios.com</p></a>
                <p>Praceta Adelino Amaro da Costa, 728, 8E</p>
                <p>Porto -- Portugal</p>
            </div>

            <div id="contacts-form">
                <p>Dear GIF Design Studios,</p>
                <form id="formContacts" action="/library/contact-form-gif.php">
                <div id="message-gif">
                    <textarea name="message" type="text"></textarea>
                </div>

                <p>We just need your email so we can get back to you:</p>
                 <label>
                     <div>
                          <input type="email" name="email" >
                          <div style="display:none;color:red;margin-top:20px;" class="message-error">*Insert your message</div>
                          <div style="display:none;color:red;" class="email-error">*Insert your email</div>
                     </div>
                </label>
                <label>
                    <div class="s-message" style=" display:none;  margin-left: 20px;text-transform:uppercase;    font-family: Cera-Regular, Helvetica, Arial, sans-serif;">thank you for your contact. We'll get back to you shortly.</div>
                    <input id="contactSendMailBtn" class="fromLeft btn btn-white-orange" type="submit" value="Send Message" />
                    <input type="hidden" name="button_pressed" value="1" />
                </label>

                </form>

            </div>
        </div>
    </div>




    </div>

</main>
</div>
<?php include ('shared/footer-contact.php');?>
<script src="js/jquery.imagesloaded.min.js"></script>


</body>
</html>
