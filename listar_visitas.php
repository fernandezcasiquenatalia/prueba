<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body{
            height:100%;
            margin:0;
            padding:0;
            background-color:#000;
            font-family: Arial, Helvetica, sans-serif;
            color:#111;
        }
        .header {
            background-color: #ada536ff;
            color:#fff;
            padding:14px;
            border-radius:8px;
            text-align:center;
            margin:20px auto 10px;
            max-width:720px;
        }
        .contenedor {
            max-width:720px;
            margin:0 auto;
            background-color:#f1f8ff;
            border:1px solid #e79e4bff;
            border-radius:12px;
            padding:20px;
            text-align:center;
            align-items: center;

        }
        .actions {
            display:flex;
            flex-direction:column; 
            gap:10px;
            margin-top:12px;
        }
        .btn {
            background-color: #496e1fff;
            color:#fff;
            text-decoration:none;
            border:none;
            padding:10px 16px;
            border-radius:8px;
            font-size:16px;
            text-align:center;
            display:inline-block;
            width:200px;
        }
    </style>
</head>
<body>
    

    <?php
        $nombre_post = $_POST['Nombre'];
        $comentario_post = $_POST['Comentario'];
        

        $conexion = mysqli_connect("sql100.infinityfree.com","if0_40528505","3g6YVeJHFy","if0_40528505_usuarios");
        
        if(!$conexion){
            echo "Error no se pudo conectar a MySQL.";
            echo "Errno de depuracion: " . mysqli_connect_errno();
            echo "error de depuracion: " . mysqli_connect_error();
            exit;
        }

        $sql = "INSERT INTO visitantes (nombre, comentario) VALUES ('$nombre_post','$comentario_post')";
        if(mysqli_query($conexion, $sql)){
            echo "Registro insertado exitosamente";
        }else{
            echo "Error: no se pudo realizar el registro" , "<br>" , mysqli_error($conexion);
        }
        
    ?>
    
        <div class="header">
            <h1> Tu registro a sido exitoso </h1>
        </div>
        <div class="contenedor">
            <p>Tu registro se procesó.</p>
            <div class="actions">
                <a class="btn" href="listar_visitas.php">Ver registros</a>
                <a class="btn" href="proyecto.html">Regresar al interactivo</a>
            </div>
        </div>

</body>
</html>
