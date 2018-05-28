<?php require_once "assets/includes/header.php" ?>
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
          <li><a href="index.php#onas">O nás</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurace <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="restaurace.php#jidelni">Jídelní lístek</a></li>
              <li><a href="restaurace.php#galerierest">Galerie</a></li>
              <li><a href="restaurace.php#napojovy">Nápojový lístek</a></li>
            </ul>
          </li>
          <!-- <li><a href="index.php#penzion">Penzion</a></li> -->
          <li class="active"><a href="stay.php">Ubytování <span class="sr-only">(current)</span></a></li>
          <li><a href="index.php#historie">Historie</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php#kontakt">Kontakt</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid leftright" id="pokoje">
      <div class="row leftright">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <h1>Penzion</h1>
          <p>Penzion nabízí celkem 21 lůžek ve 2&nbsp;dvoulůžkových, 2&nbsp;třílůžkových, jednom pěti a jednom šestilůžkovém pokoji.
          Ceník ubytování: 350,-&nbsp;Kč/noc na osobu, při obsazení pokoje 1 osobou cena 500,-&nbsp;Kč/noc. V případě dlouhodobého pobytu možná sleva.</p>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3>Prohlédněte si naše pokoje...</h3>
          <ul id="tabPokoje" class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="disabled"><a href="#">Pokoj č.1</a></li>
            <li role="presentation" class="active"><a href="#pokoj2" aria-controls="pokoj2" role="tab" data-toggle="tab">Pokoj č.2</a></li>
            <li role="presentation"><a href="#pokoj3" aria-controls="pokoj3" role="tab" data-toggle="tab">Pokoj č.3</a></li>
            <li role="presentation"><a href="#pokoj4" aria-controls="pokoj4" role="tab" data-toggle="tab">Pokoj č.4</a></li>
            <li role="presentation"><a href="#pokoj5" aria-controls="pokoj5" role="tab" data-toggle="tab">Pokoj č.5</a></li>
            <li role="presentation"><a href="#pokoj6" aria-controls="pokoj6" role="tab" data-toggle="tab">Pokoj č.6</a></li>
          </ul>
        </div>
      </div>
      <div class="tab-content tab-pokoje">
        <div role="tabpanel" class="tab-pane fade in active pokoj" id="pokoj2">
          <div class="row">
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room2/IMG_20170721_110329.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_110329.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room2/IMG_20170721_103901.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_103901.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room2/IMG_20170721_103918.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_103918.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room2/IMG_20170721_103940.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_103940.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-sm-offset-1">
              <a href="assets/images/room2/IMG_20170721_104007.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_104007.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room2/IMG_20170721_104024.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_104024.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room2/IMG_20170721_104040.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_104040.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room2/IMG_20170721_103714.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.2">
              <img src="assets/images/room2/IMG_20170721_103714.png" alt="Penzion - pokoj č.2" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade pokoj" id="pokoj3">
          <div class="row">
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room4/IMG_20170721_110319.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
              <img src="assets/images/room4/IMG_20170721_110319.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room4/IMG_20170721_110254.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
              <img src="assets/images/room4/IMG_20170721_110254.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room4/IMG_20170721_110234.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
              <img src="assets/images/room4/IMG_20170721_110234.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
              <a href="assets/images/room4/IMG_20170721_110258.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
              <img src="assets/images/room4/IMG_20170721_110258.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room4/IMG_20170721_110130.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
                <img src="assets/images/room4/IMG_20170721_110130.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room4/IMG_20170721_110140.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.3">
                <img src="assets/images/room4/IMG_20170721_110140.png" alt="Penzion - pokoj č.3" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade pokoj" id="pokoj4">
          <div class="row">
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room3/IMG_20170721_104211.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.4">
              <img src="assets/images/room3/IMG_20170721_104211.png" alt="Penzion - pokoj č.4" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room3/IMG_20170721_104223.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.4">
              <img src="assets/images/room3/IMG_20170721_104223.png" alt="Penzion - pokoj č.4" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room3/IMG_20170721_104237.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.4">
              <img src="assets/images/room3/IMG_20170721_104237.png" alt="Penzion - pokoj č.4" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room3/IMG_20170721_104246.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.4">
              <img src="assets/images/room3/IMG_20170721_104246.png" alt="Penzion - pokoj č.4" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room3/IMG_20170721_104155.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.4">
                <img src="assets/images/room3/IMG_20170721_104155.png" alt="Penzion - pokoj č.4" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade pokoj" id="pokoj5">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room5/IMG_20170721_110800.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_110800.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room5/IMG_20170721_110738.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_110738.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room5/IMG_20170721_110558.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_110558.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-2 col-sm-offset-4">
              <a href="assets/images/room5/IMG_20170721_105406.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_105406.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room5/IMG_20170721_105133.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_105133.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room5/IMG_20170721_105204.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.5">
              <img src="assets/images/room5/IMG_20170721_105204.png" alt="Penzion - pokoj č.5" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade pokoj" id="pokoj6">
          <div class="row">
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room6/IMG_20170721_111258.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
              <img src="assets/images/room6/IMG_20170721_111258.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-3">
              <a href="assets/images/room6/IMG_20170721_111334.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
              <img src="assets/images/room6/IMG_20170721_111334.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room6/IMG_20170721_111351.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
              <img src="assets/images/room6/IMG_20170721_111351.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-3 col-sm-offset-4">
              <a href="assets/images/room6/IMG_20170721_111326.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
              <img src="assets/images/room6/IMG_20170721_111326.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room6/IMG_20170721_111403.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
                <img src="assets/images/room6/IMG_20170721_111403.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
            <div class="col-xs-12 col-sm-2">
              <a href="assets/images/room6/IMG_20170721_111500.jpg" data-toggle="lightbox" data-gallery="Pokoje" data-title="Penzion Na Knížecí - pokoj č.6">
                <img src="assets/images/room6/IMG_20170721_111500.png" alt="Penzion - pokoj č.6" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="form-container">
      <h3>Rádi byste se u nás ubytovali?</h3>
      <form class="" action="mailer.php" method="post">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Jméno:</label>
          <div class="col-sm-10">
            <input id="name" class="form-control" type="text" name="name" placeholder="Vaše jméno" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="lastname" class="col-sm-2 col-form-label">Příjmení:</label>
          <div class="col-sm-10">
            <input id="lastname" class="form-control" type="text" name="lastname" placeholder="Vaše příjmení" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
          <div class="col-sm-10">
            <input id="email" class="form-control" type="email" name="email" placeholder="Váš e-mail" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="phone" class="col-sm-2 col-form-label">Telefon:</label>
          <div class="col-sm-10">
            <input id="phone" class="form-control" type="tel" name="phone" placeholder="Telefon (nepovinné)">
          </div>
        </div>
        <div class="form-group row">
          <label for="from" class="col-sm-2 col-form-label">Termín Vašeho příjezdu:</label>
          <div class="col-sm-3">
            <input id="from" class="form-control" type="text" name="from" placeholder="Datum příjezdu" required>
          </div>
          <label for="to" class="col-sm-2 col-form-label">a odjezdu:</label>
          <div class="col-sm-3">
            <input id="to" class="form-control" type="text" name="to" placeholder="Datum odjezdu" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="adults" class="col-sm-2 col-form-label">Počet dospělých:</label>
          <div class="col-sm-3">
            <input id="adults" class="form-control"type="number" name="adults" size="3" min="0" max="30" required value="1">
          </div>
          <label for="kids" class="col-sm-2 col-form-label">a děti:</label>
          <div class="col-sm-3">
            <input id="kids" class="form-control"type="number" name="kids" size="3" main="0" max="30" required placeholder="všechny vítány"><br>
          </div>
        </div>
        <div class="form-group row">
          <label for="message" class="col-sm-6 col-form-label">V případě potřeby upřesněte poptávku:</label><br>
          <div class="col-sm-12">
            <textarea id="message" class="form-control" type="textarea" name="message" value="" rows="4" maxlength="2000"></textarea><br>
          </div>
        </div>
        <button type="submit" class="btn btn-default" name="button">Odeslat poptávku</button>
      </form>
    </div>
  </div>
<?php require_once "assets/includes/footer.php" ?>
</body>
</html>
