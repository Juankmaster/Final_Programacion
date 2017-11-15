<?php 

require_once("../modeloAbstractoBD.php");

class Usuarios extends ModeloAbstractoBD {
		private $id_usuario;
		private $Nom_Usuario;
		private $Email;
		private $clave_usuario;
		private $id_rol;
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "
				SELECT * FROM usuario WHERE id_usuario='$codigo'";
				
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
		public function listado_Usuario() {
			$this->query = "SELECT *FROM usuario";
			
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
      

			$this->query = "INSERT INTO usuario(id_usuario,Nom_Usuario,Email,clave_usuario,id_rol)
			       VALUES (NULL,'$nom_usuario','$email_usuario','$clave_usuario','$rol_usuario')";
			

			$this->ejecutar_query_simple();
			/*endif;*/
		/*endif;*/

		}
		
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query = "UPDATE usuario SET Nom_Usuario='$nom_usuario', Email='$email_usuario',clave_usuario='$clave_usuario',
 			                id_rol='$rol_usuario' WHERE id_usuario='$id_usuario'";
			
			
			$this->ejecutar_query_simple();
		}

		
		public function borrar($id_usuario='') {

			$this->query = "DELETE FROM usuario WHERE id_usuario='$id_usuario'";
			
			
			$this->ejecutar_query_simple();
		}

		
		function __destruct() {
			unset($this);
		}
	}



 ?>

