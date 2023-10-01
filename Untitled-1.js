$("#proceso").on("click",function(){
		if($(this).text()=="Registrar Usuario"){}
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
		beforeSend: function () {},
		timeout: 10000,
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
		})
    });