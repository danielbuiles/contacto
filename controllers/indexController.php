<?php 
    require './models/baseDatos.php';
    require './models/email.php';

    class IndexController extends BaseDatos
    {
        public function __construct(){
            $this->enviarFormulario();
        }

        public function enviarFormulario(){

            if(isset($_POST['btn'])){
                $nombre = $_POST['name'];
                $email = $_POST['email'];
                $enfoque = $_POST['enfoque'];
                $especificaciones = $_POST['especificaciones'];
                $comentario = $_POST['comentario'];
        
                //se llevan los datos a la base de datos
                $consultaSQL="INSERT INTO personas(nombre, email, enfoque, especificaciones, comentario) VALUES ('$nombre','$email','$enfoque','$especificaciones','$comentario')";
                $this->registro($consultaSQL);
        
                //se le envia el email al cliente
                $email=new Email($email);
                $email->enviarEmail();
            }

        }

    }
    
?>