<?php 
// Codigo para realizar el crud de Pais del Menu Ajustes

class Pais
{
	public $id_pais;
	public $nom_pais;

	/*function __construct()
	{
		# code...
	}*/
	

	//Funcion para abrir la conexion con la base de datos 

	private function abrir_conexion()
	{
		
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}

	//Funcion para consultar Paise en la base de datos 
	
	public function consultar_Pais($valor="")
	{
		if ($valor !="") {
			
		$sql="SELECT * FROM `pais` WHERE id_pais= $valor";

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
	//Funcion para consultar Paises existentes
	
	public function listado_Pais()
	{
		$this->abrir_conexion();
		
		$sql="SELECT * FROM `pais`";
		
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


// Funcion para actualizar Pais

	public function actualizar_Pais($datos=array())
	{
	  
	foreach ($datos as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->abrir_conexion();

		     $sql =" UPDATE pais SET Nom_pais='$nom_pais' 
		         WHERE id_pais = '$id_pais'";


		$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
		$this->conexion->close();
		
			
	}
			

	//Funcion para eliminar Pais

	public function borrar_Pais($id_pais='')	
	{
		
		$sql="DELETE FROM pais WHERE id_pais='$id_pais'";

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nuevo Pais

	public function nuevo_Pais($dato=array())
	{
	foreach ($dato as $campo=>$valor):
		$$campo = $valor;
	endforeach;

	$this->abrir_conexion();

    $sql="INSERT INTO `pais`(`id_pais`,`Nom_pais`)VALUES(NULL,'$nom_pais')";
	
	$this->conexion->query($sql);
	$this->conexion->close();
		
	}

					
}

 ?>