<link href="<?php echo APP_DOMAIN ?>/public/css/gallery.min.css" rel="stylesheet">
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
  <div class="col-xs-12 col-1">
    <h3 class="la-galeria"><strong>GALERÍA DE IMÁGENES</strong></h3>
    <section>
      <ul id="gallery">
        <li id="fullPreview"></li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep1.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep1.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep1.jpg" width="240" height="150" alt="Fish" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                  Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep2.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep2.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep2.jpg" width="240" height="150" alt="Golden Gate" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  Inicial
                </h2>
              </li>
              <li>
                <p>
                  Ver imágen
                </p>
              </li>
            </ul>
          </div>
          <p class="projectInfo">
            <strong>Lunes, 14 de Abril del 2015:</strong> Juegos recreativos para los niños de inicial, para desarrollar sus destrezas y habilidades.
          </p>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep3.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep3.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep3.jpg" width="240" height="150" alt="Ocean" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                  Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep4.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep4.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep4.jpg" width="240" height="150" alt="Party" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                  Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep5.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep5.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep5.jpg" width="240" height="150" alt="Party" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep6.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep6.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep6.jpg" width="240" height="150" alt="iep" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep7.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep7.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep7.jpg" width="240" height="150" alt="iep" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep8.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep8.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep8.jpg" width="240" height="150" alt="iep" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep9.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep9.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep9.jpg" width="240" height="150" alt="iep" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo APP_DOMAIN; ?>/public/images/full/iep10.jpg"></a>
          <img data-original="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep10.jpg" src="<?php echo APP_DOMAIN; ?>/public/images/thumb/iep10.jpg" width="240" height="150" alt="iep" style="display: inline;">
          <div class="overLayer"></div>
          <div class="infoLayer">
            <ul>
              <li>
                <h2>
                  I.E.P.
                </h2>
              </li>
              <li>
                <p>
                    Ver imágen
                </p>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </section>
  </div>
</div>
<script src="<?php echo APP_DOMAIN ?>/public/js/gallery.min.js"></script>