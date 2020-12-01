<!DOCTYPE html>
<html>
<head>
	<title>Actualizar productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
    <script type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/Las Vicentinas de Chihuahua.ico" />  
</head>

<body>


<center><h1>Actualizar producto</h1></center>
<div id="uno">
	
    <center>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           

            <p><label>Nombre antiguo : &nbsp</label><input type="text" name="nomang" placeholder="Escribe el nombre del producto" required=""></p>
            <p><label>Nombre nuevo : &nbsp</label><input type="text" name="nomnuev" placeholder="Escribe el nombre del producto" required=""></p>
            <p><label>precio : &nbsp</label><input type="text" name="precio" placeholder=" Escriba su edad" min="1" max="100" required=""></p>
            <p><label>cantidad : &nbsp</label><input type="text" name="canti" placeholder=" Escriba su puesto" min="1" max="100" required=""></p>
            
           
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
               
                $_nombre=$_POST['nomang'];
                $_nombrenue=$_POST['nomnuev'];
                $_precio=$_POST['precio'];

                $_cantidad=$_POST['canti'];
                



                $conn1=mysqli_connect($hostname,$username,$password,$database);
                
                $sql="call actuaproducto('".$_nombre."','".$_nombrenue."','".$_precio."','".$_cantidad."')";
                
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
</html>