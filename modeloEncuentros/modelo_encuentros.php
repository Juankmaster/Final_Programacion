<?php 

require_once("../modeloAbstractoBD.php");

class Encuentro extends ModeloAbstractoBD {

		private $id_encuentro;
	    private $id_seleccion;
	    private $fecha_encuentro;
	    private $hora_encuentro;
	    private $estadio;
	    private $rival;
	   
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		
		public function consultar($codigo='') {

			if($codigo!=''):
				$this->query ="SELECT * FROM encuentros WHERE id_encuentro='$codigo'";
				
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
			$this->query= "SELECT c.id_encuentro,c.fecha_encuentro,c.hora_encuentro,c.estadio,
			c.rival,s.Nom_seleccion
			FROM encuentros as c inner join seleccion as s
			ON (c.id_seleccion = s.id_seleccion)";
			
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
				
				
		public function listado() {

			$this->query = "SELECT * FROM encuentros";
			
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
      
			$this->query="INSERT INTO encuentros(    id_encuentro,id_seleccion,fecha_encuentro,hora_encuentro,estadio,rival)
			     VALUES(NULL,'$id_seleccion','$fecha_encuentro','$hora_encuentro','$estadio',
			     	'$rival')";
			
			$this->ejecutar_query_simple();


			  /*endif;*/
			/*endif;*/
		}
			
		public function editar($datos=array()) {

			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query="UPDATE encuentros SET id_seleccion='$id_seleccion',fecha_encuentro='$fecha_encuentro',hora_encuentro='$hora_encuentro',estadio='$estadio',rival='$rival' WHERE id_encuentro='$id_encuentro'";
		                    
							
			$this->ejecutar_query_simple();
			

		}

		public function borrar($id_encuentro='') {

			$this->query="DELETE FROM encuentros WHERE id_encuentro='$id_encuentro'";
			
			$this->ejecutar_query_simple();
			
		}

		function __destruct() {
			unset($this);
		}
		
	}
