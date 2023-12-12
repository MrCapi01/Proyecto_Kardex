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
    <title>Kárdex</title>
</head>

<body style="background-color: rgba(151, 149, 145, 0.708);">
    <header class="container">
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
    </header>

    <br>

    <body style="padding: 20px;">
        <div class="container py-4 contenedor-principal">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Carrera</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php
                        include_once('include/dbconn.php');
                        $database = new Conection();
                        $db = $database->open();

                        try {
                                $sql = 'SELECT * FROM estudiantes';
                                foreach ($db->query($sql) as $row) { ?>
                                    <tr>
                                        <th><a style="text-decoration: none; color: black;" href="edit.php"><?php echo $row['matricula'] ?></a></th>
                                        <td><?php echo $row['nombre']?> <?php echo $row['apellido_p']?> <?php echo $row['apellido_m']?></td>
                                        <td><?php echo $row['carrera']?></td>
                                        <td><button type="button" class="btn btn-outline-success">
                                        <a href="edit.php" style="text-decoration: none; color: green;">Editar</a></button></td>
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