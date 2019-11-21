<?php
include("DWBDconn.php");
  $Id= $_POST["actualizarId"];
  $Escolaridad= $_POST["actualizarEsc"];
  
  $stmt=$conn->prepare("UPDATE datos SET Escolaridad=? WHERE id=?");
  $stmt->bind_param("si", $Escolaridad, $Id);
  $stmt->execute();
  $stmt->close();
  echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
?>