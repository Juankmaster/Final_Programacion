<?php 
// Codigo para realizar el crud de Ciudad del Menu Ajustes

class Ciudad
{
	public $id_ciudad;
	public $nom_ciudad;
	public $id_pais;
	

	/*function __construct()
	{
		# code...
	}*/
	

	//Funcion para abrir la conexion con la base de datos 

	private function abrir_conexion()
	{
		
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}
	
	public function consultar_Ciudad($valor="")
	{
		if ($valor !="") {
			
		$sql="SELECT * FROM `ciudad` WHERE id_ciudad= $valor";

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
	//Funcion para consultar Ciudades existentes
	
	public function listado_Ciudad()
	{
		$this->abrir_conexion();
		
		$sql="SELECT * FROM `ciudad`";


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
// Funcion para actualizar Ciudad

	public function actualizar_Ciudad($datos=array())
	{
	  
	foreach ($datos as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->abrir_conexion();

		     $sql =" UPDATE ciudad SET Nom_ciudad='$nom_ciudad', id_pais='$id_pais' 
		         WHERE id_ciudad = '$id_ciudad'";


		$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
		$this->conexion->close();
		
			
	}
			

	//Funcion para eliminar Ciudad

	public function borrar_Ciudad($id_ciudad='')	
	{
		
		$sql="DELETE FROM ciudad WHERE id_ciudad= '$id_ciudad'" ;

		$this->abrir_conexion();

		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();

	}

	//Funcion para crear nueva Ciudad

	public function nueva_Ciudad($dato=array())
	{
	foreach ($dato as $campo=>$valor):
		$$campo = $valor;
	endforeach;

	$this->abrir_conexion();

    $sql="INSERT INTO `ciudad`(`id_ciudad`,`Nom_ciudad`,`id_pais`)VALUES('','$nom_ciudad','$id_pais')";
	
	$this->conexion->query($sql);
	$this->conexion->close();
		
	}

					
}

 ?>