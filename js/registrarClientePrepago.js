$(document).ready(function(){

	//Validacion de nombre
	$("#nombre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#nombre").on("keyup",function(){
		validarkeyup(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]{1,50}$/,
		$(this),$("#snombre"),"Solo letras");
	});

	//Validacion de apellido
	$("#apellido").on("keypress",function(e){
		validarkeypress(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#apellido").on("keyup",function(){
		validarkeyup(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]{1,50}$/,
		$(this),$("#sapellido"),"Solo letras");
	});

	//validar cedula
	$("#cedula").on("keypress",function(e){
		validarkeypress(/^[VE0-9-\b]*$/,e);
	});
	
	$("#cedula").on("keyup",function(){
		validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$(this),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ");
	});

	//validar direccion
	$("#direccion").on("keypress",function(e){
		validarkeypress(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#direccion").on("keyup",function(){
		validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,35}$/,
		$(this),$("#sdireccion"),"Solo letras y/o numeros entre 6 y 35 caracteres");
	});

	//validar telefono
	$("#telefono").on("keypress",function(e){
		validarkeypress(/^[0-9\b-]*$/,e);
	});
	
	$("#telefono").on("keyup",function(){
	    validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$(this),$("#stelefono"),"El formato debe ser 0400-0000000");
	});

	//validar correo
	$("#correo").on("keypress",function(e){
		validarkeypress(/^[A-Za-z@_.\b\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#correo").on("keyup",function(){
		validarkeyup(/^[A-Za-z_\u00f1\u00d1\u00E0-\u00FC-]{3,15}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$(this),$("#scorreo"),"El formato debe ser nombreCorreo@mail.com");
	});


	$("#guardar").on("click",function(){
		if(validarenvio()){
			$("#accion").val("guardar");	
			$("#f").submit();
		}
	});
	$("#modificar").on("click",function(){
		if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
			$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ")==0){
			muestraMensaje("El formato debe ser V-00000000 o E-00000000 ");	
			
		}
		else{	
			$("#accion").val("modificar");	
			$("#f").submit();
		}
	});
	$("#eliminar").on("click",function(){
		if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
			$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ")==0){
			muestraMensaje("El formato debe ser V-00000000 o E-00000000 ");	
			
		}
		else{	
			$("#accion").val("eliminar");	
			$("#f").submit();
		}
		
	});

})

function validarenvio(){
	//validar nombre
	if(validarkeyup(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]{1,50}$/,
		$("#nombre"),$("#snombre"),"Solo letras")==0){
		muestraMensaje("el nombre solo contiene letras");
		return false;
	}
	else if(validarkeyup(/^[A-Za-z-\b\s\u00f1\u00d1\u00E0-\u00FC-]{1,50}$/,
		$("#apellido"),$("#sapellido"),"Solo letras")==0){
		muestraMensaje("el apellido solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ")==0){
		muestraMensaje("El formato debe ser V-00000000 o E-00000000 ");	
		return false;					
	}	

	else if(validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,35}$/,
		$("#direccion"),$("#sdireccion"),"Solo letras y/o numeros entre 6 y 35 caracteres")==0){
		muestraMensaje("La direccion debe ser <br/>"+
		"Solo letras y/o numeros entre 6 y 35 caracteres");
		return false;				
	}

	else if(validarkeyup(/^[0-9]{4}[-]{1}[0-9]{7,8}$/,$("#telefono"),
		$("#stelefono"),"El formato debe ser 0400-0000000")==0){
		muestraMensaje("El Telefono debe ser <br/>"+
		"9999-9999999");	 
	    return false;
	}

	else if(validarkeyup(/^[A-Za-z_\u00f1\u00d1\u00E0-\u00FC-]{3,15}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{2,3}$/,
		$("#correo"),$("#scorreo"),"El formato debe ser nombreCorreo@mail.com")==0){
		muestraMensaje("El Correo debe ser <br/>"+
		"alguien@servidor.com");	 
		return false;
	}
	
	return true;
}

 
function validarkeypress(er,e){
	
	key = e.keyCode;
	
	
    tecla = String.fromCharCode(key);
	
	
    a = er.test(tecla);
	
    if(!a){
	
		e.preventDefault();
    }
	
    
}

function validarkeyup(er,etiqueta,etiquetamensaje,
mensaje){
	a = er.test(etiqueta.val());
	if(a){
		etiquetamensaje.text("");
		return 1;
	}
	else{
		etiquetamensaje.text(mensaje);
		return 0;
	}
}