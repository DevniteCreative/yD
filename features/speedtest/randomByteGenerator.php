<?php
  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=randomBytes.dat");
  header("Content-Length: " . $_GET["n"]);

  $bytes = random_bytes(intval($_GET["n"]));
  echo $bytes;
?>
