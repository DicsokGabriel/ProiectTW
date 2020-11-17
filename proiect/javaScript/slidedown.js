function function1(){
	if(document.getElementById("menu2").style.height == "100px"){
		document.getElementById("filter").style.visibility = "collapse";
		document.getElementById("menu2").style.height = "0px";
	}
	else {
		document.getElementById("filter").style.visibility = "visible";
		document.getElementById("menu2").style.height = "100px";
	}
}