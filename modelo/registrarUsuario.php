<?php

require_once('modelo/datos.php');

class registrarUsuario extends datos{

    private $cedula;
    private $priNombre;
    private $segNombre;
    private $priApellido;
    private $segApellido;
    private $usuario;
    private $contraseña;

    //---------------------------SET---------------------------

    function set_cedula($valor){
        $this->cedula=$valor;
    }

    function set_priNombre($valor){
        $this->priNombre=$valor;
    }

    function set_segNombre($valor){
        $this->segNombre=$valor;
    }

    function set_priApellido($valor){
        $this->priApellido=$valor;
    }
    function set_segApellido($valor){
        $this->segApellido=$valor;
    }

    function set_usuario($valor){
        $this->usuario=$valor;
    }
    function set_contraseña($valor){
        $this->contraseña=$valor;
    }

//----------------------------------GET----------------------------------

    function get_cedula(){
        return $this->cedula;
    }

    function get_priNombre(){
        return $this->priNombre;
    }

    function get_segNombre(){
        return $this->segNombre;
    }

    function get_priApellido(){
        return $this->priApellido;
    }

    function get_segApellido(){
        return $this->segApellido;
    }

    function get_usuario(){
        return $this->usuario;
    }
    function get_contraseña(){
        return $this->contraseña;
    }

    function incluir(){
		
		if(!$this->existe($this->cedula)){
            $co = $this->conectar();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {
                $co->query("Insert into usuarios(
                    cedula,
                    priNombre,
                    segNombre,
                    priApellido,
                    segApellido,
                    usuario,
                    contraseña
                    )
                    Values(
                    '$this->cedula',
                    '$this->priNombre',
                    '$this->segNombre',
                    '$this->priApellido',
                    '$this->segApellido',
                    '$this->usuario',
                    '$this->contraseña'
                    )");
                    $r['resultado'] = 'incluir';
			        
        } catch(Exception $e) {
			$r['resultado'] = 'error';
			$r['mensaje'] =  $e->getMessage();
		}
	}
	else{
		$r['resultado'] = 'incluir';
		$r['mensaje'] =  'La cedula ya existe';
	}
	return $r;
	}
	
	function modificar(){
		
        $co = $this->conectar();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$r=array();
		if($this->existe($this->cedula)){
			try {
					$co->query("Update usuarios set 
					    cedula = '$this->cedula',
						priNombre = '$this->priNombre',
						segNombre = '$this->segNombre',
						priApellido = '$this->priApellido',
						segApellido = '$this->segApellido',
						usuario = '$this->usuario',
                        contraseña = '$this->contraseña'
						where
						cedula = '$this->cedula'
						");
						$r['resultado'] = 'modificar';
			           
			} catch(Exception $e) {
				$r['resultado'] = 'error';
			    $r['mensaje'] =  $e->getMessage();
			}
		}
		else{
			$r['resultado'] = 'modificar';
			$r['mensaje'] =  'Cedula no registrada';
		}
		return $r;
	}
	
	function eliminar(){
		$co = $this->conectar();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->cedula)){
			try {
					$co->query("delete from usuarios 
						where
						cedula = '$this->cedula'
						");
						$r['resultado'] = 'eliminar';
			} catch(Exception $e) {
				$r['resultado'] = 'error';
			    $r['mensaje'] =  $e->getMessage();
			}
		}
		else{
			$r['resultado'] = 'eliminar';
			$r['mensaje'] =  'Cedula no registrada';
		}
		return $r;
	}

    function consultar(){
		$co = $this->conectar();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$r=array();
		try{
			
			$resultado = $co->query("Select * from usuarios");
			
			if($resultado){
				
				$respuesta = '';
				foreach($resultado as $r){
					$respuesta = $respuesta."</tr style='cursor:pointer' onclick='coloca(this);'>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['cedula'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['priNombre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['segNombre'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['priApellido'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['segApellido'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['usuario'];
						$respuesta = $respuesta."</td>";
                        $respuesta = $respuesta."<td>";
							$respuesta = $respuesta.$r['contraseña'];
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.'<button type="button" class="pencil" onclick="pone(this,0)"><i class="bx bxs-edit-alt"></i></button>';
						$respuesta = $respuesta."</td>";
						$respuesta = $respuesta."<td>";
							$respuesta = $respuesta.'<button type="button" class="pencil" onclick="pone(this,1)"><i class="bx bx-trash"></i></button>';
						$respuesta = $respuesta."</td>";
					$respuesta = $respuesta."</tr>";
				}
				$r['resultado'] = 'consultar';
				$r['mensaje'] =  $respuesta;
			}
			else{
				$r['resultado'] = 'consultar';
				$r['mensaje'] =  '';
			}
			
		}catch(Exception $e){
			$r['resultado'] = 'error';
			$r['mensaje'] =  $e->getMessage();
		}
		return $r;
		
	}

	private function existe($cedula){
		$co = $this->conectar();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			
			$resultado = $co->query("Select * from usuarios where cedula='$cedula'");
			
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;
			    
			}
			else{
				
				return false;;
			}
			
		}catch(Exception $e){
			return false;
		}
	}
	
	function consultatr(){
		$co = $this->conectar();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
			
			$resultado = $co->query("Select * from usuarios where cedula='$this->cedula'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){
			    
				$envia = array('resultado'=>"encontro");
				
				$envia += $fila;
								
				return json_encode($envia);
			    
			}
			else{
				
				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);
				
				
			}
			
		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}
		
	}

    


}



?>