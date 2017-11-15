<?php 
require_once("../modeloAbstractoBD.php");

class Proceso extends ModeloAbstractoBD {

		private $id_proceso;
		private $Nom_proceso;
		private $id_empleado;
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		
		public function consultar($codigo='') {
			if($codigo!=''):

				$this->query = "SELECT * FROM proceso WHERE id_proceso='$codigo'";
				
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
			$this->query = "SELECT *FROM proceso";
			
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

			$this->query = "INSERT INTO proceso(id_proceso,Nom_proceso,id_empleado)VALUES
							(NULL,'$nom_proceso','$id_empleado')";
			
			$this->ejecutar_query_simple();
			
			/*endif;*/
		/*endif;*/
			
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query= "UPDATE proceso SET Nom_proceso='$nom_proceso',id_empleado='$id_empleado'
			               WHERE id_proceso='$id_proceso'";
			
			$this->ejecutar_query_simple();
			
		}
			
		public function borrar($id_proceso='') {
			
			$this->query ="DELETE FROM proceso WHERE id_proceso='$id_proceso'";
			
			$this->ejecutar_query_simple();
		}
			
		function __destruct() {
			unset($this);
		}
	}

 ?>


			
			

		

		
			