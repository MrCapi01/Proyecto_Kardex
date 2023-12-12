<?php
    session_start();
    include_once('include/dbconn.php');

    if(isset($_POST['Agregar'])){

        $database = new Conection();
        $db = $database->open();

        try{

            $stmt = $db->prepare('INSERT INTO estudiantes(matricula, nombre, apellido_p, apellido_m, grupo, carrera) 
                VALUES (:Matricula, :Nombre, :Apellido_P, :Apellido_M, :Grupo, :Carrera)');

            $_SESSION['message'] = ($stmt->execute(array(':nombre' => $_POST['nombre']))) ? 'Estudiante guardado correctamente' : 'Algo salio mal';

        }catch(PDOException $e){

            $_SESSION['message'] = $e->getMessage();
            
        }

        $database ->close();

    }else{

        $_SESSION['message'] = 'Favor de rellenar todos los datos';
        
    }

    header('location: admin.php');
?>