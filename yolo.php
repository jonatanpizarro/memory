<style type="text/css">
label {
    -webkit-perspective: 1000px;
    transform-style: preserve-3d;
    width: 100px;
    height: 90px;
    transform: translate(-50%, -50%);
    cursor: pointer;

}

.card {
    position: absolute;
    height: 100px;
    width: 90px;
    transform-style: preserve-3d;
    transition: all 600ms;
    z-index: 20;
}

    .card div {
        position: absolute;
        height: 100px;
        width: 90px ;
        background: #FFF;
        text-align: center;
        backface-visibility: hidden;
        border-radius: 2px;
    }

    .card .back {
        
        -webkit-transform: rotateX(180deg);
        transform: rotateX(180deg);
    }

label:hover .card {
    -webkit-transform: rotateX(20deg);
    transform: rotateX(20deg);
}

input {
    display: none;
}

:checked + .card {
    transform: rotateX(180deg);
    -webkit-transform: rotateX(180deg);
}

label:hover :checked + .card {
    transform: rotateX(160deg);
    -webkit-transform: rotateX(160deg);

}

table {
	text-align: center;
	height: 100%;
	width: 100%;
	margin-left: 100px;
}

</style>





	<table >



	<?php  
		$columnas= $_POST["colum"];
		$filas = $_POST["fila"];
		$a= "<img  src='imagenes/asd.jpeg' width='90' height='100'>";
		
		echo "$a";
		for($f=0;$f<$columnas;$f++){
				
					echo "<tr>";

					for ($i=0; $i <$filas ; $i++) {
				
							echo "<td >
							<label>
								<input type='checkbox'  />
							    <div class='card'>
							         <div class='front'><img  src='imagenes/carta.jpeg' width='90' height='100'></div>
					        		<div class='back'>$a</div>
							    </div>
							</label>


							 </td>";
																		
					}

					echo "</tr>";
				}
		?>


		
		

		
	</table>