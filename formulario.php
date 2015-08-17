<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <title>Document</title>
  <link rel="stylesheet" href="/views/css/main.css"/>
</head>
<body>
  <svg style="display:none;">
    <symbol id="mail" viewBox="0 0 20 20">
      <path d="M17.5 6h-16c-0.827 0-1.5 0.673-1.5 1.5v9c0 0.827 0.673 1.5 1.5 1.5h16c0.827 0 1.5-0.673 1.5-1.5v-9c0-0.827-0.673-1.5-1.5-1.5zM17.5 7c0.030 0 0.058 0.003 0.087 0.008l-7.532 5.021c-0.29 0.193-0.819 0.193-1.109 0l-7.532-5.021c0.028-0.005 0.057-0.008 0.087-0.008h16zM17.5 17h-16c-0.276 0-0.5-0.224-0.5-0.5v-8.566l7.391 4.927c0.311 0.207 0.71 0.311 1.109 0.311s0.798-0.104 1.109-0.311l7.391-4.927v8.566c0 0.276-0.224 0.5-0.5 0.5z"></path>
    </symbol>
    <symbol id="user" viewBox="0 0 20 20">
      <path d="M9.5 11c-3.033 0-5.5-2.467-5.5-5.5s2.467-5.5 5.5-5.5 5.5 2.467 5.5 5.5-2.467 5.5-5.5 5.5zM9.5 1c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5c2.481 0 4.5-2.019 4.5-4.5s-2.019-4.5-4.5-4.5z"></path>
      <path d="M17.5 20h-16c-0.827 0-1.5-0.673-1.5-1.5 0-0.068 0.014-1.685 1.225-3.3 0.705-0.94 1.67-1.687 2.869-2.219 1.464-0.651 3.283-0.981 5.406-0.981s3.942 0.33 5.406 0.981c1.199 0.533 2.164 1.279 2.869 2.219 1.211 1.615 1.225 3.232 1.225 3.3 0 0.827-0.673 1.5-1.5 1.5zM9.5 13c-3.487 0-6.060 0.953-7.441 2.756-1.035 1.351-1.058 2.732-1.059 2.746 0 0.274 0.224 0.498 0.5 0.498h16c0.276 0 0.5-0.224 0.5-0.5-0-0.012-0.023-1.393-1.059-2.744-1.382-1.803-3.955-2.756-7.441-2.756z"></path>
    </symbol>
    <symbol id="password" viewBox="0 0 20 20">
      <path d="M14.5 8h-0.5v-1.5c0-2.481-2.019-4.5-4.5-4.5s-4.5 2.019-4.5 4.5v1.5h-0.5c-0.827 0-1.5 0.673-1.5 1.5v8c0 0.827 0.673 1.5 1.5 1.5h10c0.827 0 1.5-0.673 1.5-1.5v-8c0-0.827-0.673-1.5-1.5-1.5zM6 6.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v1.5h-7v-1.5zM15 17.5c0 0.276-0.224 0.5-0.5 0.5h-10c-0.276 0-0.5-0.224-0.5-0.5v-8c0-0.276 0.224-0.5 0.5-0.5h10c0.276 0 0.5 0.224 0.5 0.5v8z"></path>
    </symbol>
  </svg>
  <div class="signUp">
    <div class="signUp-wrapper">
      <div class="signUp-wrapper--img"><img src="/views/img/emprendox-logo.svg" alt=""/></div>
      <div class="signUp-wrapper--form">
        <h1> Completar registro</h1>
        <form class="form">
          <p class="form--finish">
            <label>
              <svg>
                <use xlink:href="#user"></use>
              </svg>
            </label>
            <input type="text" placeholder="Nombres"/>
          </p>
          <p class="form--finish">
            <label>
              <svg>
                <use xlink:href="#user"></use>
              </svg>
            </label>
            <input type="text" placeholder="Apellidos"/>
          </p>
          <p class="form--finish">
            <label>
              <svg>
                <use xlink:href="#password"></use>
              </svg>
            </label>
            <input type="password" placeholder="Contraseña"/>
          </p>
          <p class="form--finish">
            <label>
              <svg>
                <use xlink:href="#password"></use>
              </svg>
            </label>
            <input type="password" placeholder="Confirmar contraseña"/>
          </p>
          <button>Completar registro</button>
        </form>
      </div>
    </div>
  </div>
</body>