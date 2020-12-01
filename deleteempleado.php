<!DOCTYPE html>
<html>
<head>
	<title>Borrar empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
    <script type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/Las Vicentinas de Chihuahua.ico" />  
</head>

<body>


<center><h1>Borrar empleado</h1></center>
<div id="uno">
	
    <center>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           

            <p><label>Nombre : &nbsp</label><input type="text" name="nombre" placeholder="Escribe el nombre del producto" required=""></p>
    		
           
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
                



               



                $conn1=mysqli_connect($hostname,$username,$password,$database);
                $sql1="SELECT * FROM empleado WHERE nombre='$_nombre'";
                $result=mysqli_query($conn1,$sql1);
               
                if($result->num_rows>0){}
                $row=$result->fetch_array(MYSQLI_ASSOC);
    
                $sql2="SELECT * FROM almacen WHERE almacenista='".$row['idempleado']."' ";
                $result=mysqli_query($conn1,$sql2);
               
                if($result->num_rows>0){}
                $row1=$result->fetch_array(MYSQLI_ASSOC);
                
                if($row['idempleado']==$row1['almacenista'])
                {
                    
                    $sql3="call elimalmace('".$row['idempleado']."')";
                     
                    if (mysqli_query($conn1,$sql3)) 
                    {
                         
                        
                          
                    }
                    $sql4="call borrarempleado('".$_nombre."')";
                
                    if (mysqli_query($conn1,$sql4)) 
                    {
                         
                        
                          
                    }
                }
                else
                {
                    $sql5="call borrarempleado('".$_nombre."')";
                
                    if (mysqli_query($conn1,$sql5)) 
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