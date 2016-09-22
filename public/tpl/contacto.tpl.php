<div class="row">
  <div id="indexCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#indexCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#indexCarousel" data-slide-to="1"></li>
      <li data-target="#indexCarousel" data-slide-to="2"></li>
      <li data-target="#indexCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
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
    <h3><strong>CONTACTO</strong></h3>
    <p>
      Contáctanos a nuestras 3 sedes.
    </p>
    <h4><strong>SEDE PRINCIPAL</strong></h4>
    <p><strong>Dirección</strong></p>
    <p>Prolongación Los Laureles, mz. U1 - lt. 3 <br>
      Túpac Amaru, km 19 - 1/2 mg. derecha <br>
      CARABAYLLO, LIMA (Lima)
    </p>
    <p>
      <strong>E-mail</strong>: sanantoniodecarabayllo@gmail.com <br>
      <strong>E-mail</strong>: informes@iepsanantoniodecarabayllo.com <br>
      <strong>Teléfono</strong>: Central: (01) 654-7054 <br>
      <strong>Móvil</strong>: Claro: 987-632371 <br>
      <strong>Horario laboral</strong> : Lunes a viernes de: 07:30 a.m. a 03:00 p.m.
    </p>
    <h4><strong>SEDE EL ROSARIO</strong></h4>
    <p><strong>Dirección</strong></p>
    <p>
      Km 30,5 de la carretera a Canta mg. derecha <br>
      CARABAYLLO, LIMA (Lima)
    </p>
    <p>
      <strong>E-mail</strong>: sanantoniodecarabayllo@gmail.com <br>
      <strong>Teléfono</strong>: Central: (01) 664-9936 <br>
      <strong>Móvil</strong>: Claro: 987-632371 <br>
      <strong>Horario laboral</strong>: Lunes a viernes de: 07:30 a.m. a 03:00 p.m.
    </p>
    <h4><strong>SEDE JICAMARCA</strong></h4>
    <p><strong>Dirección</strong></p>
    <p>
      Quebrada Media Luna <br>
      Asoc. Villa Percin <br>
      SAN JUAN DE LURIGANCHO  LIMA (Lima)
    </p>
    <p>
      <strong>E-mail</strong>: sanantoniodecarabayllo@gmail.com <br>
      <strong>Teléfono</strong>: Central: (01) 738-4261 <br>
      <strong>Móvil</strong>: Claro: 987-632371 <br>
      <strong>Horario laboral</strong>: lunes a viernes de: 07:30 a.m. a 03:00 p.m.
    </p>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-2">
    <form id="formContact">
      <div class="form-group form-group-sm">
        <label for="nombres">NOMBRES Y APELLIDOS (*)</label>
        <input class="form-control" type="text" id="nombres" name="nombres" required>
      </div>
      <div class="form-group form-group-sm">
        <label for="correo">CORREO (*)</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
      </div>
      <div class="form-group form-group-sm">
        <label for="telf">TELÉFONO</label>
        <input type="tel" class="form-control" id="telf" name="telefono" minlength="7" maxlength="9">
      </div>
      <div class="form-group form-group-sm">
        <label for="prov">PROVINCIA</label>
        <input type="tel" class="form-control" id="prov" name="provincia">
      </div>
      <div class="form-group form-group-sm">
        <label for="comentario">COMENTARIOS (*)</label>
        <textarea class="form-control" rows="6" id="comentario" name="comentario" required></textarea>
      </div>
      <button type="submit" class="btn btn-default btn-blue center" aria-label="Left Align">
        ENVIAR
      </button>
    </form><br>
    <p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3904.3828590013263!2d-77.0188527!3d-11.8784067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d0a475f3f7c1%3A0x4eb71fada62c060a!2sParadero+La+Cumbre!5e0!3m2!1ses!2spe!4v1443471266334" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </p>
  </div>
</div>