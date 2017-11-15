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
				SELECT * FROM usuario WHERE Nom_Usuario='$usuario' AND clave_usuario='$pass'
				";
				$this->obtener_resultados_query();
			endif;
			return $this->rows;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}


		public function consulta($codigo='') {

		}
		public function lista() {
			
		}
		public function listaUsuario() {
			
		}
		
		public function nuevo($datos=array()) {
			
		}
		
		public function editar($datos=array()) {
			
		}
		
		public function borrar($muni_codi='') {
			
		}
		
		function __destruct() {
			unset($this);
		}

		}

		


  	
    


 ?>