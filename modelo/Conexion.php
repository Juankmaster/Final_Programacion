<?php 
require_once("../modeloAbstractoBD.php");


  class Login extends modeloAbstractoBD
  {

        private $usuario;
		private $pass;
		
  	
  	function __construct()
  	{
  		# code...
  	}

public function consultar($usuario='',$pass='') {
			if($usuario!=''):
				$this->query = "
				SELECT * FROM usuarios WHERE Nom_Usuario='$usuario' AND clave_usuario='$pass'
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


		public function consulta($codigo='') {
			if($codigo!=''):
				$this->query = "
				SELECT  id_empleado, Nom_empleado, Ape_empleado, Num_contrato, Sal_empleado, Cargo_empleado
				FROM tb_empleado
				WHERE id_empleado= $codigo
				";
				$this->obtener_resultados_query();
			endif;
			return $this->rows;

		}


		
		public function lista() {
			$this->query = "
			SELECT muni_codi, muni_nomb, m.depa_nomb
			FROM tb_municipio as c inner join tb_departamento as m
			ON (c.depa_codi = m.depa_codi)
			";
			/*$this->query = "
			SELECT comu_codi, comu_nomb, muni_codi
			FROM tb_comuna as c 
			";*/
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listaUsuario() {
			$this->query = "
			SELECT Nom_usuario, muni_nomb
			FROM tb_municipio as m order by muni_nomb
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('muni_codi', $datos)):
				/*$this->consultar($datos['muni_codi']);
				if($datos['muni_codi'] != $this->muni_codi):*/
					foreach ($datos as $campo=>$valor):
						$$campo = $valor;
					endforeach;
					$this->query = "
					INSERT INTO tb_municipio
					(muni_codi, muni_nomb, depa_codi)
					VALUES
					(NULL, '$muni_nomb', '$depa_codi')";
					
					$this->ejecutar_query_simple();
				/*endif;*/
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_municipio
			SET muni_nomb='$muni_nomb',
			depa_codi='$depa_codi'
			WHERE muni_codi = '$muni_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($muni_codi='') {
			$this->query = "
			DELETE FROM tb_municipio
			WHERE muni_codi = '$muni_codi'
			";
			$this->ejecutar_query_simple();
		}
		
		function __destruct() {
			unset($this);
		}
	}


  	
    


 ?>