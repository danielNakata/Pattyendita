<?php

  $param = "";
  $salidaJSON = "{\"res\":\"0\", \"msg\":\"LOS PARAMETROS NO SE RECIBIERON CORRECTAMENTE\"}";
  $param = $_GET["param"];
  $param = base64_decode($param);
  $salidaJSON = "{\"res\":\"1\", \"msg\":\"".$param."\"}";


  echo $salidaJSON;

 ?>
