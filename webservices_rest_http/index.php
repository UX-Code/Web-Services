<?php
  $url_Fichas = "http://localhost/Github/SENA/lab/webservice/webservices_rest_http/API/cursos/fichas";
  $url_Cursos = "http://localhost/Github/SENA/lab/webservice/webservices_rest_http/API/cursos/cursos";

  $json_Fichas = file_get_contents($url_Fichas);
  $json_Cursos = file_get_contents($url_Cursos);

  $Fichas = json_decode($json_Fichas);
  $Cursos = json_decode($json_Cursos);

  echo "<h2>CURSOS DISPONIBLES</h2>";
  echo "<ul>";
       foreach ($Cursos as $curso) {
           echo "<li>".$curso."</li>";
       }
  echo "</ul>";


  echo "<h2>FICHAS REGISTRADAS</h2>";
  echo "<ul>";
       foreach ($Fichas as $ficha) {
           echo "<li>".$ficha."</li>";
       }
  echo "</ul>";
?>
