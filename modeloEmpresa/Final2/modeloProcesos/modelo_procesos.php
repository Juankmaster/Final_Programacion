<?php
// Codigo para realizar el crud del submenu deparatamento del Menu Ajustes

class Procesos
{
	public $id_proc;
	public $nom_proc;
	public $id_empresa;
	//Funcion para consultar en la base dedatos los usuarios existentes
	private function abrir_conexion()
	{
		$this->conexion=new mysqli("localhost","root","","Control_SoftP");
	}

	public function consultar_Procesos($valor="")
	{
		if ($valor !="") {
		$sql="SELECT * FROM `procesos` WHERE id_proc= $valor";
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

	public function listado_Procesos()
	{
		$this->abrir_conexion();
		$sql="SELECT * FROM `procesos`";
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

	public function actualizar_Procesos($datos=array())
	{

	foreach ($datos as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->abrir_conexion();

		$sql =" UPDATE procesos SET nom_proc='$nom_proc', id_empresa='$id_empresa'  WHERE id_proc = '$id_proc'";
		$this->res=$this->conexion->query($sql) or die($this->conexion->connect_error);
		$this->conexion->close();
	}

	//Funcion para eliminar Departamentos
	public function borrar_Procesos($codigo='')
	{
		$sql="DELETE FROM procesos WHERE id_proc='$codigo'";
		$this->abrir_conexion();
		$this->conexion->query($sql) or die ($this->conexion->connect_error);
		$this->conexion->close();
	}

	//Funcion para crear nuevos  Departamentos
	public function nuevo_Proceso($dato=array())
	{
	foreach ($dato as $campo=>$valor):
		$$campo = $valor;
	endforeach;
	$this->abrir_conexion();
  $sql = "INSERT INTO `procesos`(`id_proc`,`nom_proc`,`id_empresa`)
	VALUES (NULL,'$nom_proc','$id_empresa')";
	$this->conexion->query($sql);
	$this->conexion->close();
	}
}
?>
