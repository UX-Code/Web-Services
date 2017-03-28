<?php

  // El objeto de tipo curl me permite leer un elemento externo
  $curl = curl_init("http://localhost/Github/SENA/lab/webservice/webservice_basico/base.txt");

  // El curl_setopt nos permite definir las opciones y salida de texto
  curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

  $respuesta = curl_exec($curl);
  $info = curl_getinfo($curl);

  if($info["http_code"] == 200){
    $ciudades = explode(",", $respuesta);
    echo "<h1>CIUDADES DE COLOMBIA</h1>";
    echo "<ul>";
    foreach ($ciudades as $ciudad) {
      echo "<li>".$ciudad."</li>";
    }
    echo "</ul>";

  }else{
    echo "Error: ".curl_error($curl);
  }
?>
