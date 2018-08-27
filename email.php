<?php
    require_once 'vendor/autoload.php';
    //Transport
      $smtp_host_ip = gethostbyname('mail.gifdesignstudios.com'); // gethostbyname FOR DYNAMIC IP
      $transport = (new Swift_SmtpTransport($smtp_host_ip, 587))
        ->setUsername('joaquim@gifdesignstudios.com')
        ->setPassword('')
      ;
    //SwiftMailer Instance
      $mailer = new Swift_Mailer($transport);
    //Content
      // $content = "This is a test message";
    // grab POST data
      $email = $_POST['email'];
      $message = $_POST['message'];
      $body = "<br />" . "<br />".
              "Recebeu uma mensagem no website gifdesignstudios"."<br />".
              "<br />" .
              "----------"."<br />".
              "<br />" .
              "Email: " . $email .
              "<br />" . "<br />" .
              "Mensagem: " . $message;
    //Message
      $message = (new Swift_Message('Nova mensagem enviada em gifdesignstudios'))
          ->setFrom(["hello@gifdesignstudios.com" => "GIF Geral"])
          ->setTo(["joaquim@joanagalvao.com" => "Geral"])
          ->setBody($body, 'text/html')
          // ->addPart(strip_tags($content), 'text/plain')
          ;
    //Send Message
      $result = $mailer->send($message);

      header("location:contact--success.php");

?>
