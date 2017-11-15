<?php 
require_once("../modeloAbstractoBD.php");

class Empleado extends ModeloAbstractoBD {
		private $id_empleado;
		private $Nom_empleado;
		private $Ape_empleado;
		private $Cel_empleado;
		private $Email_empleado;
		private $Dir_empleado;
		private $id_cargo;
		private $id_sucursal;
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($codigo='') {
			if($codigo!=''):
				$this->query = "SELECT * FROM empleado WHERE id_empleado ='$codigo'";
				
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
			$this->query ="SELECT c.id_empleado,c.Nom_empleado,c.Ape_empleado,c.Cel_empleado,
			 c.Email_empleado, c.Dir_empleado,e.Nom_cargo, p.Nom_sucursal
			FROM empleado as c inner join cargo as e
			ON (c.id_cargo = e.id_cargo) inner join sucursal as p ON (c.id_sucursal = p.id_sucursal)";
			

			
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listado() {
			$this->query ="SELECT *FROM empleado";
			
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
			
			$this->query = "INSERT INTO empleado(id_empleado, Nom_empleado, Ape_empleado, Cel_empleado, Email_empleado, Dir_empleado, id_cargo, id_sucursal)
			VALUES(NULL,'$nom_empleado','$ape_empleado','$cel_empleado','$email_empleado','$dir_empleado','$id_cargo','$id_sucursal')";
			
			
			
			
			$this->ejecutar_query_simple();
		/*endif;*/
	/*endif;*/
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE empleado
			SET Nom_empleado='$nom_empleado', Ape_empleado='$ape_empleado', Cel_empleado='$cel_empleado',
			Dir_empleado='$dir_empleado', id_cargo='$id_cargo', id_sucursal='$id_sucursal'
			WHERE id_empleado = '$id_empleado'";
			
			$this->ejecutar_query_simple();
		}

		
		public function borrar($id_empleado='') {
			$this->query = "
			DELETE FROM empleado
			WHERE id_empleado = '$id_empleado'
			";
			$this->ejecutar_query_simple();
		}

		
		function __destruct() {
			unset($this);
		}
	}



 ?>