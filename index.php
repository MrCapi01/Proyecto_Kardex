<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <title>Iniciar sesion</title>
</head>
<body>
    <script src="./public/js/bootstrap.min.js"></script>
    
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
    
                            <div class="mb-md-3 mt-md-4 pb-5">
    
                                <h2 class="fw-bold mb-2 text-uppercase">Iniciar sesion</h2>
                                <p class="text-white-50 mb-5">Por favor ingresa tus datos</p>
    
                                <div class="form-outline form-white mb-4">
                                    <input type="text" id="typeEmailX" class="form-control form-control-lg" placeholder="Matricula"/>
                                    <label class="form-label" for="typeEmailX"></label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Contraseña"/>
                                    <label class="form-label" for="typePasswordX"></label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>
    
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>