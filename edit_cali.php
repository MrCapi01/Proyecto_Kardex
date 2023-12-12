<?php
    session_start();
    include_once('include/dbconn.php');

    if(isset($_POST['Guardar'])){

        $database = new Conection();
        $db = $database->open();

        try{

            $id = $_GET['ID'];
            $calificaciones = $_POST['Calificacion'];

            $sql = "UPDATE notas_estudiantes_materias SET calificaion = '$calificaciones' WHERE Id_Equipo = '$id' ";

            $_SESSION['message'] = ($db->exec($sql)) ? 'Calificación actualizada correctamente' : 'No se actualizo la calificación';

        }catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }

        $database->Close();

    }else{
        $_SESSION['message'] = 'Ingresa la calificación';
    }

    header('location: admin.php');
?>