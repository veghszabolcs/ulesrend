<?php

require_once "C:\\xampp\htdocs\ulesrend\helpers\mysql.php";

$db = new DataBase();

$sql = "SELECT nev FROM osztaly";
$result = DataBase::$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $namesArr[] = $row["nev"];
    }
}
$hint = "";
$q = $_REQUEST["q"];
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($namesArr as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if ($hint === "") {
          $hint = $name;
        } else {
          $hint .= ", $name";
        }
      }
    }
  }

  echo $hint;
?>