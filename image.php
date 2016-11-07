<?php
  include 'config.inc.php';
  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysqli_connect($db_server,$db_user,$db_passwort,$db_name);
  $sql = "SELECT DATEN FROM HOT_ELEMENTE WHERE ID=$id AND ELEMENTTYP_ID=2 LIMIT 1";
  $result = mysqli_query($link,$sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $link->close();

  header("Content-type: image/jpeg");
  echo $row['DATEN'];
?>
