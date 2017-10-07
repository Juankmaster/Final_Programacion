<?php 
// Codigo para realizar el crud del submenu Roles del Menu Ajustes

class Roles 
{
	public $id_rol;
	public $nom_rol;
	public $des_rol;
	public $res;

	/*function __construct()
	{
		# code...
	}*/
	

	//Funcion para consultar en la base dedatos los roles existentes

	private function abrir_conexion()
	{
		
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}
	
	public function consultar_rol($valor="")
	{
		if ($valor !="") {
		$sql="SELECT * FROM `roles` WHERE id_rol= $valor";

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
	
	public function listado_roles()
	{
		
		$sql="SELECT * FROM `roles`";

		$this->abrir_conexion();

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
// Funcion para actualizar Roles
	public function actualizar_Rol($datos=array())
	{
	  
		foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->abrir_conexion();

			$sql =" UPDATE roles SET Nom_Rol='$nom_rol', Des_Rol='$desc_rol' WHERE id_rol = '$id_rol'";


			$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
			$this->conexion->close();
			
			
	}

	//Funcion para eliminar Roles

	public function borrar_Rol($id_rol='')
	{
		
		$sql="DELETE FROM roles WHERE id_rol='$id_rol' ";

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nuevos  Roles

	public function nuevo_Rol($dato=array())
	{
		

					foreach ($dato as $campo=>$valor):
						$$campo = $valor;
					endforeach;

					$this->abrir_conexion();

					$sql = "INSERT INTO `roles`(`id_rol`, `Nom_Rol`, `Des_Rol`) VALUES ('','$nom_rol','$desc_rol')";
					
					$this->conexion->query($sql)or die($conexion->connect_error);
					$this->conexion->close();
	}
					
}
 ?>
					
					

				
			

			

			




			
			
			
		



		
			
     








 