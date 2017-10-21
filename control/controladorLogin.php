<!-- Codigo php que controla el formulario login -->
<?php
     session_start();

      require_once("../modelo/Conexion.php");

           $empresa=verificar_input($_POST["cod_empresa"]); 
           $usuario=verificar_input( $_POST['usuario']);
           $pass=verificar_input( $_POST['clave']);
           $login_user=new Login();
           $resultado=$login_user->consultar($usuario,$pass);
           $Rol=$resultado[0]["id_rol"];
           $_SESSION["Rol"]=$Rol;
         
      include '../modeloEmpresa/modelo_empresa.php';

           $empre=new Empresa();
           $listado=$empre->consultar_Empresa($empresa);
           $_SESSION["empresa"]=$listado[0]['Nom_empresa'];
       
          $datos= array();
          
        if (!preg_match("/^[0-9]+$/",$empresa)) {
      
           $_SESSION['error1']="Campo Solo Numerico";
         
          $datos[]=true;
        }

           if (!preg_match("/^[0-9a-zA-Z]+$/",$usuario)) {
      
            $_SESSION['error2']="Campo Solo Alfanumerico";
            $datos[]=true;
        }
         

            if (!preg_match("/^[0-9a-zA-Z]+$/",$pass)) {
     	
     		    $_SESSION['error3']="Campo Solo Alfanumerico";
     		    $datos[]=true;
  			}

  			if(count($datos)>0){
 				 header("Location:../login.php"); 
      
  			}else 

         {

  		    if (count($resultado)>0) 
            {

            $_SESSION["sesion_user"]=$usuario;


            header("Location:../menuPrincipal.php");
          /* header("Location:../modeloAcceso/modeloAcceso.php");*/
            
            } 
         
  	     }
            
        
		  function verificar_input($data){

      	$data=trim($data);
      	$data=stripcslashes($data);
      	$data=htmlspecialchars($data);
      	return $data;

        }

         



 ?>


  
          

         

      

        
       
          

          

        




      
   






       


 

      


 
    
            
           


    

       




           


       


      
  
      
  


   

       
         
        

   
   
 
    

   

 
