<?php

 ?>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../css/css/bootstrap.css" rel="stylesheet" />
    <link href="../css/navtopfixed.css" rel="stylesheet" />
    <script type="text/javascript" src="../js/jquery331min.js"></script>
    <script type="text/javascript" src="../js/angular.js"></script>
    <script type="text/javascript" src="../js/popper.js"></script>
    <script type="text/javascript" src="../css/js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript" src="../js/datetimepicker.js"></script>
    <script type="text/javascript" src="../js/loading-bar.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Pattyendita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../signin.php">Ingresar <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <main>
      <div id="formRegistro" class="container">
        <h3>Nuevo Usuario</h3>
        <form>
          <table class="table">
            <tr>
                <td>Correo Electronico: </td><td><input type="email" id="txtEmail" name="txtEmail" placeholder="Correo Electronico" class="form form-control" />
            </tr>
            <tr>
                <td>Contraseña: </td><td><input type="password" id="txtPass1" name="txtPass1" placeholder="dummy" class="form form-control" />
            </tr>
            <tr>
                <td>Repite Contraseña: </td><td><input type="password" id="txtPass2" name="txtPass2" placeholder="dummy" class="form form-control" />
            </tr>
            <tr>
                <td>Nombre: </td><td><input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre(s)" class="form form-control" />
            </tr>
            <tr>
                <td>Apellidos: </td><td><input type="text" id="txtApellidos" name="txtApellidos" placeholder="Apellido(s)" class="form form-control" />
            </tr>
            <tr>
                <td>Apodo: </td><td><input type="text" id="txtApodo" name="txtApodo" placeholder="Apodo(s)" class="form form-control" />
            </tr>
            <tr>
                <td colspan="2"><button class="btn btn-lg btn-primary btn-block" type="button">Registrar</button></td>
            </tr>
          </table>
        </form>
      </div>
    </main>
  </body>
 </html>
