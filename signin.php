<html lang="es" ng-app="pattyendita">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:Pattyendita:.</title>
    <link href="css/css/bootstrap.css" rel="stylesheet" />
    <link href="css/signin.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery331min.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="css/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/datetimepicker.js"></script>
    <script type="text/javascript" src="js/loading-bar.js"></script>
    <script type="text/javascript" src="js/pattyendita.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
  </head>
  <body ng-controller="InicioSesionController">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Pattyendita</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/registrarse.php">Registrar <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <form class="form-signin">
        <img class="mb-4" src="https://banner2.kisspng.com/20180323/aue/kisspng-key-login-usb-flash-drives-computer-security-key-5ab5adc575ec91.950188771521855941483.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inicio de Sesion</h1>
        <label for="inputEmail" class="sr-only">Correo Electronico</label>
        <input type="email" id="txtLogin" name="txtLogin" ng-model="inicioSesion.txtLogin" class="form-control" placeholder="Correo Electronico" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="txtPass" name="txtLogin" ng-model="inicioSesion.txtPass" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" ng-click="iniciaSesion()">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      </form>
  </body>
</html>
