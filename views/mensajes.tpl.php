<?php include '/includes/header.php' ?>


	<div class="siteWrapper">
    <div class="profile-wrapper">
      <div class="container">
        <div class="profileNav">
          <div class="profileNav-photo">
            <div class="photo"><img src="<?= $_SESSION['foto'] ?>" alt=""/>
              <label for="subir">
                <svg>
                  <use xlink:href="#camera"></use>
                </svg>
              </label>
              <input type="file" id="subir"/>
            </div>
            <h1><?= $_SESSION['nombre'] , ' ', $_SESSION['apellido'] ?></h1>
          </div>
          <nav class="profileNav-menu">
            <ul>
              <li><a href="perfil.html"> Perfil</a></li>
              <li class="is-active"><a href="mensajes.html"> Mensajes</a></li>
              <li><a href="anuncios.html"> Anuncios</a></li>
              <li><a href="favoritos.html"> Favoritos</a></li>
              <li><a href="alertas.html"> Alertas</a></li>
            </ul>
          </nav>
        </div>
        <div class="messages">
          <div class="messagesThumb nano">
            <div class="nano-content">

            <!-- VISTA PREVIA MENSAJES -->

              <?php foreach ($nombres as $nombre) { ?>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/diana.jpeg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1><?= $nombre['remitente_nombre'] ?></h1>
                  <p>OK cya!</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <?php } ?>

            </div>
          </div>
          <div class="messagesWrapper">
            <div class="messagesWrapper-messages nano">
              <div class="nano-content scrollToDown">

                <!-- MENSAJES -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

<?php include '/includes/footer.php' ?>


  <script>
    
  </script>
  <?php var_dump($id_usuario) ?>