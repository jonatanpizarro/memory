var clics2=0;
var clicks=0;
var carta1;
var carta2;
var label1;
var puntuacion =0;
var intentos =0;
var bloqueo;
var cartas=0;

/*function start(pos,id){
		bloquear(pos);
	    comprobar(pos,id);

}*/



function bloquear(pos){
	document.getElementById("check"+pos).disabled=true;

}

function desbloquear(pos,pos1){
	document.getElementById("check"+pos).disabled=false;
	document.getElementById("check"+pos1).disabled=false;
}

function darVuelta(a,b){
	a.click();
	b.click();
}

function intentos1(intentos){
	document.getElementById('intentos').innerHTML="Intentos :"+intentos;
}

function bloquearTodo(pos){
	for (var i =0; i<=cartas ; i++) {
		document.getElementById("check"+i).disabled=true;
	}
}

function borraId(pos1,pos2){
	document.getElementsById(pos1).removeAttribute("id");
	document.getElementsById(pos2).removeAttribute("id");

}

function cogerValor(total){
	cartas=total*2;
}



function comprobar(pos,id){
	clics2++;
	intentos1(intentos);


	if (clics2==1) {
		carta1=id;
		pos1=pos;
		label1=document.getElementsByClassName('card')[pos].parentNode;
	}
	
	else if (clics2==2){
		bloquearTodo();
		pos2=pos;
		carta2=id;
		label2=document.getElementsByClassName('card')[pos].parentNode;
		

		if (carta1==carta2) {
			puntuacion++;	
			intentos++;
			borraId(pos1,pos2);
			intentos1(intentos);		
			
		}else{
			
			setTimeout( function(){
				clics2=0;				
				desbloquear(pos1,pos2);
				darVuelta(label1,label2)
			} , 2000);
			intentos++;
			intentos1(intentos);
			
		}
	}	
}