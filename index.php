<?php
//Allow config
define('__CONFIG__', true);
//Require the config
require_once "assets/includes/config.php";

require_once "assets/includes/header.php";

?>

<!-- html part -->
<body data-spy="scroll" data-target="#navbar-main">
  <!-- navbar z php -->
  <?php include "assets/includes/navbar.php"; ?>
  <div class="container-fluid">
    <div class="row">
    <div id="carouselIndex" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndex" data-slide-to="1"></li>
        <li data-target="#carouselIndex" data-slide-to="2"></li>
        <li data-target="#carouselIndex" data-slide-to="3"></li>
        <li data-target="#carouselIndex" data-slide-to="4"></li>
        <li data-target="#carouselIndex" data-slide-to="5"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/images/jidlo/IMG_7940-2.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/jidlo/IMG_7954.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/jidlo/IMG_7980.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/jidlo/IMG_7998.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/jidlo/IMG_8018-2.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
        <div class="item">
          <img src="assets/images/jidlo/IMG_8036.jpg" alt="Na Knížecí">
          <div class="carousel-caption">
            Navštivte naší restauraci. Polední menu najdete <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">zde.</a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carouselIndex" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carouselIndex" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  </div>
  <div class="container-fluid" id="onas">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-offset-2 col-md-8">
          <h1>Restaurace a penzion Na&nbsp;Knížecí - Čimelice</h1>
        </div>
      </div>
      <div class="row">
        <div class="onas__blok col-xs-12 col-sm-4">
          <span class="fas fa-home fa-10x"></span>
          <p class="onas__blok-text">
            Penzion s restaurací se nachází v centru malebné obce Čimelice na hlavním tahu Praha-Písek, Strakonice a to přímo na komunikaci R4,
            80 km od Prahy.
          <br>
          Denní menu najdete na našich <a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank">facebookových stránkách.</a></p>
        </div>
        <div class="onas__blok col-xs-12 col-sm-4">
          <span class="fas fa-utensils fa-10x"></span>
          <p class="onas__blok-text">
            <a href="restaurace.php#galerierest">Restaurace</a> má celkovou kapacitu 130 míst, z čehož je 60 míst uvnitř a zbylých 70 míst nabízí stylová venkovní terasa ve vnitrobloku.
            Denně nabízíme výběr z poledního menu s hotovými jídly a saláty. Po obědech pak speciality z našeho stálého jídelního lístku.
          </p>
        </div>
        <div class="onas__blok col-xs-12 col-sm-4">
          <span class="fas fa-bed fa-10x"></span>
          <p class="onas__blok-text">
            Celková kapacita penzionu je 21 lůžek rozdělených do 6 pokojů s vlastním sociálním zařízením, samozřejmostí je wifi připojení.<br>
          <a href="stay.php">Chcete se u nás ubytovat?</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="historie">
    <div class="row">
      <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-lg-6 col-lg-offset-3">
        <h1>Historie</h1>
        <p>
          Již v roce 1775 na tomto místě stálo pohostinství, ovšem z této doby se nedochoval žádný doklad o tom, jak bylo velké a jak vypadalo.
          V roce 1862 získal objekt do svého držení rod Schwarzenbergů a tento následně přestavěl do současné podoby. Rod Schwarzenbergů objekt
          vlastnil ještě tři desetiletí. Po nich se vystřídali ještě další dva majitelé. Restaurace Na Knížecí v Čimelicích byla díky své poloze
          vždy vyhledávanou a navštěvovanou. Byla to zájezdní restaurace a její součástí byly i maštale pro ustájení tažných koní. Horní patro
          sloužilo pro přespávání kočích a dalších cestujících. V letech 1938-41 byla za objektem postavena budova, která sloužila jako taneční sál.
          V roce 1948 byla restaurace se sálem znárodněna. Místo tanečního sálu se vytvořilo kino a restauraci provozovala Jednota Milevsko.
          V devadesátých letech minulého století byl celý objekt vrácen v restituci vnukovi sestry poslední majitelky, který ho následně prodal
          jinému majiteli. V letech 1951-1982 byla restaurace také hojně navštěvována studenty střední průmyslové školy filmové, která sídlila
          v Čimelicích ve Schwarzenberském zámečku, který se nachází v čimelickém zámeckém parku.
        </p>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="kontakt">
    <!-- <div class="row"> -->
      <p class="kontakt-text">
        <span class="glyphicon glyphicon-phone-alt">  </span> +420 601 338 500 <br>
        <span class="glyphicon glyphicon-envelope">  </span><a href="mailto:info@naknizeci.cz?subject=Zprava%20z%20webu"> info@naknizeci.cz</a><br>
        <span class="fab fa-facebook-square">  </span><a href="https://www.facebook.com/cimelicenaknizeci/" target="_blank"> Restaurace a penzion Na Knížecí</a><br>
        <span class="glyphicon glyphicon-map-marker">  </span><a href="https://www.google.cz/maps/place/Penzion+Na+Kn%C3%AD%C5%BEec%C3%AD/@49.4654889,14.0674215,17.84z/data=!4m5!3m4!1s0x470b40484cb0e36d:0x42fe8ad64ddba2db!8m2!3d49.4654705!4d14.069267"
        target="_blank">Čimelice 20, 398 04 Čimelice</a><br>
        &copy; <?php echo date('Y'); ?> Restaurace a penzion Na&nbsp;Knížecí
      </p>
    <!-- </div> -->
  </div>
    <?php require_once "assets/includes/footer.php" ?>
</body>
</html>
