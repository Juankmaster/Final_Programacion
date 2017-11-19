
<!-- Codigo php que controla el formulario login  -->
<?php
 session_start();

      $cod_empresa= $_POST['cod_empresa'];
      $usuario= $_POST['usuario'];
      $pass= $_POST['clave'];
    
  include "../modelo/Conexion.php";

         $sql="SELECT * FROM `Usuarios` WHERE Nom_Usuario='$usuario' AND clave_usuario=$pass";

         $resultado=$conexion->query($sql)or die($conexion->connect_error);
         
if ($resultado->num_rows > 0) {

   $_SESSION["sesion_user"]=$usuario;
   header("Location:../menuPrincipal.php");
   
      
} else { 

        header("Location:../login.php");
       
}
      

$conexion->close();

           
 ?>


       


      
  
      
  


   

       
         
        

   
   
 
    

   

 
