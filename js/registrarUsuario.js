function guardar(){
	var datos = new FormData();
	datos.append('accion','guardar');
	enviaAjax(datos);	
}

$(document).ready(function(){

	//Validacion de cedula

	$("#cedula").on("keypress",function(e){
		validarkeypress(/^[VE0-9-\b]*$/,e);
	});
	
	$("#cedula").on("keyup",function(){
		validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$(this),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000");
		if($("#cedula").val().length > 7){
		var datos = new FormData();
			datos.append('accion','consultatr');
			datos.append('cedula',$(this).val());
			enviaAjax(datos,'consultatr');	
		}
	});


	//Validacion de nombre
	$("#priNombre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#priNombre").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#snombre"),"Solo letras");
	});

	//Validacion de nombre
	$("#segNombre").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#segNombre").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#s-seg-nombre"),"Solo letras");
	});

	//Validacion de apellido
	$("#priApellido").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#priApellido").on("keyup",function(){
		validarkeyup(/^[A-Za-z]{1,50}$/,
		$(this),$("#sapellido"),"Solo letras");
	});

	//Validacion de apellido
	$("#segApellido").on("keypress",function(e){
		validarkeypress(/^[A-Za-z]*$/,e);
	});
	
	$("#segApellido").on("keyup",function(){
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
			var datos = new FormData();
			datos.append('accion','guardar');
			datos.append('cedula',$("#cedula").val());
			datos.append('priNombre',$("#priNombre").val());
			datos.append('segNombre',$("#segNombre").val());
			datos.append('priApellido',$("#priApellido").val());
			datos.append('segApellido',$("#segApellido").val());
			datos.append('usuario',$("#usuario").val());
			datos.append('contraseña',$("#contraseña").val());
			enviaAjax(datos,'incluir');
		}
	});
	$("#modificar").on("click",function(){
		if(validarenvio()){
	
			var datos = new FormData();
			datos.append('accion','modificar');
			datos.append('cedula',$("#cedula").val());
			datos.append('priNombre',$("#priNombre").val());
			datos.append('segNombre',$("#segNombre").val());
			datos.append('priApellido',$("#priApellido").val());
			datos.append('segApellido',$("#segApellido").val());
			datos.append('usuario',$("#usuario").val());
			datos.append('contraseña',$("#contraseña").val());
			enviaAjax(datos,'modificar');
			
		}
	});
	
	$("#eliminar").on("click",function(){
		
		if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
			$("#scedula"),"El formato debe ser 9999999")==0){
			muestraMensaje("El formato debe ser V-00000000 o E-00000000");	
			
		}
		else{	
			
			var datos = new FormData();
			datos.append('accion','eliminar');
			datos.append('cedula',$("#cedula").val());
			enviaAjax(datos,'eliminar');
		}
		
	});

	$("#guardar").on("click",function(){
	var datos = new FormData();
	datos.append('accion','consultar');
	enviaAjax(datos,'consultar');
});
	

})

function validarenvio(){
	if(validarkeyup(/^[VE]{1}[-]{1}[0-9]{7,8}$/,$("#cedula"),
		$("#scedula"),"El formato debe ser V-00000000 o E-00000000 ")==0){
		muestraMensaje("El formato debe ser V-00000000 o E-00000000 ");	
		return false;					
	}	
	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#priNombre"),$("#snombre"),"Solo letras")==0){
		muestraMensaje("el nombre solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#segNombre"),$("#s-seg-nombre"),"Solo letras")==0){
		muestraMensaje("el nombre solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#priApellido"),$("#sapellido"),"Solo letras")==0){
		muestraMensaje("el apellido solo contiene letras");
		return false;
	}

	else if(validarkeyup(/^[A-Za-z]{1,50}$/,
		$("#segApellido"),$("#s-seg-apellido"),"Solo letras")==0){
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

function coloca(linea){
	$("#cedula").val($(linea).find("td:eq(0)").text());
	$("#priNombre").val($(linea).find("td:eq(1)").text());
	$("#segNombre").val($(linea).find("td:eq(2)").text());
	$("#priApellido").val($(linea).find("td:eq(3)").text());
	$("#segApellido").val($(linea).find("td:eq(4)").text());
	$("#usuario").val($(linea).find("td:eq(5)").text());
	$("#contraseña").val($(linea).find("td:eq(6)").text());
	
}

function enviaAjax(datos,accion){

	$.ajax({
		async: true,
        url: '',
        type: 'POST',
		contentType: false,
        data: datos,
		processData: false,
	    cache: false,
            success: function(respuesta){
			
			if(accion=='guardar'){
				$("#resultadoconsulta").html(respuesta);
			}
			else if(accion=='consultatr'){
				lee = JSON.parse(respuesta);
				
				if(lee['resultado']=='encontro'){  
					$("#cedula").val(lee[0].cedula);
					$("#priNombre").val(lee[0].priNombre);
					$("#segNombre").val(lee[0].segNombre);
					$("#priApellido").val(lee[0].priApellido);
					$("#segApellido").val(lee[0].segApellido);
					$("#usuario").val(lee[0].usuario);
					$("#contraseña").val(lee[0].contraseña);
					
				}
				else if(lee['resultado']=='noencontro'){

				}
				else {
					muestraMensaje(lee['resultado']);
				}
				
			
			}
			else if(accion=='obtienefecha'){
				$("#fechadenacimiento").val(respuesta);
			}
			else{
				limpia();
				muestraMensaje(respuesta);
				
			}
            },
            error: function(){
			muestraMensaje("Error con ajax");	
            }
			
    }); 

	function limpia(){
		
		$("#cedula").val("");
		$("#priNombre").val("");
		$("#segNombre").val("");
		$("#priApellido").val("");
		$("#segApellido").val("");
		$("#usuario").val("");
		$("#contraseña").val("");
		
		
		
	}
	
}