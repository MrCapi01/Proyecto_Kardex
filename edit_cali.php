<?php
    session_start();
    include_once('include/dbconn.php');

    if(isset($_POST['Guardar'])){

        $database = new Conection();
        $db = $database->open();

        try{

            $id = $_GET['ID'];
            $nombres = $_POST['Nombres'];

            $sql = "UPDATE equipo SET nombre_Equipo = '$nombres' WHERE Id_Equipo = '$id' ";

            $_SESSION['message'] = ($db->exec($sql)) ? 'Equipo actualizado correctamente' : 'No se actualizo el nombre del equipo';

        }catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }

        $database->Close();

    }else{
        $_SESSION['message'] = 'Ingresa el nombre';
    }

    header('location: admin.php');
?>