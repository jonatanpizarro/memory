<!DOCTYPE html>

<style type="text/css">
	body{
		background-image: url(m.jpeg);
		background-repeat : no-repeat;
		background-position : center;
		background-attachment : fixed;
		height: 100%;

	}

	#contenedor {
		width: 1300px;
		height: 700px;
		background-color: red;
		
	}

	#boton {
		position: absolute;
		width: 500px;
		height: 300px;
		margin-top: 200px;
		margin-left: 350px;
		background-color: green;
	}

	#iniciar {
		margin-left: 175px;
		margin-top: 125px;
		text-decoration: none;
	    padding: 10px;
	    font-weight: 600;
	    font-size: 20px;
	    color: #ffffff;
	    background-color: #1883ba;
	    border-radius: 6px;
	    border: 2px solid #0016b0;
	}

	#iniciar:hover {
    color: #1883ba;
    background-color: #ffffff;
  }


</style>


<html>
<head>
	<title></title>
</head>
<body>
	<div id="contenedor">
		
		<div id="boton">
			<form action="yolo.php" method="POST">

			<div id="fil">
		
				<label for="fila">Columnas</label>
				
				<input type="number" name="fila">
			</div>

			<div id="col">
				<label for="colum">Filas  </label>
				
				<input type="number" name="colum"/>

			</div>

			
			<input type="submit" id="iniciar" value="Empezar juego"/>	

		</form>
		
		</div>	
	</div>
</body>
</html>