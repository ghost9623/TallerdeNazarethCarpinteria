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


<center><h1>Registro de producto</h1></center>
<div id="uno">
	
    <center>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           

            <p><label>Nombre : &nbsp</label><input type="text" name="nombre" placeholder="Escribe el nombre del producto" required=""></p>
    		<p><label>Precio : &nbsp</label><input type="text" name="precio" placeholder=" Escriba su edad" min="1" max="100" required=""></p>
            <p><label>cantidad : &nbsp</label><input type="text" name="cantidad" placeholder=" Escriba su edad" min="1" max="100" required=""></p>

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
                $_precio=$_POST['precio'];
                $_cantidad=$_POST['cantidad'];
                



                $conn1=mysqli_connect($hostname,$username,$password,$database);
                
                $sql1="SELECT * FROM producto WHERE nombre='$_nombre'";
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
                    $sql="call inproducto('".$_nombre."','".$_precio."','".$_cantidad."')";
                
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