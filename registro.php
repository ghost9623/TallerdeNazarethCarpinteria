<!DOCTYPE html>
<html>
<head>
	<title>Registro de avisos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registro.css">
    <script type="text/javascript"></script>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/Las Vicentinas de Chihuahua.ico" />  
</head>

<body>


<center><h1>Registro de avisos</h1></center>
<div id="uno">
	
    <center>
    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           

    		<p><label>Nombre de noticia : &nbsp</label><input type="text" name="nom"  placeholder=" Escriba su nombre" required=""></p>
    		<label for="suge">Detalles de noticias</label>
             <textarea placeholder="Mensaje" name ="sug" required></textarea>
    		<p><label>Embebido : &nbsp</label><input type="url" name="embe" placeholder=" Escriba su alias" required=""></p>
    		<p><label>Categoria : &nbsp</label><input type="number" name="categ" placeholder=" Escriba su edad" min="1" max="100" required=""></p>
            <p><label>Fecha larga : &nbsp</label><input type="text" name="fechl" placeholder="Escribe su contraseña" required=""></p>
            <p><label>Fecha corta : &nbsp</label><input type="date" name="fechc" placeholder="Escribe su contraseña" required=""></p>
            <p><label>Hora : &nbsp</label><input type="time" name="hora" placeholder="Escribe su contraseña" required=""></p>
            <p><label>estado : &nbsp</label><input type="text" name="estado" placeholder="Escribe su contraseña" required=""></p>

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
               
                $_nombre=$_POST['nom'];
                $_sug=$_POST['sug'];
                $_embebido=$_POST['embe'];
                $_categoria=$_POST['categ'];
                $_fechalarga=$_POST['fechl'];
                $_fechacorta=$_POST['fechc'];
                $_hora=$_POST['hora'];
                $_estado=$_POST['estado'];



                $conn1=mysqli_connect($hostname,$username,$password,$database);
                
                $sql="call insertavisos('".$_nombre."','".$_sug."','".$_embebido."','".$_categoria."','".$_fechalarga."','".$_fechacorta."','". $_hora."','".$_estado."')";
                
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