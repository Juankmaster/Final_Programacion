<?php 
// Codigo para realizar el crud del submenu Roles del Menu Ajustes

class Usuarios 
{
	private $id_usuario;
	private $nom_usuario;
	private $id_rol;
	public $res;

	/*function __construct()
	{
		# code...
	}*/
	

	//Funcion para consultar en la base dedatos los usuarios existentes

	private function abrir_conexion()
	{
		
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}
	
	public function consultar_Usuario($valor="")
	{
		if ($valor !="") {
		$sql="SELECT * FROM `usuarios` WHERE id_usuario= $valor";

		$this->abrir_conexion();

		$resul=$this->conexion->query($sql) or die($this->conexion->connect_error);

			$this->res=array();

		if ($resul->num_rows > 0) {

			while ($row=$resul->fetch_assoc()) {

				$this->res[]=$row;
				
			}
                $this->conexion->close();
				    return $this->res;
		}

		}
	}
	//Funcion para consultar en la base dedatos los roles existentes
	
	public function listado_Usuario()
	{
		$this->abrir_conexion();
		
		$sql="SELECT * FROM `usuarios`";


		$resultado=$this->conexion->query($sql) or die($this->conexion->connect_error);

		if ($resultado->num_rows > 0) {

			$row=array();

			while ($fila=$resultado->fetch_assoc()) {

					$row[]=$fila;
			}
			 $this->conexion->close();
				    return $row;
		}
	}
// Funcion para actualizar Usuarios
	public function actualizar_Usuario($datos=array())
	{
	  
		foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$sql ="UPDATE usuarios SET Nom_Usuario='$nom_usuario', Email='$email_usuario',id_rol='$roles' WHERE id_usuario = $id_usuario";

			$this->abrir_conexion();

			$res=$this->conexion->query($sql) ;
			$this->conexion->close();
			
	}
			

	//Funcion para eliminar Usuarios

	public function borrar_Usuario($id_usuario='')	
	{
		
		$sql="DELETE FROM usuarios WHERE id_usuario='$id_usuario'";

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nuevos  Usuarios

	public function nuevo_Usuario($dato=array())
	{
					foreach ($dato as $campo=>$valor):
						$$campo = $valor;
					endforeach;

					$this->abrir_conexion();

					$sql = "INSERT INTO `usuarios`(`id_usuario`,`Nom_Usuario`,`Email`,`clave_usuario`,`id_rol`) VALUES ('','$nom_usuario','$email_usuario','$pass_usuario','$rol_usuario')";
					
					$this->conexion->query($sql);
					$this->conexion->close();
		
	}

					
}

 ?>
					
					

				
			

			

			




			
			
			
		



		
			
     







