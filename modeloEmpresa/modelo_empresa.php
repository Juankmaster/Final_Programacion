<?php 

require_once("../modeloAbstractoBD.php");

class Empresa extends ModeloAbstractoBD {

		private $id_empresa;
		private $nom_empresa;
		private $dir_empresa;
		private $tel_empresa;
		private $email_empresa;
	   
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "SELECT * FROM empresa WHERE id_empresa= '$codigo'";
				
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
			$this->query = "SELECT c.id_empresa,c.Nom_empresa,c.Dir_empresa,c.Tel_empresa ,c.Email_empresa,
			 p.Nom_ciudad FROM empresa as c inner join ciudad as p
			ON (c.id_ciudad = p.id_ciudad)";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
			
			
		}
			
		public function listado() {
			$this->query = "SELECT * FROM empresa";
			
			
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
      
			$this->query = "INSERT INTO empresa(id_empresa,Nom_empresa,Dir_empresa,Tel_empresa,Email_empresa,id_ciudad) 
                            VALUES (NULL,'$nom_empresa','$dir_empresa','$tel_empresa','$email_empresa','$id_ciudad')";
			
			$this->ejecutar_query_simple();


			/*endif;*/
		/*endif;*/
		}
		
		public function editar($datos=array()) {

			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query = "UPDATE empresa SET Nom_empresa='$nom_empresa', Dir_empresa='$dir_empresa', 
						     Tel_empresa='$tel_empresa', Email_empresa ='$email_empresa', 
						      id_ciudad='$id_ciudad'   WHERE id_empresa = '$id_empresa'";
							
			
			$this->ejecutar_query_simple();

		}

		
		public function borrar($id_empresa='') {

			$this->query = "DELETE FROM empresa WHERE id_empresa='$id_empresa'";
			
			$this->ejecutar_query_simple();
			
		}

		function __destruct() {
			unset($this);
		}
		
	}

 ?>

