<div class="row">
  <div id="indexCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indexCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#indexCarousel" data-slide-to="1"></li>
      <li data-target="#indexCarousel" data-slide-to="2"></li>
      <li data-target="#indexCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- <div class="contentIntranet">
       <form action="http://intranet.iepsanantonio.com/login" method="post" id="login" class="formIntranet">
          <input type="hidden" name="_token" value="JDkMt5EtFVFtkXgVtpeq5NzXNsHI2ZeinzKFS0qD">
          <h3>INGRESA AL INTRANET</h3>
          <div class="form-group">
           <input type="email" name="email" id="username" class="form-control" size="15" value="" placeholder="USUARIO" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" size="15" value="" placeholder="CONTRASEÑA" required>
          </div>
          <div class="form-group">
            <input type="submit" id="loginbtn" value="ENTRAR">
          </div>
        </form>
      </div> -->
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
      <iframe width="560" height="315" src="https://www.youtube.com/embed/H3bcivd9NLQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="row">
  <div class="box-galardones"></div>
</div>
<div class="row galardones">
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <div data-toggle="modal" data-target="#popupMov" style="cursor:pointer">
        <img src="<?php echo IMAGE_PATH; ?>/galardones/movilidad.jpg" alt="movilidad" />
      </div>
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
      <a href="<?php echo APP_DOMAIN ?>/premios/">
        <img src="<?php echo IMAGE_PATH; ?>/galardones/premios.jpg" alt="premios" />
      </a>
    </div>
    <h3><a href="<?php echo APP_DOMAIN ?>/premios/">PREMIOS</a></h3>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="elemento">
      <a href="<?php echo APP_DOMAIN ?>/galeria/">
        <img src="<?php echo IMAGE_PATH; ?>/galardones/galeria.jpg" alt="galeria" />
      </a>
    </div>
    <h3><a href="<?php echo APP_DOMAIN ?>/galeria/">GALERÍA</a></h3>
  </div>
</div>
<div class="modal fade" id="popupMov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content popupMov">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">MOVILIDAD ESCOLAR</h4>
      </div>
      <img src="<?php echo IMAGE_PATH; ?>/movilidad.jpg"  alt="Movilidad">
    </div>
  </div>
</div>