<?php 
require_once("../modeloAbstractoBD.php");

class Proveedor extends ModeloAbstractoBD {
		private $id_proveedor;
		private $Tipo_proveedor;
		private $Nom_proveedor;
		private $Ape_proveedor;
		private $Num_documento;
		private $Email_proveedor;
		private $Nit;
		private $Razon_social;
		private $Tel_proveeedor;
		private $dir_proveedor;
		private $id_ciudad;
		
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($codigo='') {
			if($codigo!=''):
				$this->query = "
				SELECT * FROM proveedor WHERE id_proveedor= '$codigo'";
				
				$this->obtener_resultados_query();
			endif;
			return $this->rows;
				
				
			// if(count($this->rows) == 1):
			// 	foreach ($this->rows[0] as $propiedad=>$valor):
			// 		$this->$propiedad = $valor;
			// 	endforeach;
			// endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT c.Num, c.id_empleado , e.Nom_empresa, p.Nom_empleado, p.Nit
			FROM tb_contrato as c inner join tb_empresa as e
			ON (c.Nit = e.Nit) inner join tb_empleado as p ON (c.id_empleado = p.id_empleado)
			";

			
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listado() {
			$this->query = "
			SELECT *FROM proveedor";
			
			
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
	/*if(array_key_exists('id_sucursal', $datos)):*/
		/*$this->consultar($datos['muni_codi']);
		if($datos['muni_codi'] != $this->muni_codi):*/
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
       /* if($datos['tipo_proveedor']=="Natural"){
          
        	$this->query = "
			INSERT INTO proveedor
			(id_proveedor, Tipo_proveedor,Nom_proveedor, Ape_proveedor,Num_documento, Email_proveedor,Tel_proveedor, Dir_proveedor, id_ciudad)
			VALUES
			(NULL,'$tipo_proveedor','$nom_proveedor','$ape_proveedor','$num_documento',
				'$email_proveedor','$tel_proveedor','$dir_proveedor','$id_ciudad')";

        }else{
			$this->query = "
			INSERT INTO proveedor
			(id_proveedor, Tipo_proveedor,Nom_proveedor, Email_proveedor,Nit, Razon_social, Tel_proveedor, Dir_proveedor, id_ciudad)
			VALUES
			(NULL,'$tipo_proveedor','$nom_proveedor','$nit',
				'$email_proveedor','$razon_social','$tel_proveedor','$dir_proveedor','$id_ciudad')";
			}*/

			$this->query = "
			INSERT INTO proveedor
			(id_proveedor, Tipo_proveedor,Nom_proveedor, Ape_proveedor,Email_proveedor, Nit, Razon_social, Tel_proveedor, Dir_proveedor, id_ciudad)
			VALUES
			(NULL,'$tipo_proveedor','$nom_proveedor','$ape_proveedor','$email_proveedor','$nit',
				'$razon_social','$tel_proveedor','$dir_proveedor','$id_ciudad')";

			$this->ejecutar_query_simple();
		/*endif;*/
	/*endif;*/
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE proveedor
			SET  Tipo_proveedor='$tipo_proveedor',Nom_proveedor='$nom_proveedor', Ape_proveedor='$ape_proveedor',
			Email_proveedor='$email', Nit='$nit', Razon_social='$razon_social',
			Tel_proveedor='$tel_proveedor', Dir_proveedor='$dir_proveedor', id_ciudad='$id_ciudad'
			WHERE id_proveedor='$id_proveedor'";
			
			$this->ejecutar_query_simple();
		}

		
		public function borrar($id_proveedor='') {
			$this->query = "
			DELETE FROM proveedor
			WHERE id_proveedor= '$id_proveedor'";
			
			$this->ejecutar_query_simple();
		}

		
		function __destruct() {
			unset($this);
		}
	}



 ?>