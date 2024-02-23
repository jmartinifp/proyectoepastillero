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

}


?>