<head>	
<link rel="stylesheet" type="text/css" href="mem.css">
<script src="func.js" type="text/javascript"></script>

</head>
<body onload="" >
	<div>
		<div id="info" >
			<nav>
			<a id="intentos"> Intentos : 0</a> |
			<button onclick="ayuda()"> Help</button>|
			<span id="min">0</span>:<span id="seg">0</span>|
			<a id="puntos">Puntuacion : 0</a>
			</nav>
		
		
		</div>

			<table >



			<?php  
				$value=$_POST["OS"];
				$var=explode("x" ,$value);
				$columnas= $var[0];
				$filas = $var[1];

				$parejas=($filas*$columnas)/2; //Esto te da el numero de cartas que vas a necesitar



				$cartas = array();

				$contador=0;
				


				for ($i=1; $i <=$parejas; $i++) { 
					$car=$i;
					array_push($cartas,$car);
					array_push($cartas,$car);
				}
				shuffle($cartas);

				$posicion=0;


				echo "<script> valor($parejas)</script>";
				for($f=0;$f<$columnas;$f++){
						
							echo "<tr>";

							

							for ($i=0; $i <$filas ; $i++) {
								
																	
									
										//echo "$contador";
									$a=$cartas[$contador];
															
									echo "<td>
									<label>
										<input class='che' id='check$posicion' type='checkbox'/>
										    <div class='card'>

										         <div class='front'  ><img   onClick='comprobar(".$posicion.",i".$a.",".$parejas.")' src='imagenes/carta.jpeg' width='90' height='100'></div>

								        		 <div class='back'><img id=i".$a." onClick='bloquear(".$posicion.",i".$a.")' src='imagenes/".$a.".png' width='90' height='100'></div>
										    </div>
										</label>
										 </td>";
										 $contador++;	
										 $posicion++;																			
							}
							

							echo "</tr>";
						}
				?>

			</table>
	</div>
</body>