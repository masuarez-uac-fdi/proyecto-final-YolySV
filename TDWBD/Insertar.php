<?php
//insertar
include("DWBDconn.php");
		$Nombre= $_POST["nombre"];
		$Apellido= $_POST["apellido"];
		$Edad= $_POST["edad"];
		$Escolaridad= $_POST["escolaridad"];
		$Sexo= $_POST["sexo"];

		$sql="INSERT INTO datos (Nombre, Apellido, Edad, Escolaridad, Sexo) VALUES ('$Nombre', '$Apellido', ".$Edad.",'$Escolaridad', '$Sexo')";

		$resultado=mysqli_query($conn,$sql);

		if ($conn->query($sql) === TRUE) {
	    echo "Registro guardado";
	    echo "<input type='button' value='Atras' onClick='history.go(-1);'>";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	$conn->close();
	?>