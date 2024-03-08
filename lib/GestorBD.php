<?php

class GestorBD
{
   private $conn;

   public function __construct(Type $var = null) {
    $this->var = $var;
   }

   public function conectar()
   {
      $this->conn= new mysqli("localhost","root","","epastillero");
      if ($this->conn->connect_error!=null)
      {
        return false;
      }
      else
      {
        return true;
      }
    }

    public function getPastillas($codigo)
    {
      $sql= "SELECT * FROM pastillas WHERE codigo=".$codigo;
     // echo $sql;
      
      $data=array();

      $result=$this->conn->query($sql);
      if ($result->num_rows > 0)
      {
          while($row = $result->fetch_assoc())
          {
            $data[]=$row;
          }
      }
      return $data;

    }

    public function validar($codigo)
    {
      $sql= "SELECT * FROM usuarios WHERE codigo='".$codigo."'";
    //echo $sql;
      
      $data=array();

      $result=$this->conn->query($sql);
      if ($result->num_rows > 0)
      {
         return true;
      }
      return false;

    }

    public function insertarPastilla($codigo,$nombre, $duracion, $frecuencia,$tipodepastilla)
    {
      $sql= "INSERT INTO pastillas (codigo, nombre,duracion, frecuencia, tipo,activo) VALUES ('".$codigo."','".$nombre."','".$duracion."','".$frecuencia."','".$tipodepastilla."',1)";
      //echo $sql;
      
      if ($result=$this->conn->query($sql))
      {
         return true;
      }
      return false;

    }
    public function eliminarPastilla($id)
    {
      $sql= "DELETE FROM pastillas WHERE id=".$id;
     // echo $sql;
       
      if ($result=$this->conn->query($sql))
      {
         return true;
      }
      return false;

    }
    

}


?>