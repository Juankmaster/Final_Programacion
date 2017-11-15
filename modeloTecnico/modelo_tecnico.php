<?php 

require_once("../modeloAbstractoBD.php");

class Tecnico extends ModeloAbstractoBD {

		private $id_tecnico;
		private $nom_tecnico;
		private $Ape_tecnico;
		private $Cel_tecnico;
		private $Email_tecnico;

				
		function __construct() {
			//$this->db_name = '';
		}
				
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "SELECT * FROM tecnico WHERE id_tecnico='$codigo'";
				
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
			$this->query = "SELECT c.id_tecnico,c.Nom_seleccion,s.Nom_sede,p.Nom_pais,
			t.Nom_tecnico FROM seleccion as c inner join ciudad as s
			ON (c.id_ciudad = s.id_ciudad)
			inner join pais as p ON (c.id_pais = p.id_pais)
			inner join tecnico as e ON (c.id_tecnico = t.id_tecnico)";
			
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
			
		public function listado() {
			$this->query = "SELECT * FROM tecnico";
			
			
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
      
			$this->query = "INSERT INTO tecnico(id_tecnico,Nom_tecnico,Ape_tecnico,Cel_tecnico,Email_tecnico) 
                            VALUES (NULL,'$nom_tecnico','$ape_tecnico','$cel_tecnico','$email_tecnico')";
			
			$this->ejecutar_query_simple();


			/*endif;*/
		/*endif;*/
		}
		
		public function editar($datos=array()) {

			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query = "UPDATE tecnico SET Nom_tecnico='$nom_tecnico',Ape_tecnico='$ape_tecnico', 
						     Cel_tecnico='$cel_tecnico',Email_tecnico='$email_tecnico' 
						      WHERE id_tecnico = '$id_tecnico'";
							
			
			$this->ejecutar_query_simple();

		}

		
		public function borrar($id_tecnico='') {

			$this->query = "DELETE FROM tecnico WHERE id_tecnico='$id_tecnico'";
			
			$this->ejecutar_query_simple();
			
		}

		function __destruct() {
			unset($this);
		}
		
	}

 ?>
