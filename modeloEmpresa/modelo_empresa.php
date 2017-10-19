<?php 
// Codigo para realizar el crud de Empresas del Menu Ajustes

class Empresa
{
	public $id_empresa;
	public $nom_empresa;
	public $dir_empresa;
	public $tel_empresa;
	public $email_empresa;
	

	/*function __construct()
	{
		# code...
	}*/
	

	//Funcion para consultar en la base dedatos las Empresas existentes

	private function abrir_conexion()
	{
		
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}
	
	public function consultar_Empresa($valor="")
	{
		if ($valor !="") {
		$sql="SELECT * FROM `empresa` WHERE id_empresa= $valor";

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
	
	public function listado_Empresa()
	{
		$this->abrir_conexion();
		
		$sql="SELECT * FROM `empresa`";


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

	public function actualizar_Empresa($datos=array())
	{
	  
	foreach ($datos as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->abrir_conexion();

		     $sql =" UPDATE empresa SET Nom_empresa='$nom_empresa', Dir_empresa='$dir_empresa', 
		     Tel_empresa='$tel_empresa', Email_empresa ='$email_empresa', 
		      id_ciudad='$id_ciudad'   WHERE id_empresa = '$id_empresa'";


		$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
		$this->conexion->close();
		
			
	}
			

	//Funcion para eliminar Departamentos

	public function borrar_Empresa($id_empresa='')	
	{
		
		$sql="DELETE FROM empresa WHERE id_empresa='$id_empresa'";

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nuevos  Departamentos

	public function nueva_Empresa($dato=array())
	{
	foreach ($dato as $campo=>$valor):
		$$campo = $valor;
	endforeach;

	$this->abrir_conexion();

    $sql="INSERT INTO `empresa`(`id_empresa`,`Nom_empresa`,`Dir_empresa`,Tel_empresa,Email_empresa,id_ciudad) 
    VALUES ('','$nom_empresa','$dir_empresa','$tel_empresa','$email_empresa','$id_ciudad')";
	
	$this->conexion->query($sql);
	$this->conexion->close();
		
	}

					
}

 ?>