<html lang="es" ng-app="pattyendita">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:Pattyendita:.</title>
    <link href="css/css/bootstrap.css" rel="stylesheet" />
    <link href="css/dashboard.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery331min.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="css/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/datetimepicker.js"></script>
    <script type="text/javascript" src="js/loading-bar.js"></script>
    <script type="text/javascript" src="js/feathers.js"></script>
    <script type="text/javascript" src="js/pattyendita.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pattyendita</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Salir</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="muestraDivMenuPrin('divMainDashboard')">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(Actual)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="muestraDivMenuPrin('divMainProductos')">
                  <span data-feather="file"></span>
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="muestraDivMenuPrin('divMainVentas')">
                  <span data-feather="shopping-cart"></span>
                  Ventas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="muestraDivMenuPrin('divMainUsuarios')">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="muestraDivMenuPrin('divMainReportes')">
                  <span data-feather="bar-chart-2"></span>
                  Reportes
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div id="contenido" class="container">
            <div id="divMainDashboard" ng-include="'pages/dashboard.php'" style="visibility: hidden; height: 0px;">
            </div>
            <div id="divMainProductos" ng-include="'pages/productos.php'" style="visibility: hidden; height: 0px;">
            </div>
            <div id="divMainVentas" ng-include="'pages/ventas.php'" style="visibility: hidden; height: 0px;">
            </div>
            <div id="divMainUsuarios" ng-include="'pages/usuarios.php'" style="visibility: hidden; height: 0px;">
            </div>
            <div id="divMainReportes" ng-include="'pages/reportes.php'" style="visibility: hidden; height: 0px;">
            </div>
          </div>
        </main>
      </div>
    </div>
    <script>
      feather.replace()
    </script>
  </body>
</html>
