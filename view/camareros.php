<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body>
     <?php
        require_once '../model/userDAO.php';
        require_once 'header.html';
        require_once '../controller/sessionController.php';
    ?>
    
    <!--Creamos la tabla en la que se van a mostrar las salas, mesas ocupadas y mesas libres -->
    <main class="main--admin container">
        <div class="container-admin">
            <h2>Camareros</h2>
            <div class="admin--table">
                <table>
                    <thead>
                    <tr>
                        <th>id_usuario</th>
                        <th>Camareros</th>
                    </tr>
                    <?php
                        // Llamamos a la funcion que se encuentra en la SalaDAO, lo que hará que se muestren los datos de la sala.
                            $camarero =  new userDAO();
                            echo $camarero->mostrarCamareo();    
                        ?>
                    </thead>
                        
                </table>
            </div>
        </div>
    </main>
</body>
</html>
