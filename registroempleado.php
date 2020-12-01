<!DOCTYPE html>
<html>
<head>
	<title>Registro de noticia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
    <script type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/Las Vicentinas de Chihuahua.ico" />  
</head>

<body>


<center><h1>Registro de empleado</h1></center>
<div id="uno">
	
    <center>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           

            <p><label>Nombre : &nbsp</label><input type="text" name="nombre" placeholder="Escribe el nombre del producto" required=""></p>
    		<p><label>Edad : &nbsp</label><input type="number" name="edad" placeholder=" Escriba su edad" min="1" max="100" required=""></p>
            <p><label>Puesto : &nbsp</label><input type="text" name="puesto" placeholder=" Escriba su puesto" min="1" max="100" required=""></p>
            <p><label>Numero de empleado : &nbsp</label><input type="text" name="numep" placeholder=" Escriba el numero de empleado" min="1" max="100" required=""></p>
           
            <input type="submit" name="registrar" value="Registrar">
    	   <br>
        </form>
    </center>

    <?php
             if(isset($_POST['registrar'])){
                $hostname='localhost';
                $database='tallerjesus';
                $username='admin';
                $password='root';
               
                $_nombre=$_POST['nombre'];
                $_edad=$_POST['edad'];
                $_puesto=$_POST['puesto'];
                
                $_numep=$_POST['numep'];
                



                $conn1=mysqli_connect($hostname,$username,$password,$database);
                
                $sql1="SELECT * FROM empleado WHERE nombre='$_nombre'";
                $result=mysqli_query($conn1,$sql1);
               
                if($result->num_rows>0){}
                $row=$result->fetch_array(MYSQLI_ASSOC);
    
              
               
                if($result->num_rows>0){}
                $row1=$result->fetch_array(MYSQLI_ASSOC);
                
                if($row['nombre']==$_nombre)
                {
                  
                }
                else
                {
                    $sql="call inempleado('".$_nombre."','".$_edad."','".$_puesto."','".$_numep."')";
                
                   if (mysqli_query($conn1,$sql)) 
                   {
                     
                    
                      
                   }

                    
                }
                

            }     
?>

    

</div>

<footer>
<center><p>Las vicentinas de chihuahua 2020 © Todos los Derechos Reservados</p></center>
        

</footer>
</body>
</html>