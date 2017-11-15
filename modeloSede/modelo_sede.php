<?php 

require_once("../modeloAbstractoBD.php");

class Sede extends ModeloAbstractoBD {

		private $id_sede;
		private $nom_sede;
		private $Ape_sede;
		private $Tel_sede;
		private $Dir_sede;

				
		function __construct() {
			//$this->db_name = '';
		}
				
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "SELECT * FROM sede WHERE id_sede='$codigo'";
				
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
			$this->query = "SELECT c.id_seleccion,c.Nom_seleccion,s.Nom_sede,p.Nom_pais,
			t.Nom_tecnico FROM seleccion as c inner join ciudad as s
			ON (c.id_ciudad = s.id_ciudad)
			inner join pais as p ON (c.id_pais = p.id_pais)
			inner join tecnico as e ON (c.id_tecnico = t.id_tecnico)";
			
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
			
		public function listado() {
			$this->query = "SELECT * FROM sede";
			
			
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
      
			$this->query="INSERT INTO sede(id_sede,Nom_sede,Tel_sede,Dir_sede) 
                            VALUES (NULL,'$nom_sede','$tel_sede','$dir_sede')";
			
			$this->ejecutar_query_simple();


			/*endif;*/
		/*endif;*/
		}
		
		public function editar($datos=array()) {

			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query="UPDATE sede SET Nom_sede='$nom_sede',Tel_sede='$tel_sede',Dir_sede='$dir_sede' 
						    WHERE id_sede='$id_sede'";
						     
							
			
			$this->ejecutar_query_simple();

		}

		
		public function borrar($id_sede='') {

			$this->query = "DELETE FROM sede WHERE id_sede='$id_sede'";
			
			$this->ejecutar_query_simple();
			
		}

		function __destruct() {
			unset($this);
		}
		
	}

 ?>
