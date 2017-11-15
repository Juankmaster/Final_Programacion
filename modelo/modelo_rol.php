<?php 

require_once("../modeloAbstractoBD.php");

class Roles extends ModeloAbstractoBD {

		private $id_rol;
	    private $nom_rol;
	    private $des_rol;
	   
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "SELECT * FROM rol WHERE id_rol='$codigo'";
				
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
			ON (c.Nit = e.Nit) inner join tb_empleado as p ON (c.id_empleado = p.id_empleado)";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}

			
		public function listado_Roles() {
			$this->query = "
			SELECT *FROM rol";
			
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
      
			$this->query = "INSERT INTO rol (id_rol,Nom_Rol,Des_Rol) VALUES 
			                (NULL,'$nom_rol','$desc_rol')";
			
			$this->ejecutar_query_simple();


			/*endif;*/
		/*endif;*/
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query = "UPDATE rol SET Nom_Rol='$nom_rol',Des_Rol='$desc_rol' 
			                WHERE id_rol = '$id_rol'";
			
			
			$this->ejecutar_query_simple();

		}

		
		public function borrar($id_rol='') {

			$this->query = "DELETE FROM rol WHERE id_rol='$id_rol'";
			
			
			$this->ejecutar_query_simple();
		}

		
		function __destruct() {
			unset($this);
		}
	}

 ?>





