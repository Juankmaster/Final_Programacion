<?php 
require_once("../modeloAbstractoBD.php");

class Sucursal extends ModeloAbstractoBD {
		private $id_sucursal;
		private $nom_sucursal;
		private $id_empresa;
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($codigo='') {
			if($codigo!=''):
				$this->query = "
				SELECT  id_sucursal, Nom_sucursal, id_empresa 
				FROM sucursal
				WHERE id_sucursal = '$codigo'
				";
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

			$this->query ="SELECT *FROM sucursal";
			
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

					$this->query = "INSERT INTO sucursal(id_sucursal, nom_sucursal, id_empresa)
									VALUES (NULL, '$nom_sucursal', '$id_empresa')";
					
					
					$this->ejecutar_query_simple();
					
					
				/*endif;*/
			/*endif;*/
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query="UPDATE sucursal SET Nom_sucursal='$nom_sucursal',id_empresa='$id_empresa'
						  WHERE id_sucursal='$id_sucursal'";
			
			$this->ejecutar_query_simple();
			
		}
		
		public function borrar($id_sucursal='') {
			$this->query = "DELETE FROM sucursal WHERE id_sucursal = '$id_sucursal'";
			
			$this->ejecutar_query_simple();
			
		}
			
		
		function __destruct() {
			unset($this);
		}
	}



 ?>
			
			