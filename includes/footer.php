    <footer>
      <div class="container">
        <div class="footerNav">
          <div class="footerNav-list">
            <h2> Empresa
              <svg>
                <use xlink:href="#plus"></use>
              </svg>
            </h2>
            <nav>
              <ul>
                <li> <a href="#"> Quiénes somos</a></li>
                <li> <a href="#"> Acerca de</a></li>
                <li> <a href="#"> Contactar</a></li>
              </ul>
            </nav>
          </div>
          <div class="footerNav-list">
            <h2> Negocios
              <svg>
                <use xlink:href="#plus"></use>
              </svg>
            </h2>
            <nav>
              <ul>
                <li> <a href="#"> Negocio en marcha</a></li>
                <li> <a href="#"> Propiedad</a></li>
                <li> <a href="#"> Activos</a></li>
                <li> <a href="#"> Franquicias</a></li>
              </ul>
            </nav>
          </div>
          <div class="footerNav-list">
            <h2> Sugerencias
              <svg>
                <use xlink:href="#plus"></use>
              </svg>
            </h2>
            <nav>
              <ul>
                <li> <a href="#"> Buscar negocio</a></li>
                <li> <a href="#"> Mapa del sitio</a></li>
              </ul>
            </nav>
          </div>
          <div class="footerNav-list">
            <h2> Políticas
              <svg>
                <use xlink:href="#plus"></use>
              </svg>
            </h2>
            <nav>
              <ul>
                <li> <a href="#"> Política de privacidad</a></li>
                <li> <a href="#"> Política de uso de sitio web</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="footerAbout"><img src="/public/img/emprendox-logo.svg" alt=""/>
          <p>
             Sotheby's International Realty Canada, Brokerage.
             Sotheby's International Realty® is a registered trademark licensed to Sotheby's International Realty Affiliates, Inc. Each Office Is Independently Owned And Operated.
          </p>
          <nav>
            <ul>
              <li>
                <svg>
                  <use xlink:href="#facebook"></use>
                </svg>
              </li>
              <li>
                <svg>
                  <use xlink:href="#twitter"></use>
                </svg>
              </li>
              <li>
                <svg>
                  <use xlink:href="#google"></use>
                </svg>
              </li>
            </ul>
          </nav>
        </div>
        <hr/>
        <p class="copy-right"> © Emprendox</p>
      </div>
    </footer>
  </div>

  <?php if (!isset($_SESSION['id_usuario'])) { ?>
    <div class="loginPopup">
      <div class="loginPopup-wrapper"><span>Iniciar sesión a tu perfil</span>
        <div class="loginPopup-media"><a href="#">
            <svg>
              <use xlink:href="#facebook"></use>
            </svg>Iniciar con facebook</a><a href="#">
            <svg>
              <use xlink:href="#google"></use>
            </svg>Iniciar con google</a><a href="#">
            <svg>
              <use xlink:href="#twitter"></use>
            </svg>Iniciar con twitter</a><a href="#">
            <svg>
              <use xlink:href="#linkedin"></use>
            </svg>Iniciar con linkedin</a></div>
        <div class="loginPopup-form">
          <form action="/login.php" method="post">
            <p>
              <label>
                <svg>
                  <use xlink:href="#mail"></use>
                </svg>
              </label>
              <input type="text" placeholder="Correo electrónico" name="correo"/>
            </p>
            <p>
              <label>
                <svg>
                  <use xlink:href="#password"></use>
                </svg>
              </label>
              <input type="password" placeholder="Contraseña" name="password"/>
            </p>
            <button>Iniciar sesión</button><a href="#" class="password">Olvidé mi contraseña</a>
          </form>
        </div>
        <div class="loginPopup-signUp">
          <h2> ¿No tienes cuenta?</h2><a href="/registro"> Regístrate</a>
        </div>
      </div>
    </div>
  <?php } ?>
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="/public/js/main.js"></script>
</body>
</html>