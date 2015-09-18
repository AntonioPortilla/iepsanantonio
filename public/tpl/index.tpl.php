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
        <h2>NOTICIAS</h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento dos">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/actividades.png" alt="ACTIVIDADES" style="margin-top:-24px" />
        <h2 style="margin-top:15px">ACTIVIDADES <br>EXTRACURRICULARES</h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento tres">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/sedes.png" alt="SEDES" />
        <h2>SEDES</h2>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 right">
    <div class="elemento cuatro">
      <div>
        <img src="<?php echo IMAGE_PATH; ?>/servicios.png" alt="SERVICIOS" />
        <h2>SERVICIOS</h2>
      </div>
    </div>
  </div>
</div>
<div class="row desc">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-1">
    <h3><strong>IEP SAN ANTONIO DE CARABAYLLO</strong></h3>
    <p>
      En IEP San Antonio de Carabayllo ofrecemos el servicio de enseñanza a alumnos en los niveles inicial, 
      primaria y secundaria.
    </p>
    <p>
      Somos IEP San Antonio de Carabayllo, un centro educativo que se caracteriza por la:
    </p>
    <p>
      - Modernidad en la enseñanza. <br>
      - Formación integral y cívica. <br>
      - Formación espiritual y en valores.
    </p>
    <p>
      Además, contamos con docentes altamente calificados, sala de lectura, banda de guerra, academia 
      deportiva, círculo de estudio y movilidad propia. También ofrecemos talleres de inglés.
    </p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-2">
    <div class="video_institucional">
      <img src="<?php echo IMAGE_PATH; ?>/video.jpg" alt="Video">
    </div>
  </div>
</div>
<div class="row">
  <div class="box-galardones"></div>
</div>
<div class="row galardones">
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <img src="<?php echo IMAGE_PATH; ?>/galardones/movilidad.jpg" alt="movilidad" />
    </div>
    <h3>MOVILIDAD ESCOLAR</h3>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <img src="<?php echo IMAGE_PATH; ?>/galardones/seminarios.jpg" alt="seminarios" />
    </div>
    <h3>SEMINARIOS PRE</h3>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <img src="<?php echo IMAGE_PATH; ?>/galardones/premios.jpg" alt="premios" />
    </div>
    <h3>PREMIOS</h3>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <img src="<?php echo IMAGE_PATH; ?>/galardones/galeria.jpg" alt="galeria" />
    </div>
    <h3>GALERÍA</h3>
  </div>
</div>