var clics2=0;
var clicks=0;
var a;
var b;
var target;

/*function start(cont){
	    comprobar(cont);

}*/

//function front()

function comprobar(cont){
	clics2++;


	if (clics2==1) {
		a=document.getElementsByClassName('card')[cont].childNodes[1].parentNode.childNodes[3].childNodes[1].src;
		alert("se ha cambiado a");
		alert(a);
	}else{
		b=document.getElementsByClassName('card')[cont].childNodes[1].parentNode.childNodes[3].childNodes[1].src;
		alert("se ha cambiado b");
		clics2=0;
		alert(b);
	}	

	if (clics2==0) {
		if (a==b) {
			alert("igual");
			
		}else{
			alert("nop");
			
			
		}}
	


	
	
}


