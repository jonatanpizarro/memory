<head>	
<link rel="stylesheet" type="text/css" href="mem.css">
<script src="func.js" type="text/javascript"></script>

</head>
<div>
	<div id="info" >

	</div>

		<table >



		<?php  
			$columnas= $_POST["colum"];
			$filas = $_POST["fila"];

			$parejas=($filas*$columnas)/2; //Esto te da el numero de cartas que vas a necesitar

			$cartas = array();

			for ($i=1; $i <=$parejas; $i++) { 
				$car="<img id=$i  src='imagenes/$i.png' width='90' height='100'>";
				array_push($cartas,$car);
				array_push($cartas,$car);
			}
			shuffle($cartas);

			$contador=-1;


		
			for($f=0;$f<$columnas;$f++){
					
						echo "<tr>";

						

						for ($i=0; $i <$filas ; $i++) {
							
																
								$contador++;
									//echo "$contador";
								$a=$cartas[$contador];
														
								echo "<td>
								<label>
									<input type='checkbox' />
									    <div class='card' id='$contador' onClick='comprobar(".$contador.")' >
									         <div class='front'  ><img   src='imagenes/carta.jpeg' width='90' height='100'></div>
							        		 <div class='back'> $a </div>
									    </div>
									</label>
									 </td>";																				
						}

						echo "</tr>";
					}
			?>

		</table>
</div>
