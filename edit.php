<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <style>
        
        .contenedor-principal{
            background-color: rgba(220, 197, 164, 0.708);
            border-color: black;
            border-style: groove;
            padding: 2%;
        }
    </style>
    <title>Editar alumno</title>
</head>

<body style="background-color: rgba(151, 149, 145, 0.708);">
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php">Kárdex</a>
                    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">    
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                            <a class="nav-link" href="agregar.php">Nuevo alumno</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Matricula" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    </div>
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

    <br>

    <body class="py-3">

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
                                        <td><input name='Calificacion' type="text" placeholder="<?php echo $row['calificacion']?>">
                                            <button name='Guardar' type="button" class="btn btn-outline-success">Agregar</button>
                                        </td>
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