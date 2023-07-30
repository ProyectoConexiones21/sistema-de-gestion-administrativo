$(document).ready(function(){

	//Validacion de cedula

	$("#cedula").on("keypress",function(e){
		validarkeypress(/^[VE0-9-\b]*$/,e);
	});
	
	$("#cedula").on("keyup",function(){
		validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$(this),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ");
	});


	//Validacion de nombre
	$("#nombre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#nombre").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#snombre"),"Solo letras");
	});

	//Validacion de nombre
	$("#seg-nombre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#seg-nombre").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#s-seg-nombre"),"Solo letras");
	});

	//Validacion de apellido
	$("#apellido").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#apellido").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#sapellido"),"Solo letras");
	});

	//Validacion de apellido
	$("#seg-apellido").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#seg-apellido").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#s-seg-apellido"),"Solo letras");
	});

	//Validacion de usuario
	$("#usuario").on("keypress",function(e){
		validarkeypress(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#usuario").on("keyup",function(){
		validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,12}$/,
		$(this),$("#susuario"),"Solo letras y/o numeros y/o # - entre 6 y 12 caracteres");
	});

	//Validacion de	contraseña
	$("#contraseña").on("keypress",function(e){
		validarkeypress(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]*$/,e);
	});
	
	$("#contraseña").on("keyup",function(){
		validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,12}$/,
		$(this),$("#scontraseña"),"Solo letras y/o numeros y/o # - entre 6 y 12 caracteres");
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
	if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ")==0){
		muestraMensaje("El formato debe ser V-00000000 o E-00000000 ");	
		return false;					
	}	
	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#nombre"),$("#snombre"),"Solo letras")==0){
		muestraMensaje("el nombre solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#seg-nombre"),$("#s-seg-nombre"),"Solo letras")==0){
		muestraMensaje("el nombre solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#apellido"),$("#sapellido"),"Solo letras")==0){
		muestraMensaje("el apellido solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#seg-apellido"),$("#s-seg-apellido"),"Solo letras")==0){
		muestraMensaje("el apellido solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,12}$/,
	$("#usuario"),$("#susuario"),"Solo letras y/o numeros y/o # - entre 6 y 12 caracteres")==0){
	muestraMensaje("Usuario <br/>Solo letras y/o numeros y/o # - entre 6 y 12 caracteres");
	return false;
	}

	else if(validarkeyup(/^[A-Za-z0-9,#\b\s\u00f1\u00d1\u00E0-\u00FC-]{6,12}$/,
	$("#contraseña"),$("#scontraseña"),"Solo letras y/o numeros y/o # - entre 6 y 12 caracteres")==0){
	muestraMensaje("Contraseña <br/>Solo letras y/o numeros y/o # - entre 6 y 12 caracteres");
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