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
        <h2 style="margin-top:15px"><a href="<?php echo APP_DOMAIN ?>/actividades/">ACTIVIDADES <br>EXTRACURRICULARES</a></h2>
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
<div class="row desc" style="margin-bottom:45px">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-1">
    <h3><strong>SERVICIOS</strong></h3>
    <p>
      En <strong>IEP San Antonio de Carabayllo</strong> utilizamos el <strong>sistema de enseñanza personalizada</strong>. 
      También realizamos evaluación por capacidades.
    </p>
    <p>Igualmente, ofrecemos:</p>
    <ul>
      <li>Novedosos talleres de computación, inglés, lectura y danza.</li>
      <li>Taller de asesoramiento, de nivelación, de música y de ajedrez.</li>
    </ul>
    <p>
      Además, tenemos en cuenta la aplicación de TIC en la enseñanza y nos preocupamos tanto por el desarrollo 
      de las inteligencias múltiples y el desarrollo de valores sociales, como por la <strong>formación académica, 
      espiritual, personal y deportiva</strong>.
    </p>
    <p>
      En nuestra <strong>institución educativa</strong> contamos con:
    </p>
    <ul>
      <li>Departamento psicológico.</li>
      <li>Círculo de estudio.</li>
      <li>Laboratorio de cómputo con Internet.</li>
      <li>Laboratorio de ciencias.</li>
      <li>Aulas con multimedia.</li>
      <li>Piscinas para niños y adultos.</li>
      <li>Campo de grass sintético.</li>
      <li>Cancha de vóley.</li>
      <li>Mesas de ping-pong.</li>
    </ul>
    <p>
      Atendemos a alumnos con aprendizajes diferentes que requieren un adecuado desarrollo de sus habilidades 
      sociales y básicas en el nivel inicial.
    </p>
    <p>
      En <strong>IEP San Antonio de Carabayllo</strong> disponemos de <strong>profesores con alto nivel académico</strong>.
    </p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-2">
    <img src="<?php echo APP_DOMAIN ?>/public/images/servicios.jpg" alt="servicios" width="100%">
  </div>
</div>