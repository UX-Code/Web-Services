<?php
  $url   = "http://localhost/Github/SENA/lab/webservice/webservice_rest_basico/API/cursos/curso.php";
  $JSON  = file_get_contents($url);
  $data = json_decode($JSON);

  echo "<h1>El proximo curso es: ".$data->Nombre."</h1>";
  echo "<p>Instructor:".$data->Instructor.", Horario: ".$data->Dias." - ".$data->Horario."</p>";

?>
