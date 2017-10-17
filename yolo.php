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

			/*$carta = "<img src='imagenes/carta.jpeg' width='90' height='100'>";
			$AsDiam="<img id='2'  onClick='vuelta(this.id)' src='imagenes/asd.jpeg' width='90' height='100'>";
			$AsCor="<img id='3'  onClick='vuelta(this.id)' src='imagenes/asc.png' width='90' height='100'>";
 			$AsPic="<img id='4'  onClick='vuelta(this.id)' src='imagenes/aspicas.jpeg' width='90' height='100'>";
			$AsTre="<img id='5'  onClick='vuelta(this.id)' src='imagenes/ast.png' width='90' height='100'>";
			$KCor="<img id='6'   onClick='vuelta(this.id)' src='imagenes/kcor.png' width='90' height='100'>";
			$KPic="<img id='7'   onClick='vuelta(this.id)' src='imagenes/kpic.jpg' width='90' height='100'>";
			$KDia="<img id='8'   onClick='vuelta(this.id)' src='imagenes/kdia.jpeg' width='90' height='100'>";
			$KTre="<img id='9'   onClick='vuelta(this.id)' src='imagenes/ktre.jpg' width='90' height='100'>";
			$JCor="<img id='10'  onClick='vuelta(this.id)' src='imagenes/jcor.png' width='90' height='100'>";
			$JDia="<img id='11'  onClick='vuelta(this.id)' src='imagenes/jdia.jpeg' width='90' height='100'>";
			$JTrev="<img id='12' onClick='vuelta(this.id)' src='imagenes/jtrev.jpeg' width='90' height='100'>";
			$JPic= "<img id='13' onClick='vuelta(this.id)' src='imagenes/jpic.jpeg' width='90' height='100'>";

			$cartas = array($AsDiam,$AsCor,$AsPic,$AsTre,$JCor,$KCor,$KPic,$KDia,$KTre,$JDia,$JTrev,$JPic );
			shuffle($cartas);
			$mezcla=array(); //Mezclo la lista que contiene todas las cartas y creo la lista que va a contener las cartas que se van  a printar*/
			$cartas = array();

			for ($i=1; $i <=$parejas; $i++) { 
				$car="<img id=$i  src='imagenes/$i.png' width='90' height='100'>";
				array_push($cartas,$car);
				array_push($cartas,$car);
			}
			shuffle($cartas);

			$contador=-1;

			/*for ($i=0; $i <$parejas ; $i++) {   //Cojo el numero de cartas que voy a necesitar y las metos 2 veces en la misma lista y luego lo mezclo
							$l= $cartas[$i];
							array_push($mezcla,$l);
							array_push($mezcla,$l);
							shuffle($mezcla);
						}*/


			//$long=count($cartas);
			//echo "$long";
			//$ids=0;
		
			for($f=0;$f<$columnas;$f++){
					
						echo "<tr>";

						

						for ($i=0; $i <$filas ; $i++) {
							
																
								$contador++;
									//echo "$contador";
								$a=$cartas[$contador];
														
								echo "<td>
								<label>
									<input type='checkbox' />
									    <div class='card' onClick='vuelta(event)' >
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