<?php 
// Codigo para realizar el crud del submenu deparatamento del Menu Ajustes

class Departamento
{
	public $id_departamento;
	public $nom_departamento;
	public $id_empresa;
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
	
	public function consultar_Departamento($valor="")
	{
		if ($valor !="") {
		$sql="SELECT * FROM `departamentos` WHERE id_departamento= $valor";

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
	
	public function listado_Departamento()
	{
		$this->abrir_conexion();
		
		$sql="SELECT * FROM `departamentos`";


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
// Funcion para actualizar Departamentos

	public function actualizar_Departamento($datos=array())
	{
	  
	foreach ($datos as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->abrir_conexion();

		$sql =" UPDATE departamentos SET Nom_departamento='$nom_departamento', id_empresa='$id_empresa'  WHERE id_departamento = '$id_departamento'";


		$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
		$this->conexion->close();
		
			
	}
			

	//Funcion para eliminar Departamentos

	public function borrar_Departamento($codigo='')	
	{
		
		$sql="DELETE FROM departamentos WHERE id_departamento='$codigo'";

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nuevos  Departamentos

	public function nuevo_Departamento($dato=array())
	{
	foreach ($dato as $campo=>$valor):
		$$campo = $valor;
	endforeach;

	$this->abrir_conexion();

    $sql = "INSERT INTO `departamentos`(`id_departamento`,`Nom_departamento`,`id_empresa`) VALUES ('','$nom_departamento','$id_empresa')";
	
	$this->conexion->query($sql);
	$this->conexion->close();
		
	}

					
}

 ?>