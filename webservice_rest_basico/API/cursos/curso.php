<?php
  header("Content-Type: application/json");

  function load_course(){
      $course = array('Nombre'  => 'Webservices con PHP',
                      'Dias' => 'Martes y Viernes',
                      'Horario' => '6am - 12m y 12m - 6pm',
                      'Instructor' => 'Guille Valencia');
      return $course;
  }
  echo json_encode(load_course());
?>
