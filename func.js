var clics2=0;
var carta1;
var carta2;
var puntuacion =0;
var intentos =0;
var bloqueo;
var cartas=0;
var tiempo=0;
var parejas=0;
var contador=0;



function cronometro(){
	contador_s=0;
	contador_m=0;
	s=document.getElementById("seg");
	m=document.getElementById("min");

	crono =setInterval(
		function(){
			if(contador_s==60){
				contador_s=0;
				contador_m++;
				m.innerHTML=contador_m;

				if(contador_m==60){
					contador_m=0;
				}
			}
			s.innerHTML=contador_s;
			contador_s++;
		},1000);
}

function puntos(){
	puntuacion++;
	document.getElementById("puntos").innerHTML="Puntos :"+puntuacion;

}

function bloquear(pos){
	document.getElementById("check"+pos).disabled=true;  //Si la carta esta de cara no te deja volver a clickar

}


function darVuelta(a,b){   //Funcion para dar la vuelta a las cartas que no son iguales
	a.click();
	b.click();
}


function intentos1(intentos){
	document.getElementById('intentos').innerHTML="Intentos :"+intentos; //Cuenta los intentos
}

function ayuda(){
	
	//total=parejas*2;

	for (var i = 0; i <totalCartas; i++) {
		
		la=document.getElementsByClassName('card')[i];        //Gira todas las cartas
		la.click();
	}	

	setTimeout( function(){         
				for (var i = 0; i <totalCartas; i++) {
		
		la=document.getElementsByClassName('card')[i].parentNode;        
		la.click();
	}
			} , 2000);
	
	intentos=intentos+parejas;
	intentos1(intentos);
}

function valor(par){
	parejas=par;
	totalCartas=par*2;          //Sirve para coger todas las cartas que hay en el tablero
	
}




function bloquearTodo(cartas,pos1,pos2){
	for (var i =0; i<cartas ; i++) {
		posicion ="check"+i;
		
	
		if (posicion=="check"+pos1 || posicion=="check"+pos2) {
			
			continue;
			
		}else{
			
			document.getElementById(posicion).disabled=true;
		}
		
	}
	
}

function desbloquearTodo(cartas,pos1,pos2){
	for (var i =0; i<cartas ; i++) {
		posicion ="check"+i;
		document.getElementById(posicion).disabled=false;
		
	}
	
}





function comprobar(pos,id,total){
	if (contador==0) {cronometro();}
	contador=1;
	clics2++;
	intentos1(intentos);
	cartas=total*2;    //Aqui consigo saber todas las cartas que hay en el tablero


	if (clics2==1) {
		carta1=id;
		pos1=pos;
		label1=document.getElementsByClassName('card')[pos].parentNode;  //cojo la label para despues poder clicar y dar la vuelta a la carta
	}
	
	else if (clics2==2){
		
		pos2=pos;
		carta2=id;
		label2=document.getElementsByClassName('card')[pos].parentNode;
		

		if (carta1==carta2) {
				
			intentos++;
			intentos1(intentos);
			puntos();		
			
		}else{
			bloquearTodo(cartas,pos1,pos2);  //bloquea todas las cartas para no poder girarlas
			setTimeout( function(){         //temporizador para que de tiempo a ver las cartas
				clics2=0;				
				desbloquearTodo(cartas);  //desbloquea todas lar cartas para volver a poder girar
				darVuelta(label1,label2)
			} , 2000);
			intentos++;
			intentos1(intentos);
			
		}
	}	
}