<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 10px;
        }
        .contenedor-principal{
            background-color: rgba(220, 197, 164, 0.708);
            border-color: black;
            border-style: groove;
            padding: 2%;
        }
    </style>
    <title>Kárdex alumno</title>
</head>

<body style="background-color: rgba(151, 149, 145, 0.708);">
    <header class="py-3">
        <div class="container contenedor-principal" style="display: flex; flex-wrap: wrap; flex-direction: row;">
            
                <div style="flex-basis: 30%;">
                    <img src="./public/images/image.png" style="width: 20vw;" alt="Foto Alumno">
                </div>

                <div style="flex-basis: 70%; ">
                    <h2>Kárdex estudiante</h2>
                    <br>
                    <?php
                        include_once('include/dbconn.php');
                        $database = new Conection();
                        $db = $database->open();

                        try {
                                $sql = 'SELECT * FROM estudiantes where id = 1';
                                foreach ($db->query($sql) as $row) { ?>
                                    <h2><?php echo $row['matricula']?></h2>
                                    <br>
                                    <h2><?php echo $row['nombre']?> <?php echo $row['apellido_p']?> <?php echo $row['apellido_m']?></h2>
                                    <br>
                                    <h3><?php echo $row['carrera']?></h3>
                                    <?php
                                }
                        } catch (PDOException $e) {
                            echo "Error en la conexión" . $e->getMessage();
                        }
                        $database->close();
                    ?>
                    
                </div>
        
        </div>
    </header>
    
    <body>
        <div class="container py-4 contenedor-principal">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Clave</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Calificación</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                        include_once('include/dbconn.php');
                        $database = new Conection();
                        $db = $database->open();

                        try {
                                $sql = 'SELECT * FROM notas_estudiantes_materias where id_estudiante = 1';
                                foreach ($db->query($sql) as $row) { ?>
                                    <tr>
                                        <th><?php echo $row['id_estudiante'] ?></th>
                                        <td><?php echo $row['id_materia']?></td>
                                        <td><?php echo $row['fecha']?></td>
                                        <td><?php echo $row['calificacion']?>
                                    </tr>
                                    
                                    <?php
                                }
                        } catch (PDOException $e) {
                            echo "Error en la conexión" . $e->getMessage();
                        }
                        $database->close();
                    ?>
                </tbody>
            </table>
        </div>

    </body>

</body>

</html>