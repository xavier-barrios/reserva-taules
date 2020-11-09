<?php
class SalaDAO{

    public function __construct(){
    }
    
    public function mostrarSalasMesas(){
        include '../model/connection.php';
        // consulta que mostrara todas las salas
        $query = "SELECT * FROM sala";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $salas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        foreach ($salas as $sala) {
            echo "<tr>";
            $nombre = $sala['nombre'];
            $id = $sala['id_sala'];
            // consulta que contara las mesas ocupadas de la sala
            $query1 = "SELECT COUNT(mesa.id_mesa) AS 'Ocupada' FROM mesa WHERE id_sala = $id AND fecha_inicio IS NOT NULL";
            $sentencia2=$pdo->prepare($query1);
            $sentencia2->execute();
            $mesas=$sentencia2->fetchAll(PDO::FETCH_ASSOC);

            // consulta que contara las mesas libres de la sala
            $query2 = "SELECT COUNT(mesa.id_mesa) AS 'Libre' FROM mesa WHERE id_sala = $id AND fecha_inicio IS NULL";
            $sentencia3=$pdo->prepare($query2);
            $sentencia3->execute();
            $mesas1=$sentencia3->fetchAll(PDO::FETCH_ASSOC);

            // en el href enviara el id de la sala y el nombre para ser recogidos en la siguiente pagina
            echo "<td><a href='./admin_2.php?id_sala={$id}&nombre={$nombre}'>".$nombre."</td>";
                // bucle para mostrar todas las mesas que se encuentran ocupadas, recogiendo el campo de la query que contiene el Count.
               foreach ($mesas as $mesa) {
                    $ocupada = $mesa['Ocupada'];
                    echo "<td style='text-align: center;'>".$ocupada."</td>";
                }
                // bucle para mostrar todas las mesas que se encuentran libres, recogiendo el campo de la query que contiene el Count.
                foreach ($mesas1 as $mesa1) {
                    $libre = $mesa1['Libre'];
                    echo "<td style='text-align: center;'>".$libre."</td>";
                    echo "</tr>";
                }

        }
    }

    public function mostrarSalasMesasMan(){
        include '../model/connection.php';
        // consulta que mostrará todas las salas
        $query = "SELECT * FROM sala";
        $sentencia=$pdo->prepare($query);
        $sentencia->execute();
        $salas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        foreach ($salas as $sala) {
            echo "<tr>";
            $nombre = $sala['nombre'];
            $id = $sala['id_sala'];
            // consulta que contara las mesas ocupadas de la sala
            $query1 = "SELECT COUNT(mesa.id_mesa) AS 'Ocupada' FROM mesa WHERE id_sala = $id AND fecha_inicio IS NOT NULL";
            $sentencia2=$pdo->prepare($query1);
            $sentencia2->execute();
            $mesas=$sentencia2->fetchAll(PDO::FETCH_ASSOC);

            // consulta que contara las mesas libres de la sala
            $query2 = "SELECT COUNT(mesa.id_mesa) AS 'Libre' FROM mesa WHERE id_sala = $id AND fecha_inicio IS NULL";
            $sentencia3=$pdo->prepare($query2);
            $sentencia3->execute();
            $mesas1=$sentencia3->fetchAll(PDO::FETCH_ASSOC);

            echo "<td><a href='./adminMantenimiento2.php?id_sala={$id}&nombre={$nombre}'>".$nombre."</td>";
        }
    }
}
?>