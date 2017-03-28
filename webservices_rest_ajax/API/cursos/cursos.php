<?php
header("Content-Type: application/json");

function load_courses(){
    $courses = array("HTML5","JavaScript","CSS","ASP.NET","SCRUM","PHP","JAVA","PYTHON","UX");
    return $courses;
}

function load_ADSI(){
    $adsi = array("1067146","1094130","1136502","1355155");
    return $adsi;
}

switch ($_GET["cid"]) {
  case 'cursos':
    $result = load_courses();
  break;

  case 'fichas':
    $result = load_ADSI();
  break;

  default:
    header("HTTP/1.1 405 Method Not Allowed");
    exit;
  break;
}

echo json_encode($result)
?>
