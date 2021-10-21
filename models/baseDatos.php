<?php

class BaseDatos
{
    public $user='root';
    public $password="";

    public function Conexion_DB(){
        try 
        {
            $datos='mysql:host=localhost;dbname=contacto';
            $Conexion=new PDO($datos,$this->user,$this->password);
            return $Conexion;
        } 
        catch (PDOException $Error) 
        {
            echo($Error);
        }
    }
    public function registro($ConsultaSQL){
        try 
        {
            $conexion=$this->Conexion_DB();
            $Lanzar=$conexion->prepare($ConsultaSQL);
            $Lanzar->execute();
        } 
        catch (PDOException $Error) 
        {
            echo ($Error);
        }
    }
}

?>