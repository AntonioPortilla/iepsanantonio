<div class="row">
  <div id="indexCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indexCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#indexCarousel" data-slide-to="1"></li>
      <li data-target="#indexCarousel" data-slide-to="2"></li>
      <li data-target="#indexCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="contentIntranet">
        <form action="<?php echo APP_DOMAIN; ?>/intranet/login/index.php" method="post" id="login" class="formIntranet">
          <h3>INGRESA AL INTRANET</h3>
          <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" size="15" value="" placeholder="USUARIO" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" size="15" value="" placeholder="CONTRASEÑA" required>
          </div>
          <div class="form-group">
            <input type="submit" id="loginbtn" value="ENTRAR">
          </div>
        </form>
      </div>
      <div class="item active">
        <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner1-sac.jpg" alt="IEP">
      </div>
      <div class="item">
        <img class="second-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner2-sac.jpg" alt="IEP">
       </div>
      <div class="item">
        <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner3-sac.jpg" alt="IEP">
      </div>
      <div class="item">
        <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/banner/banner4-sac.jpg" alt="IEP">
       </div>
    </div><!--
    <a class="left carousel-control" href="#indexCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Atrás</span>
    </a>
    <a class="right carousel-control" href="#indexCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
<div class="row info">
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 left">
    <div class="elemento uno">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/noti.png" alt="NOTICIAS" />
        <h2><a href="<?php echo APP_DOMAIN ?>/noticias/">NOTICIAS</a></h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento dos">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/actividades.png" alt="ACTIVIDADES" style="margin-top:-24px" />
        <h2 style="margin-top:15px"><a href="<?php echo APP_DOMAIN ?>/actividades/">ACTIVIDADES <br>EXTRACURRICULARES</a></h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento tres">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/sedes.png" alt="SEDES" />
        <h2><a href="<?php echo APP_DOMAIN ?>/sedes/">SEDES</a></h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 right">
    <div class="elemento cuatro">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/servicios.png" alt="SERVICIOS" />
        <h2><a href="<?php echo APP_DOMAIN ?>/servicios/">SERVICIOS</a></h2>
      </div>
    </div>
  </div>
</div>
<div class="row desc" style="margin-bottom:45px">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-1">
    <h3><strong>RECONOCIMIENTOS</strong></h3>
    <p>
      En <strong>IEP San Antonio de Carabayllo</strong> recibimos el reconocimiento de la CONACO
      en los años 2011 y 2012. Además, hemos ganado una gran variedad de gallardetes
      (15 en el 2014) participando en los desfiles en los niveles inicial y primaria.
      Igualmente, fuimos galardonados con un gonfalón a la excelencia, y obtuvimos
      los primeros puestos en concursos de matemática organizados por colegios y/o
      academias. En nuestra institución educativa tenemos 6 años de trayectoria.
      Nos preocupamos por brindar un servicio de calidad a los padres de familia.
      Contamos con tres sedes: 2 en Carabayllo y otra en San Juan de Lurigancho.
    </p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-2">
    <img src="<?php echo APP_DOMAIN ?>/public/images/reconocimiento.jpg" alt="reconocimientos" width="100%">
  </div>
</div>