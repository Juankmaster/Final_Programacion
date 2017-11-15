<?php 

require_once("../modeloAbstractoBD.php");

class Seleccion extends ModeloAbstractoBD {

		private $id_seleccion;
		private $nom_seleccion;
		private $id_sede;
		private $id_pais;
		private $id_tecnico;
	   
				
		function __construct() {
			//$this->db_name = '';
		}
				
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query = "SELECT * FROM seleccion WHERE id_seleccion= '$codigo'";
				
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
			$this->query ="SELECT c.id_seleccion,c.Nom_seleccion,s.Nom_sede,p.Nom_pais,
			t.Nom_tecnico,t.Ape_tecnico FROM seleccion as c inner join sede as s
			ON (c.id_sede = s.id_sede)
			inner join pais as p ON (c.id_pais = p.id_pais)
			inner join tecnico as t ON (c.id_tecnico = t.id_tecnico)";
			
			
			$this->obtener_resultados_query();
			return $this->rows;
			
			
			
		}
			
		public function listado() {
			$this->query = "SELECT * FROM seleccion";
			
			
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
      
		$this->query ="INSERT INTO seleccion(                                      id_seleccion,Nom_seleccion,id_sede,id_pais,id_tecnico) 
                            VALUES (NULL,'$nom_seleccion','$id_sede','$id_pais','$id_tecnico')";
			
			$this->ejecutar_query_simple();


			/*endif;*/
		/*endif;*/
		}
		
		public function editar($datos=array()) {

			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

		$this->query ="UPDATE seleccion SET Nom_seleccion='$nom_seleccion',id_sede='$id_sede', 
					   id_pais='$id_pais',id_tecnico='$id_tecnico' 
						        WHERE id_seleccion='$id_seleccion'";
							
			
			$this->ejecutar_query_simple();

		}

		
		public function borrar($id_seleccion='') {

			$this->query = "DELETE FROM seleccion WHERE id_seleccion='$id_seleccion'";
			
			$this->ejecutar_query_simple();
			
		}

		function __destruct() {
			unset($this);
		}
		
	}

 ?>

