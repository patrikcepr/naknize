<?php
//Allow config
define('__CONFIG__', true);
//Require the config
require_once "assets/includes/config.php";

//Create selecet query typ Jidla
$foodType = $con->prepare('SELECT * FROM foodtype');
$foodType->execute();

//Create selecet query typ Napoje
$drinkType = $con->prepare('SELECT * FROM drinktype');
$drinkType->execute();

//header
require_once "assets/includes/header.php";
?>

<!-- html part -->
<body data-spy="scroll" data-target="#navbar-main">
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar-main">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="assets/images/LOGO_naknizeci9w.png" alt="Na Knižecí">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="index.php#onas">O nás <span class="sr-only">(current)</span></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurace <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <!-- zatahovani menu -->
              <!-- data-toggle="collapse" data-target=".in" -->
              <li><a href="#jidelni">Jídelní lístek</a></li>
              <li><a href="#galerierest">Galerie</a></li>
              <li><a href="#napojovy">Nápojový lístek</a></li>
            </ul>
          </li>
          <!-- <li><a href="index.php#penzion">Penzion</a></li> -->
          <li><a href="stay.php">Ubytování</a></li>
          <li><a href="index.php#historie">Historie</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php#kontakt">Kontakt</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container" id="jidelni">
    <div class="row">
      <div class="col-xs-12">
        <h1>Restaurace</h1>
        <p>
          <a href="restaurace.php#galerierest">Restaurace</a> má celkovou kapacitu 130 míst, z čehož je 60 míst uvnitř a zbylých 70 míst nabízí stylová venkovní terasa ve vnitrobloku.
          Denně nabízíme výběr z poledního menu s hotovými jídly a saláty. Po obědech pak speciality z našeho stálého jídelního lístku.
        </p>
      </div>
    </div>
  </div>
  <!-- jidelni listek tabs-->
  <div class="container" id="jidlo">
    <div class="row">
      <div class="col-xs-12">
        <h1>Jídelní lístek</h1>
          <ul id="tabJidlo" class="nav nav-tabs nav-justified" role="tablist">
            <?php
            # prepare tabs
            $in='active';
            while ($tabFoodType = $foodType->fetch(PDO::FETCH_ASSOC)) {
              $id=$tabFoodType['foodtype_id'];
              if ($id!=1) {
                # code...
                $in='';
              }
              $tabs= '<li role="presentation" class="'.$in.'"><a href="#tab'.$id.'" aria-controls="tab'.$id.'" role="tab" data-toggle="tab">'.$tabFoodType['foodTypeCz'].'</a></li>';
              //Free foods set
              echo $tabs;
            }
            ?>
          </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <?php
          // prepare query new way
          $foodType= $con->prepare('SELECT * FROM foodtype');
          $foodType->execute();

          # prepare food tables
          $in='in active';
          while ($rowFoodType = $foodType->fetch(PDO::FETCH_ASSOC)) {
            $i=$rowFoodType['foodtype_id'];
            $foodQuery=$con->prepare("SELECT * FROM food WHERE food.foodType=$i");
            $foodQuery->execute();
            if ($i!=1) {
              # set in to in
              $in='';
            }
            $output = '<div role="tabpanel" class="tab-pane fade '.$in.'" id="tab'.$i.'">';
            $output .='<table class="table table-striped "><tbody>';
            while ($rowF = $foodQuery->fetch(PDO::FETCH_ASSOC)) {
              # food table
              $output .='<tr><td>'.$rowF['foodNameCz'].'</td><td>'.$rowF['weight'].'&nbsp;g</td><td>'.$rowF['foodPrice'].' Kč</td></tr>';
            }
            $output .='</tbody></table></div>';

            //Free foods set
            // $foodQuery->close();

            echo $output;
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- galerie -->
  <div class="container-fluid leftright" id="galerierest">
    <div class="container">
      <div class="row">
        <h1>Fotogalerie</h1>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_104448.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_104448.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_104507.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_104507.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_104541.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_104541.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_104716.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_104716.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_104941.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_104941.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105148.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105148.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105328.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105328.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105357.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105357.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105409.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105409.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105441.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105441.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105533.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105533.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
          <a href="assets/images/restaurace/IMG_20170718_105833.jpg" data-toggle="lightbox" data-gallery="Restaurace" data-title="Restaurace Na Knížecí">
            <img src="assets/images/restaurace/IMG_20170718_105833.jpg" alt="Restaurace" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- napojovy listek tabs -->
  <div class="container" id="napojovy">
    <div class="row">
      <div class="col-xs-12">
        <h1>Nápojový lístek</h1>
          <ul id="tabNapoje" class="nav nav-tabs nav-justified" role="tablist">
            <?php
            #prepare tabs
            $in = 'active';
            while ($tabDrinkType = $drinkType->fetch(PDO::FETCH_ASSOC)) {
              $id=$tabDrinkType['drinktype_id'];
              if ($id!=1) {
                # code...
                $in='';
              }
              $tabs= '<li role="presentation" class="'.$in.'"><a href="#taD'.$id.'" aria-controls="tab'.$id.'" role="tab" data-toggle="tab">'.$tabDrinkType['drinkTypeCz'].'</a></li>';
              // print tabs
              echo $tabs;
            }
            ?>
          </ul>
        <!-- tab panes -->
        <div class="tab-content">
          <?php
          // prepare query new way
          $drinkType= $con->prepare('SELECT * FROM drinktype');
          $drinkType->execute();

          #prepare drink tables
          $in='in active';
          while ($rowDrinkType = $drinkType->fetch(PDO::FETCH_ASSOC)) {
            $i=$rowDrinkType['drinktype_id'];
            $drinkQuery=$con->prepare("SELECT * FROM drink WHERE drink.drinkType=$i");
            $drinkQuery->execute();
            if ($i!=1) {
              # set in to in
              $in='';
            }
            $output = '<div role="tabpanel" class="tab-pane fade '.$in.'" id="taD'.$i.'">';
            $output .='<table class="table table-striped "><tbody>';
            while ($rowD = $drinkQuery->fetch(PDO::FETCH_ASSOC)) {
              # drink table
              $output .='<tr><td>'.$rowD['drinkNameCz'].'</td><td>'.$rowD['content'].'</td><td>'.$rowD['drinkPrice'].' Kč</td></tr>';
            }
            $output .='</tbody></table></div>';

            //Free foods set
            //$drinks->close();

            echo $output;
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php require_once "assets/includes/footer.php" ?>
</body>
</html>
