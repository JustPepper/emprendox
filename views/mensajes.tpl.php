<?php 

  $con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
  $con->select_db(DB_NAME);
  $consulta = "SELECT mensajes.hora as hora,usuarios.id_usuario, mensajes.id_remitente, mensajes.remitente_nombre as nomremitente, mensajes.descripcion as descripcion, mensajes.fecha_enviado as fecha FROM usuarios LEFT JOIN mensajes ON mensajes.id_usuario=usuarios.id_usuario Where usuarios.id_usuario='66' OR  usuarios.id_usuario='67 'and mensajes.id_remitente='67' OR mensajes.id_remitente='66' Order by mensajes.hora;";
  $lectura = $con->query($consulta);

?>


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
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/diana.jpeg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Diana Benedictis</h1>
                  <p>OK cya!</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/default-avatar.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Josue Maridueña</h1>
                  <p> You see, in this world there's two kinds of people, my friend: those with loaded guns and those who dig. you dig. here. put that in your report!" and "i may have found a way out of here. dyin' ain't much of a livin', boy. this is my gun, clyde! man's gotta know his limitations. </p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/andres.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Andrés Naranjo</h1>
                  <p> When a naked man's chasing a woman through an alley with a butcher knife and a hard-on, i figure he's not out collecting for the red cross. here. put that in your report!" and "i may have found a way out of here. dyin' ain't much of a livin', boy. what you have to ask yourself is.</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/marlon.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Marlon Arciniegas</h1>
                  <p> In the broad and final sense all institutions are educational in the sense that they operate to form the attitudes, dispositions, abilities and disabilities that constitute a concrete personality...Whether this educative process is carried on in a predominantly democratic or non.</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/erick.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Erick Bravo</h1>
                  <p> Floggings will continue until morale improves</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/alejandra.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Alejandra Paredes</h1>
                  <p> When a naked man's chasing a woman through an alley with a butcher knife and a hard-on, i figure he's not out collecting for the red cross. here. put that in your report!" and "i may have found a way out of here. dyin' ain't much of a livin', boy. what you have to ask yourself is.</p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/jorge.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Jorge Santamaría</h1>
                  <p> Mr. DePree also expects a "tremendous social change" in all workplaces. "When I first started working 40 years ago, a factory supervisor was focused on the product. Today it is drastically different, because of the social milieu. It isn't unusual for a worker to arrive on his shift and have some family problem that he doesn't know how to resolve. The example I like to use is a guy who comes in and says 'this isn't going to be a good day for me, my son is in jail on a drunk-driving charge and I don't know how to raise bail.' What that means is that if the supervisor wants productivity, he has to know how to raise bail." -- Max DePree, chairman and CEO of Herman Miller Inc., "Herman Miller's Secrets of Corporate Creativity", The Wall Street Journal, May 3, 1988 </p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
              <div class="messagesThumb-item">
                <div class="item--photo">
                  <div><img src="/public/img/juan.jpg" alt=""/></div>
                </div>
                <div class="item--text">
                  <h1>Juan Rodriguez</h1>
                  <p>hey! </p>
                </div>
                <div class="item--time"><span> 02/03/15</span></div>
              </div>
            </div>
          </div>
          <div class="messagesWrapper">
            <div class="messagesWrapper-messages nano">
              <div class="nano-content">

                <?php while ($lineas = $lectura->fetch_assoc()) { ?>
                  <div class="recievedMessage">
                    <div class="recievedMessage-photo"><img src="/public/img/diana.jpeg" alt=""/></div>
                    <div class="recievedMessage-message">
                      <div class="recievedMessage-name">
                        <h1><?= $lineas['nomremitente']; ?></h1>
                      </div>
                      <p><?= $lineas['descripcion']; ?></p>
                    </div><span><?= $lineas['hora']; ?></span>
                  </div>
                 <?php } ?>
              
                <div class="sendMessage">
                  <textarea name="" cols="30" rows="10"></textarea>
                  <button> Enviar Mensaje</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php include '/includes/footer.php' ?>