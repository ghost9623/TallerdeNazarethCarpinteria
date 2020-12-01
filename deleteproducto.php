<!DOCTYPE html>
<html>
<head>
	<title>Borrar productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
    <script type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/Las Vicentinas de Chihuahua.ico" />  
</head>

<body>


<center><h1>Borrar productos</h1></center>
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
                
                $sql="call borrarproducto('".$_nombre."')";
                
                if (mysqli_query($conn1,$sql)) 
                {
                     
                    
                      
                }
    
                

            }     
?>

    

</div>

<footer>
<center><p>Las vicentinas de chihuahua 2020 © Todos los Derechos Reservados</p></center>
        

</footer>
</body>