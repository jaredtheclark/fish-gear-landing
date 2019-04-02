<?php
//soon

session_start();


 ?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Fish Gear | Gear for Anglers</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">


  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fff">

  <?php
  /*

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126294441-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-126294441-1');
  </script>

  */
?>

</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


  <div class="container">
    <div class="hero grid">
      <div class="white-bar">
        <div class="logo">
          <?php echo file_get_contents("img/fish-gear.svg"); ?>
        </div>
        <div class="device-image">
          <img src="img/device.png" />
        </div>
      </div>

      <div class="content">
        <h1>The Best Gear From Your Community of Anglers</h1>
        <p>Buy and sell your gear with ease on the premier resale marketplace for anglers. Get the gear you need for prices you love.</p>



        <?php if (!$contact_tried) { ?>


        <div class="signup-form">
          <form method="POST" action="#contact">

            <input type="hidden" name="contact_form" value="DummyVal" />

            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email Address">
              <label for="exampleInputEmail1">Email Address</label>
            </div>

            <div class="">
              <button type="submit" class="" href="#contact">Send Message</button>
            </div>

          </form>
        </div>


        <?php }else if ($contact_tried && !$contact_sent){ ?>
        <div class="wrap-the-scoop-copy">
          <h2 class="gray">Oops!</h2>
        </div>
        <p class="wrap-benefit-copy">It looks like something went wrong. Maybe try emailing us at <a href="mailto:hello@sundae.io">hello@sundae.io</a></p>
        <?php }else{ ?>
        <div class="wrap-the-scoop-copy">
          <h2 class="gray">Thanks!</h2>
        </div>
        <p class="wrap-benefit-copy">We'll be in touch soon.</p>
        <?php } ?>



      </div>
    </div>
  </div>





  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
  </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>


</body>

</html>
