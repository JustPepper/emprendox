<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <title>Emprendox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no"/>
  
  <link rel="icon" type="public/image/png" href="favicon.png" />

  <link rel="stylesheet" href="/public/css/main.css"/>
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css"/>
</head>
  <body>
    <svg style="display:none;">
      <symbol id="menu" viewBox="0 0 20 20">
        <path d="M17.5 6h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M17.5 11h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M17.5 16h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
      </symbol>
      <symbol id="mail" viewBox="0 0 20 20">
      <path d="M17.5 6h-16c-0.827 0-1.5 0.673-1.5 1.5v9c0 0.827 0.673 1.5 1.5 1.5h16c0.827 0 1.5-0.673 1.5-1.5v-9c0-0.827-0.673-1.5-1.5-1.5zM17.5 7c0.030 0 0.058 0.003 0.087 0.008l-7.532 5.021c-0.29 0.193-0.819 0.193-1.109 0l-7.532-5.021c0.028-0.005 0.057-0.008 0.087-0.008h16zM17.5 17h-16c-0.276 0-0.5-0.224-0.5-0.5v-8.566l7.391 4.927c0.311 0.207 0.71 0.311 1.109 0.311s0.798-0.104 1.109-0.311l7.391-4.927v8.566c0 0.276-0.224 0.5-0.5 0.5z"></path>
      </symbol>
      <symbol id="login" viewBox="0 0 20 20">
        <path d="M17.5 2h-9c-0.827 0-1.5 0.673-1.5 1.5v3c0 0.276 0.224 0.5 0.5 0.5s0.5-0.224 0.5-0.5v-3c0-0.276 0.224-0.5 0.5-0.5h7.564l-3.842 1.647c-0.685 0.294-1.222 1.108-1.222 1.853v9.5h-2.5c-0.276 0-0.5-0.224-0.5-0.5v-3c0-0.276-0.224-0.5-0.5-0.5s-0.5 0.224-0.5 0.5v3c0 0.827 0.673 1.5 1.5 1.5h2.5v1.5c0 0.433 0.18 0.801 0.495 1.008 0.174 0.114 0.376 0.172 0.589 0.172 0.173 0 0.354-0.038 0.532-0.114l5.162-2.212c0.685-0.294 1.222-1.108 1.222-1.854v-12c0-0.827-0.673-1.5-1.5-1.5zM18 15.5c0 0.351-0.294 0.796-0.616 0.934l-5.162 2.212c-0.096 0.041-0.159 0.038-0.177 0.027s-0.045-0.069-0.045-0.173v-12c0-0.351 0.294-0.796 0.616-0.934l5.333-2.286c0.033 0.066 0.051 0.141 0.051 0.22v12z"></path>
        <path d="M8.354 9.146l-3-3c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l2.146 2.146h-6.293c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h6.293l-2.146 2.146c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146l3-3c0.195-0.195 0.195-0.512 0-0.707z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M10.5 3c-1.381 0-2.5 1.119-2.5 2.5v1.5h-2v2h2v7h2v-7h2.25l0.5-2h-2.75v-1.5c0-0.276 0.224-0.5 0.5-0.5h2.5v-2h-2.5z"></path>
      </symbol>
      <symbol id="google" viewBox="0 0 16 16">
        <path d="M8.735 1c0 0-3.14 0-4.187 0-1.877 0-3.643 1.422-3.643 3.069 0 1.683 1.279 3.042 3.189 3.042 0.133 0 0.262-0.003 0.388-0.012-0.124 0.237-0.213 0.505-0.213 0.782 0 0.468 0.252 0.847 0.57 1.157-0.24 0-0.473 0.007-0.726 0.007-2.325-0-4.114 1.481-4.114 3.016 0 1.512 1.962 2.458 4.286 2.458 2.65 0 4.114-1.504 4.114-3.016 0-1.213-0.358-1.939-1.464-2.721-0.378-0.268-1.102-0.919-1.102-1.302 0-0.449 0.128-0.67 0.804-1.198 0.692-0.541 1.182-1.302 1.182-2.186 0-1.053-0.469-2.080-1.35-2.418h1.327l0.937-0.677zM7.273 11.242c0.033 0.14 0.051 0.284 0.051 0.432 0 1.222-0.787 2.177-3.046 2.177-1.607 0-2.767-1.017-2.767-2.239 0-1.198 1.439-2.194 3.046-2.177 0.375 0.004 0.724 0.064 1.042 0.167 0.872 0.607 1.498 0.949 1.675 1.641zM4.7 6.684c-1.079-0.032-2.104-1.207-2.29-2.623s0.537-2.501 1.615-2.469c1.078 0.032 2.104 1.169 2.29 2.585s-0.537 2.538-1.616 2.506zM13 4v-3h-1v3h-3v1h3v3h1v-3h3v-1z"></path>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M16 3.038c-0.589 0.261-1.221 0.438-1.885 0.517 0.678-0.406 1.198-1.050 1.443-1.816-0.634 0.376-1.337 0.649-2.085 0.797-0.599-0.638-1.452-1.037-2.396-1.037-1.813 0-3.283 1.47-3.283 3.282 0 0.257 0.029 0.508 0.085 0.748-2.728-0.137-5.147-1.444-6.766-3.43-0.283 0.485-0.444 1.049-0.444 1.65 0 1.139 0.579 2.144 1.46 2.732-0.538-0.017-1.044-0.165-1.487-0.411-0 0.014-0 0.027-0 0.041 0 1.59 1.132 2.917 2.633 3.219-0.275 0.075-0.565 0.115-0.865 0.115-0.212 0-0.417-0.021-0.618-0.059 0.418 1.304 1.63 2.253 3.066 2.28-1.123 0.88-2.539 1.405-4.077 1.405-0.265 0-0.526-0.016-0.783-0.046 1.453 0.931 3.178 1.475 5.032 1.475 6.038 0 9.34-5.002 9.34-9.34 0-0.142-0.003-0.284-0.010-0.425 0.642-0.463 1.198-1.041 1.638-1.699z"></path>
      </symbol>
      <symbol id="linkedin" viewBox="0 0 16 16">
        <path d="M6 6h2.767v1.418h0.040c0.385-0.691 1.327-1.418 2.732-1.418 2.921 0 3.461 1.818 3.461 4.183v4.817h-2.885v-4.27c0-1.018-0.021-2.329-1.5-2.329-1.502 0-1.732 1.109-1.732 2.255v4.344h-2.883v-9z"></path>
        <path d="M1 6h3v9h-3v-9z"></path>
        <path d="M4 3.5c0 0.828-0.672 1.5-1.5 1.5s-1.5-0.672-1.5-1.5c0-0.828 0.672-1.5 1.5-1.5s1.5 0.672 1.5 1.5z"></path>
      </symbol>
      <symbol id="mail" viewBox="0 0 20 20">
        <path d="M17.5 6h-16c-0.827 0-1.5 0.673-1.5 1.5v9c0 0.827 0.673 1.5 1.5 1.5h16c0.827 0 1.5-0.673 1.5-1.5v-9c0-0.827-0.673-1.5-1.5-1.5zM17.5 7c0.030 0 0.058 0.003 0.087 0.008l-7.532 5.021c-0.29 0.193-0.819 0.193-1.109 0l-7.532-5.021c0.028-0.005 0.057-0.008 0.087-0.008h16zM17.5 17h-16c-0.276 0-0.5-0.224-0.5-0.5v-8.566l7.391 4.927c0.311 0.207 0.71 0.311 1.109 0.311s0.798-0.104 1.109-0.311l7.391-4.927v8.566c0 0.276-0.224 0.5-0.5 0.5z"></path>
      </symbol>
      <symbol id="password" viewBox="0 0 20 20">
        <path d="M14.5 8h-0.5v-1.5c0-2.481-2.019-4.5-4.5-4.5s-4.5 2.019-4.5 4.5v1.5h-0.5c-0.827 0-1.5 0.673-1.5 1.5v8c0 0.827 0.673 1.5 1.5 1.5h10c0.827 0 1.5-0.673 1.5-1.5v-8c0-0.827-0.673-1.5-1.5-1.5zM6 6.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v1.5h-7v-1.5zM15 17.5c0 0.276-0.224 0.5-0.5 0.5h-10c-0.276 0-0.5-0.224-0.5-0.5v-8c0-0.276 0.224-0.5 0.5-0.5h10c0.276 0 0.5 0.224 0.5 0.5v8z"></path>
      </symbol>
      <symbol id="close" viewBox="0 0 20 20">
        <path d="M10.707 10.5l5.646-5.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-5.646 5.646-5.646-5.646c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l5.646 5.646-5.646 5.646c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146l5.646-5.646 5.646 5.646c0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146c0.195-0.195 0.195-0.512 0-0.707l-5.646-5.646z"></path>
      </symbol>
      <symbol id="lens" viewBox="0 0 20 20">
        <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
      </symbol>
      <symbol id="plus" viewBox="0 0 20 20">
        <path d="M16 10c0 0.553-0.048 1-0.601 1h-4.399v4.399c0 0.552-0.447 0.601-1 0.601s-1-0.049-1-0.601v-4.399h-4.399c-0.552 0-0.601-0.447-0.601-1s0.049-1 0.601-1h4.399v-4.399c0-0.553 0.447-0.601 1-0.601s1 0.048 1 0.601v4.399h4.399c0.553 0 0.601 0.447 0.601 1z"></path>
      </symbol>
      <symbol id="camera" viewBox="0 0 20 20">
        <path d="M9.5 15c-2.481 0-4.5-2.019-4.5-4.5s2.019-4.5 4.5-4.5c2.481 0 4.5 2.019 4.5 4.5s-2.019 4.5-4.5 4.5zM9.5 7c-1.93 0-3.5 1.57-3.5 3.5s1.57 3.5 3.5 3.5 3.5-1.57 3.5-3.5-1.57-3.5-3.5-3.5z"></path>
        <path d="M17.5 18h-16c-0.827 0-1.5-0.673-1.5-1.5v-10c0-0.827 0.673-1.5 1.5-1.5h1.5c0.415 0 1.060-0.267 1.354-0.561l0.586-0.586c0.487-0.487 1.373-0.854 2.061-0.854h5c0.688 0 1.574 0.367 2.061 0.854l0.586 0.586c0.293 0.293 0.939 0.561 1.354 0.561h1.5c0.827 0 1.5 0.673 1.5 1.5v10c0 0.827-0.673 1.5-1.5 1.5zM1.5 6c-0.276 0-0.5 0.224-0.5 0.5v10c0 0.276 0.224 0.5 0.5 0.5h16c0.276 0 0.5-0.224 0.5-0.5v-10c0-0.276-0.224-0.5-0.5-0.5h-1.5c-0.688 0-1.574-0.367-2.061-0.854l-0.586-0.586c-0.293-0.293-0.939-0.561-1.354-0.561h-5c-0.415 0-1.060 0.267-1.354 0.561l-0.586 0.586c-0.487 0.487-1.372 0.854-2.061 0.854h-1.5z"></path>
      </symbol>
      <symbol id="user" viewBox="0 0 20 20">
        <path d="M9.5 11c-3.033 0-5.5-2.467-5.5-5.5s2.467-5.5 5.5-5.5 5.5 2.467 5.5 5.5-2.467 5.5-5.5 5.5zM9.5 1c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5c2.481 0 4.5-2.019 4.5-4.5s-2.019-4.5-4.5-4.5z"></path>
        <path d="M17.5 20h-16c-0.827 0-1.5-0.673-1.5-1.5 0-0.068 0.014-1.685 1.225-3.3 0.705-0.94 1.67-1.687 2.869-2.219 1.464-0.651 3.283-0.981 5.406-0.981s3.942 0.33 5.406 0.981c1.199 0.533 2.164 1.279 2.869 2.219 1.211 1.615 1.225 3.232 1.225 3.3 0 0.827-0.673 1.5-1.5 1.5zM9.5 13c-3.487 0-6.060 0.953-7.441 2.756-1.035 1.351-1.058 2.732-1.059 2.746 0 0.274 0.224 0.498 0.5 0.498h16c0.276 0 0.5-0.224 0.5-0.5-0-0.012-0.023-1.393-1.059-2.744-1.382-1.803-3.955-2.756-7.441-2.756z"></path>
      </symbol>
      <symbol id="ci" viewBox="0 0 20 20">
        <path d="M18.5 18h-17c-0.827 0-1.5-0.673-1.5-1.5v-13c0-0.827 0.673-1.5 1.5-1.5h17c0.827 0 1.5 0.673 1.5 1.5v13c0 0.827-0.673 1.5-1.5 1.5zM1.5 3c-0.276 0-0.5 0.224-0.5 0.5v13c0 0.276 0.224 0.5 0.5 0.5h17c0.276 0 0.5-0.224 0.5-0.5v-13c0-0.276-0.224-0.5-0.5-0.5h-17z"></path>
        <path d="M9.5 6h-6c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h6c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M9.5 9h-6c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h6c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M9.5 11h-6c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h6c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M9.5 13h-6c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h6c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M8.5 15h-5c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h5c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M17.943 6.544l-0.813-0.591-0.311-0.956h-1.005l-0.813-0.591-0.813 0.591h-1.005l-0.311 0.956-0.813 0.591 0.311 0.956-0.311 0.956 0.813 0.591 0.132 0.406c-0.002 0.016-0.002 0.031-0.002 0.047v5c0 0.202 0.122 0.385 0.309 0.462s0.402 0.035 0.545-0.108l1.146-1.146 1.146 1.146c0.096 0.096 0.223 0.147 0.354 0.146 0.064 0 0.129-0.012 0.191-0.038 0.187-0.077 0.309-0.26 0.309-0.462v-5c0-0.016-0.001-0.032-0.002-0.047l0.132-0.406 0.813-0.591-0.311-0.956 0.311-0.956zM13.233 6.926l0.488-0.355 0.187-0.574h0.604l0.488-0.355 0.488 0.355h0.604l0.187 0.574 0.488 0.355-0.187 0.574 0.187 0.574-0.488 0.355-0.187 0.574h-0.604l-0.488 0.355-0.488-0.355h-0.604l-0.187-0.574-0.488-0.355 0.187-0.574-0.187-0.574zM15.354 12.646c-0.195-0.195-0.512-0.195-0.707 0l-0.646 0.646v-3.29h0.187l0.813 0.591 0.813-0.591h0.187v3.29l-0.646-0.646z"></path>
      </symbol>
      <symbol id="briefcase" viewBox="0 0 20 20">
        <path d="M18.5 5h-4.5v-1.5c0-0.827-0.673-1.5-1.5-1.5h-5c-0.827 0-1.5 0.673-1.5 1.5v1.5h-4.5c-0.827 0-1.5 0.673-1.5 1.5v11c0 0.827 0.673 1.5 1.5 1.5h17c0.827 0 1.5-0.673 1.5-1.5v-11c0-0.827-0.673-1.5-1.5-1.5zM7 3.5c0-0.276 0.224-0.5 0.5-0.5h5c0.276 0 0.5 0.224 0.5 0.5v1.5h-6v-1.5zM1.5 6h17c0.276 0 0.5 0.224 0.5 0.5v7.5h-2v-0.5c0-0.276-0.224-0.5-0.5-0.5h-2c-0.276 0-0.5 0.224-0.5 0.5v0.5h-8v-0.5c0-0.276-0.224-0.5-0.5-0.5h-2c-0.276 0-0.5 0.224-0.5 0.5v0.5h-2v-7.5c0-0.276 0.224-0.5 0.5-0.5zM16 14v1h-1v-1h1zM5 14v1h-1v-1h1zM18.5 18h-17c-0.276 0-0.5-0.224-0.5-0.5v-2.5h2v0.5c0 0.276 0.224 0.5 0.5 0.5h2c0.276 0 0.5-0.224 0.5-0.5v-0.5h8v0.5c0 0.276 0.224 0.5 0.5 0.5h2c0.276 0 0.5-0.224 0.5-0.5v-0.5h2v2.5c0 0.276-0.224 0.5-0.5 0.5z"></path>
      </symbol>
      <symbol id="hat" viewBox="0 0 20 20">
        <path d="M18.658 7.026l-9-3c-0.103-0.034-0.214-0.034-0.316 0l-9 3c-0.204 0.068-0.342 0.259-0.342 0.474s0.138 0.406 0.342 0.474l2.658 0.886v2.64c0 0.133 0.053 0.26 0.146 0.354 0.088 0.088 2.194 2.146 6.354 2.146 1.513 0 2.924-0.272 4.195-0.809 0.254-0.107 0.373-0.401 0.266-0.655s-0.401-0.373-0.655-0.266c-1.147 0.485-2.427 0.73-3.805 0.73-1.945 0-3.376-0.504-4.234-0.926-0.635-0.313-1.060-0.629-1.266-0.799v-2.081l5.342 1.781c0.051 0.017 0.105 0.026 0.158 0.026s0.107-0.009 0.158-0.026l5.342-1.781v0.892c-0.582 0.206-1 0.762-1 1.414 0 0.611 0.367 1.137 0.892 1.371l-0.877 3.508c-0.037 0.149-0.004 0.308 0.091 0.429s0.24 0.192 0.394 0.192h2c0.154 0 0.299-0.071 0.394-0.192s0.128-0.28 0.091-0.429l-0.877-3.508c0.525-0.234 0.892-0.76 0.892-1.371 0-0.652-0.418-1.208-1-1.414v-1.226l2.658-0.886c0.204-0.068 0.342-0.259 0.342-0.474s-0.138-0.406-0.342-0.474zM15.5 11c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5-0.5-0.224-0.5-0.5 0.224-0.5 0.5-0.5zM15.14 16l0.36-1.438 0.36 1.438h-0.719zM15.46 7.986l-5.877-0.98c-0.273-0.045-0.53 0.139-0.575 0.411s0.139 0.53 0.411 0.575l4.014 0.669-3.932 1.311-7.419-2.473 7.419-2.473 7.419 2.473-1.459 0.486z"></path>
      </symbol>
      <symbol id="city" viewBox="0 0 20 20">
        <path d="M14 6h1v1h-1v-1z"></path>
        <path d="M14 8h1v1h-1v-1z"></path>
        <path d="M14 10h1v1h-1v-1z"></path>
        <path d="M14 12h1v1h-1v-1z"></path>
        <path d="M14 16h1v1h-1v-1z"></path>
        <path d="M14 14h1v1h-1v-1z"></path>
        <path d="M6 6h1v1h-1v-1z"></path>
        <path d="M6 8h1v1h-1v-1z"></path>
        <path d="M6 10h1v1h-1v-1z"></path>
        <path d="M6 12h1v1h-1v-1z"></path>
        <path d="M6 16h1v1h-1v-1z"></path>
        <path d="M6 14h1v1h-1v-1z"></path>
        <path d="M4 6h1v1h-1v-1z"></path>
        <path d="M4 8h1v1h-1v-1z"></path>
        <path d="M4 10h1v1h-1v-1z"></path>
        <path d="M4 12h1v1h-1v-1z"></path>
        <path d="M4 16h1v1h-1v-1z"></path>
        <path d="M4 14h1v1h-1v-1z"></path>
        <path d="M8 6h1v1h-1v-1z"></path>
        <path d="M8 8h1v1h-1v-1z"></path>
        <path d="M8 10h1v1h-1v-1z"></path>
        <path d="M8 12h1v1h-1v-1z"></path>
        <path d="M8 16h1v1h-1v-1z"></path>
        <path d="M8 14h1v1h-1v-1z"></path>
        <path d="M18.5 19h-0.5v-13.5c0-0.763-0.567-1.549-1.291-1.791l-4.709-1.57v-1.64c0-0.158-0.075-0.307-0.202-0.401s-0.291-0.123-0.442-0.078l-9.042 2.713c-0.737 0.221-1.314 0.997-1.314 1.766v14.5h-0.5c-0.276 0-0.5 0.224-0.5 0.5s0.224 0.5 0.5 0.5h18c0.276 0 0.5-0.224 0.5-0.5s-0.224-0.5-0.5-0.5zM16.393 4.658c0.318 0.106 0.607 0.507 0.607 0.842v13.5h-5v-15.806l4.393 1.464zM2 4.5c0-0.329 0.287-0.714 0.602-0.808l8.398-2.52v17.828h-9v-14.5z"></path>
      </symbol>
      <symbol id="place" viewBox="0 0 20 20">
        <path d="M10 20c-0.153 0-0.298-0.070-0.393-0.191-0.057-0.073-1.418-1.814-2.797-4.385-0.812-1.513-1.46-2.999-1.925-4.416-0.587-1.787-0.884-3.472-0.884-5.008 0-3.308 2.692-6 6-6s6 2.692 6 6c0 1.536-0.298 3.22-0.884 5.008-0.465 1.417-1.113 2.903-1.925 4.416-1.38 2.571-2.74 4.312-2.797 4.385-0.095 0.121-0.24 0.191-0.393 0.191zM10 1c-2.757 0-5 2.243-5 5 0 3.254 1.463 6.664 2.691 8.951 0.902 1.681 1.809 3.014 2.309 3.71 0.502-0.699 1.415-2.040 2.318-3.726 1.223-2.283 2.682-5.687 2.682-8.935 0-2.757-2.243-5-5-5z"></path>
        <path d="M10 9c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zM10 4c-1.103 0-2 0.897-2 2s0.897 2 2 2c1.103 0 2-0.897 2-2s-0.897-2-2-2z"></path>
      </symbol>
      <symbol id="cell" viewBox="0 0 20 20">
        <path d="M10.5 18h-1c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h1c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z"></path>
        <path d="M14.5 20h-9c-0.827 0-1.5-0.673-1.5-1.5v-17c0-0.827 0.673-1.5 1.5-1.5h9c0.827 0 1.5 0.673 1.5 1.5v17c0 0.827-0.673 1.5-1.5 1.5zM5.5 1c-0.276 0-0.5 0.224-0.5 0.5v17c0 0.276 0.224 0.5 0.5 0.5h9c0.276 0 0.5-0.224 0.5-0.5v-17c0-0.276-0.224-0.5-0.5-0.5h-9z"></path>
        <path d="M13.5 16h-7c-0.276 0-0.5-0.224-0.5-0.5v-13c0-0.276 0.224-0.5 0.5-0.5h7c0.276 0 0.5 0.224 0.5 0.5v13c0 0.276-0.224 0.5-0.5 0.5zM7 15h6v-12h-6v12z"></path>
      </symbol>
      <symbol id="phone" viewBox="0 0 20 20">
        <path d="M16 20c-1.771 0-3.655-0.502-5.6-1.492-1.793-0.913-3.564-2.22-5.122-3.78s-2.863-3.333-3.775-5.127c-0.988-1.946-1.49-3.83-1.49-5.601 0-1.148 1.070-2.257 1.529-2.68 0.661-0.609 1.701-1.32 2.457-1.32 0.376 0 0.816 0.246 1.387 0.774 0.425 0.394 0.904 0.928 1.383 1.544 0.289 0.372 1.73 2.271 1.73 3.182 0 0.747-0.845 1.267-1.739 1.816-0.346 0.212-0.703 0.432-0.961 0.639-0.276 0.221-0.325 0.338-0.333 0.364 0.949 2.366 3.85 5.267 6.215 6.215 0.021-0.007 0.138-0.053 0.363-0.333 0.207-0.258 0.427-0.616 0.639-0.961 0.55-0.894 1.069-1.739 1.816-1.739 0.911 0 2.81 1.441 3.182 1.73 0.616 0.479 1.15 0.958 1.544 1.383 0.528 0.57 0.774 1.011 0.774 1.387 0 0.756-0.711 1.799-1.319 2.463-0.424 0.462-1.533 1.537-2.681 1.537zM3.994 1c-0.268 0.005-0.989 0.333-1.773 1.055-0.744 0.686-1.207 1.431-1.207 1.945 0 6.729 8.264 15 14.986 15 0.513 0 1.258-0.465 1.944-1.213 0.723-0.788 1.051-1.512 1.056-1.781-0.032-0.19-0.558-0.929-1.997-2.037-1.237-0.952-2.24-1.463-2.498-1.469-0.018 0.005-0.13 0.048-0.357 0.336-0.197 0.251-0.408 0.594-0.613 0.926-0.56 0.911-1.089 1.772-1.858 1.772-0.124 0-0.246-0.024-0.363-0.071-2.625-1.050-5.729-4.154-6.779-6.779-0.126-0.315-0.146-0.809 0.474-1.371 0.33-0.299 0.786-0.579 1.228-0.851 0.332-0.204 0.676-0.415 0.926-0.613 0.288-0.227 0.331-0.339 0.336-0.357-0.007-0.258-0.517-1.261-1.469-2.498-1.108-1.439-1.847-1.964-2.037-1.997z"></path>
      </symbol>
      <symbol id="skype" viewBox="0 0 20 20">
        <path d="M18.671 12.037c0.132-0.623 0.203-1.272 0.203-1.938 0-4.986-3.93-9.029-8.777-9.029-0.511 0-1.012 0.047-1.5 0.133-0.785-0.508-1.712-0.803-2.707-0.803-2.811 0-5.090 2.344-5.090 5.237 0 0.965 0.256 1.871 0.699 2.648-0.116 0.586-0.178 1.194-0.178 1.815 0 4.986 3.93 9.029 8.775 9.029 0.551 0 1.087-0.051 1.607-0.15 0.717 0.396 1.535 0.621 2.406 0.621 2.811 0 5.090-2.344 5.090-5.236 0.001-0.837-0.19-1.626-0.528-2.327zM14.599 14.416c-0.406 0.59-1.006 1.059-1.783 1.391-0.769 0.33-1.692 0.496-2.742 0.496-1.26 0-2.317-0.227-3.143-0.678-0.59-0.328-1.076-0.771-1.445-1.318-0.372-0.555-0.561-1.104-0.561-1.633 0-0.33 0.123-0.617 0.365-0.852 0.24-0.232 0.549-0.352 0.916-0.352 0.301 0 0.562 0.094 0.773 0.277 0.202 0.176 0.375 0.438 0.514 0.773 0.156 0.367 0.326 0.676 0.505 0.92 0.172 0.234 0.42 0.432 0.735 0.586 0.318 0.154 0.748 0.232 1.275 0.232 0.725 0 1.32-0.158 1.768-0.473 0.438-0.309 0.65-0.676 0.65-1.127 0-0.357-0.111-0.637-0.34-0.857-0.238-0.228-0.555-0.408-0.936-0.531-0.399-0.127-0.941-0.266-1.611-0.41-0.91-0.201-1.683-0.439-2.299-0.707-0.63-0.275-1.137-0.658-1.508-1.137-0.375-0.483-0.567-1.092-0.567-1.807 0-0.682 0.2-1.297 0.596-1.828 0.393-0.525 0.965-0.935 1.703-1.217 0.728-0.277 1.596-0.418 2.576-0.418 0.783 0 1.473 0.094 2.047 0.277 0.578 0.186 1.066 0.436 1.449 0.744 0.387 0.311 0.674 0.643 0.854 0.986 0.182 0.35 0.275 0.695 0.275 1.031 0 0.322-0.121 0.615-0.361 0.871-0.24 0.258-0.543 0.387-0.9 0.387-0.324 0-0.58-0.082-0.756-0.242-0.164-0.148-0.336-0.383-0.524-0.717-0.219-0.428-0.484-0.766-0.788-1.002-0.295-0.232-0.788-0.35-1.466-0.35-0.629 0-1.141 0.131-1.519 0.387-0.368 0.249-0.545 0.532-0.545 0.866 0 0.207 0.058 0.379 0.176 0.525 0.125 0.158 0.301 0.295 0.523 0.41 0.23 0.12 0.467 0.214 0.705 0.282 0.244 0.070 0.654 0.172 1.215 0.307 0.711 0.156 1.363 0.332 1.939 0.521 0.585 0.193 1.090 0.43 1.502 0.705 0.42 0.283 0.754 0.645 0.989 1.076 0.237 0.434 0.357 0.969 0.357 1.59 0.001 0.745-0.206 1.422-0.613 2.016z"></path>
      </symbol>
      <symbol id="male" viewBox="0 0 32 32">
        <path d="M13.28 30.72c-5.6 0-10.24-4.64-10.24-10.24s4.64-10.24 10.24-10.24 10.24 4.64 10.24 10.24c-0.16 5.6-4.64 10.24-10.24 10.24zM13.28 11.84c-4.8 0-8.64 3.84-8.64 8.64s3.84 8.64 8.64 8.64c4.8 0 8.64-3.84 8.64-8.64-0.16-4.8-4-8.64-8.64-8.64z"></path>
        <path d="M27.655 1.655l1.191 1.069-9.512 10.597-1.191-1.069 9.512-10.597z"></path>
        <path d="M27.2 10.4l-1.6-0.32 1.44-6.72-6.4 2.080-0.48-1.6 9.12-2.88z"></path>
      </symbol>
      <symbol id="female" viewBox="0 0 32 32">
        <path d="M16.48 21.6c-5.6 0-10.24-4.64-10.24-10.24s4.64-10.24 10.24-10.24c5.6 0 10.24 4.64 10.24 10.24s-4.64 10.24-10.24 10.24zM16.48 2.88c-4.8 0-8.64 3.84-8.64 8.64s3.84 8.64 8.64 8.64 8.64-3.84 8.64-8.64-4-8.64-8.64-8.64z"></path>
        <path d="M15.68 21.44h1.6v9.76h-1.6v-9.76z"></path>
        <path d="M12.8 26.4h7.2v1.6h-7.2v-1.6z"></path>
      </symbol>
      <symbol id="inbox" viewBox="0 0 20 20">
        <path d="M19.557 10.383l-2.698-6.168c-0.298-0.682-1.115-1.216-1.859-1.216h-10c-0.744 0-1.561 0.534-1.859 1.216l-2.698 6.168c-0.248 0.568-0.443 1.497-0.443 2.117v4c0 0.827 0.673 1.5 1.5 1.5h17c0.827 0 1.5-0.673 1.5-1.5v-4c0-0.619-0.194-1.549-0.443-2.117zM4.057 4.617c0.141-0.323 0.591-0.617 0.943-0.617h10c0.352 0 0.802 0.294 0.943 0.617l2.698 6.168c0.030 0.069 0.060 0.148 0.089 0.233-0.075-0.012-0.152-0.018-0.23-0.018h-6c-0.276 0-0.5 0.224-0.5 0.5v0.5c0 1.103-0.897 2-2 2s-2-0.897-2-2v-0.5c0-0.276-0.224-0.5-0.5-0.5h-6c-0.078 0-0.155 0.006-0.23 0.018 0.029-0.085 0.058-0.164 0.089-0.233l2.698-6.168zM19 16.5c0 0.276-0.224 0.5-0.5 0.5h-17c-0.276 0-0.5-0.224-0.5-0.5v-4c0-0.276 0.224-0.5 0.5-0.5h5.5c0 1.654 1.346 3 3 3s3-1.346 3-3h5.5c0.276 0 0.5 0.224 0.5 0.5v4z"></path>
      </symbol>
    </svg>
    <div class="topBar">
      <header class="u-flex-center">
        <div class="topBar-hamburguer">
          <svg class="u-icon">
            <use xlink:href="#menu"></use>
          </svg>
        </div>
        <div class="topBar-logo"><a href="/"><img src="/public/img/emprendox-logo.svg" alt="Emprendox, Negocios y Franquicias"/></a></div>
        <nav class="topBar-menu">
          <ul>
            <li><a href="negocios.html" class="u-flex-center">NEGOCIOS</a></li>
            <li><a href="Franquicias.html" class="u-flex-center">FRANQUICIAS</a></li>
          </ul>
        </nav>
        <div class="topBar-buttons">
          <div class="topBar-buttons--publications"><a href="publicar.html" class="u-flex-center">Publicar</a></div>
          

          <?php if (isset($_SESSION['id_usuario'])) { ?>
            
            <div class="topBar-buttons--logged u-flex-center">
              <span><?= $_SESSION['nombre'] , ' ', $_SESSION['apellido'] ?></span>
              <div><img src="<?= $_SESSION['foto'] ?>" alt=""/></div>
            </div>  
        
          <?php } else { ?>
          
          <div class="topBar-buttons--login">
              <a id="login-link" href="#" class="u-flex-center">
              <svg class="u-icon">
                <use xlink:href="#login"></use>
              </svg>
              <span>Iniciar sesión </span></a>
          </div>

          <?php } ?>

        </div>
      </header>
    </div>

    <?php if (isset($_SESSION['id_usuario'])) { ?>
      <div class="sideNav">
        <div class="sideNav-userInfo">
          <div><img src="<?= $_SESSION['foto'] ?>" alt=""/></div><span><?= $_SESSION['nombre'], ' ', $_SESSION['apellido'] ?></span>
        </div>
        <hr/>
        <nav class="sideNav-userNav">
          <ul>
            <li><a href="perfil.html">  Perfil</a></li>
            <li><a href="mensajes">  Mensajes</a></li>
            <li><a href="anuncios.html">  Anuncios</a></li>
            <li><a href="favoritos.html"> Favoritos</a></li>
            <li><a href="alertas.html"> Alertas</a></li>
          </ul>
        </nav>
        <hr/>
        <div class="sideNav-logout"><a href="logout.php">Cerrar sesión</a></div>
      </div>
    <?php } ?>