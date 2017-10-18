var clics2=0;
var clicks=0;
var a;
var b;
var target;

function vuelta(event){
	clics2++;

	target=(event.currentTarget.firstChild.nextSibling.);
	alert(target);

	if (clics2==1) {
		a=document.getElementsByClassName('card')[0].childNodes[1].parentNode.childNodes[3].childNodes[1].src;
		alert("se ha cambiado a");
		alert(a);
	}else{
		b=document.getElementsByClassName('card')[0].childNodes[1].parentNode.childNodes[3].childNodes[1].src;
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


function block(event){
	clicks++;
	
	

	if (clicks==2) {
		clicks=0;

	}else{
		alert("meh");
	}


}