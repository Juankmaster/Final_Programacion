<?php 
require_once("../modeloAbstractoBD.php");

class Contrato extends ModeloAbstractoBD {
		private $Num_contrato;
		private $id_servicio;
		private $id_proveedor;
		private $id_empresa;
		private $id_empleado;
		private $Duracion_contrato;
		private $Fecha_inicio;
		private $Fecha_fin;
		private $id_ciudad;
		private $Valor;
		private $Forma_pago;
		private $Clausulas;
		
		
		
		function __construct() {
			//$this->db_name = '';
		}
		
		public function consultar($codigo='') {
			if($codigo!=''):
				$this->query = "SELECT * FROM contrato WHERE Num_contrato='$codigo'";
				
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
			

			$this->query ="SELECT c.Num_contrato,c.Duracion_contrato,c.Fecha_inicio,c.Fecha_fin,
			    c.Costo,c.Forma_pago,c.Clausulas,s.Nom_servicio,p.Nom_proveedor,e.Nom_empresa,
			    m.Nom_empleado,n.Nom_ciudad FROM contrato as c inner join servicio as s
			    ON (c.id_servicio = s.id_servicio) 
			    inner join proveedor as p ON (c.id_proveedor = p.id_proveedor)
			    inner join empresa as e ON (c.id_empresa = e.id_empresa)
			    inner join empleado as m ON (c.id_empleado = m.id_empleado)
			    inner join ciudad as n ON (c.id_ciudad = n.id_ciudad)";
			   

			$this->obtener_resultados_query();

			              
			return $this->rows;
			
		}

		public function listado() {

			$this->query = "SELECT *FROM contrato";
			
			
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

			$this->query ="INSERT INTO contrato(Num_contrato,id_servicio,id_proveedor,id_empresa,id_empleado,Duracion_contrato,Fecha_inicio,
			               Fecha_fin,id_ciudad,Costo,Clausulas,Forma_pago)
						   VALUES (NULL,'$id_servicio','$id_proveedor','$id_empresa','$id_empleado','$duracion_contrato',
						   '$fecha_inicio','$fecha_fin','$id_ciudad','$costo','$clausula','$forma_pago')";
							
			
			$this->ejecutar_query_simple();
			
			/*endif;*/
		/*endif;*/
		}
			
			
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;

			$this->query ="UPDATE contrato SET id_servicio='$id_servicio',id_proveedor='$id_proveedor',id_empresa='$id_empresa',
							id_empleado='$id_empleado',Duracion_contrato='$duracion_contrato',Fecha_inicio='$fecha_inicio',
							Fecha_fin='$fecha_fin',id_ciudad='$id_ciudad',Costo='$costo',Clausulas='$clausula',Forma_pago='$forma_pago'
							WHERE Num_contrato ='$num_contrato'";
			
			
			
			$this->ejecutar_query_simple();
		}

		
		public function borrar($num_contrato='') {

			$this->query ="DELETE FROM contrato WHERE Num_contrato = '$num_contrato'";
			
			$this->ejecutar_query_simple();
			
			
		}

		
		function __destruct() {
			unset($this);
		}
	}



 ?>