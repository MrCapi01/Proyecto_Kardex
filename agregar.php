<!DOCTYPE html>
<html lang="en">
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
    <title>Agregar alumno</title>
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
    <body>
    <div class="container contenedor-principal" style="display: flex; flex-wrap: wrap; flex-direction: row;">
            
            <div style="flex-basis: 30%;">
                <img src="./public/images/image.png" style="width: 20vw;" alt="Foto Alumno">
            </div>

            <div style="flex-basis: 70%; ">
            <div class="container py-4">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" class="padding: 15px">
        
                                <div class="form-group">
                                    <input type="text" placeholder="Nombre" class="form-control" name="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Apellido_P" class="form-control" name="Apellido_P">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Apellido_M" class="form-control" name="Apellido_M">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Grupo" class="form-control" name="Grupo">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Carrera" class="form-control" name="Carrera">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-outline-success">Guardar estudiante</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        </div>
    
    </div>
    </body>
</body>
</html>