<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">  
    <link href="Styles/TareaDW.css" rel="stylesheet" type="text/css">
	<title>Datos</title>
	<style type="text/css">
      address{
        font-size: 1em;
        margin: 1em;
        text-align: right;
      	}
    </style>
</head>

<body>
	<h1 style="font-size: 50px;text-align: center">Nuestros datos</h1>
	<h2></h2>
    <h3 align="center">¡Ayúdanos a recaudar datos!</h3>
    <form method="post" action="Insertar.php">
        <table border="1" align="center" width="350em" cellpadding="8">

        <tr>        
                <td align="center"><b>Nombre: </b>
                    <input type="text" name="nombre" size="15"></td>
                </tr>

               <td align="center"><b>Apellido: </b>   
                    <input type="text" name="apellido" size="15"></td>
                </tr>

                <tr>        
                    <td align="center"><b>Edad:</b>
                        <input type="text" name="edad" size="15"></td>
                </tr>

                <tr>        
                    <td align="center"><b>Escolaridad actual:</b>
                    <input type="text" name="escolaridad" size="15"></td>   
                </tr>

                <tr>        
                    <td align="center"><b>Sexo:</b>
                        <input type="text" name="sexo" size="15"></td>
                </tr>

                <tr>        
                    <td align="center">
                        <input type="submit" value="Guardar"></td>
                </tr>
        </table></br>
    </form>

    <form>
        <h3 align="center">Aquí puedes ver los datos: </h3>
        <table border="1" align="center" width="350em" cellpadding="8">
            <tr>        
                <td align="center">
                    <input value="Mostrar datos almacenados" type="button" name="ver" size="15" onclick="showData(this.value)"></br>
                    <label id="txtHint" size="15"></td>
                </tr>

        </table></br>
    </form>

    <form method="post" action="Actualizar.php">
        <h3 align="center">Actualiza tu escolaridad</h3>
        <table border="1" align="center" width="350em" cellpadding="8">
            <tr>        
                <td align="center">
                    <label>Actualizar por id: </label>
                    <input type="text" name="actualizarId" size="15"></td>
            </tr>

            <tr>
                <td align="center">
                    <label>Escolaridad nueva: </label>
                    <input type="text" name="actualizarEsc" size="15"></td>
            </tr>

            <tr>
                <td align="center">
                <input type="submit" size="15" value="Actualizar"></td>
            </tr>
        </table></br>
    </form>

    <form method="post" action="Eliminar.php">
        <h3 align="center">Puedes eliminarte desde aquí</h3>
        <table border="1" align="center" width="350em" cellpadding="8">
            <tr>        
                <td align="center">
                    <label>Eliminar por id: </label>
                    <input type="text" name="eliminarId" size="15">
                    <input type="submit" size="15" value="Eliminar">
                    </td>
            </tr>
        </table></br>
    </form>

    <script>
    function showData(str) {
      var xhttp;  
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "Seleccionar.php?q="+str, true);
      xhttp.send();
    }
    </script>

    <h2></h2>
</body>
</html>