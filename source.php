<?php
  $link = mysql_connect("localhost", "firesafety_mbl", "Danpali0","firesafety_mbl");
  $sql = "SELECT image FROM gallery WHERE id=9";
  $result = mysql_query("$sql");
  mysql_close($link);

?>