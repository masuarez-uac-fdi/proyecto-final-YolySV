<?php
include("DWBDconn.php");

$sql = "SELECT id, Nombre, Apellido, Sexo, Escolaridad FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id"]. "- Nombre: " . $row["Nombre"]. " Apellido: " . $row["Apellido"]. " Sexo:" . $row["Sexo"]. " Escolaridad:" . $row["Escolaridad"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>