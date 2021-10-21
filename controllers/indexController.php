<?php 
    include '../models/baseDatos.php';
    include '../models/email.php';

    if(isset($_POST['btn'])){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $enfoque = $_POST['enfoque'];
        $especificaciones = $_POST['especificaciones'];
        $comentario = $_POST['comentario'];

        //se llevan los datos a la base de datos
        $db =new BaseDatos();
        $consultaSQL="INSERT INTO personas(nombre, email, enfoque, especificaciones, comentario) VALUES ('$nombre','$email','$enfoque','$especificaciones','$comentario')";
        $db->registro($consultaSQL);

        //se le envia el email al cliente
        $email=new Email($email);

        header('Location: ../index.php');
    }
?>