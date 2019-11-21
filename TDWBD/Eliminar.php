<?php
include("DWBDconn.php");
$Id= $_POST["eliminarId"];
// sql to delete a record

$stmt=$conn->prepare("DELETE FROM datos WHERE id=?");
$stmt->bind_param("i", $Id);
$stmt->execute();
$stmt->close();
echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
?>