<?php

include('../../config/config.php');
include('../../config/Database.php');

class ToolModel
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connectToDatabase();        
    }

    public function getAllItems()
    {
        $query = "SELECT * FROM herramientas";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveTool($name, $quantity,$description,$price_rental)
    {
        try
        {
            $sql =  'INSERT INTO herramientas (nombre_herramienta,cantidad,descripcion,precio_alquiler)';
            $sql .= ' VALUES (:name, :quantity, :description, :rentalprice)';

            $query = $this->connection->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':quantity', $quantity,PDO::PARAM_INT);
            $query->bindValue(':description', $description, PDO::PARAM_STR);  
            $query->bindValue(':rentalprice', $price_rental,PDO::PARAM_STR);            
            
            if($query->execute()){
                echo "Datos insertados correctamente";
            }else{
                echo "Error al insertar datos";
            }
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }


    public function getToolById($id)
    {
        $sql='SELECT * FROM herramientas where id= :id';
        $query = $this->connection->prepare($sql);
        $query->bindValue(':id', $id,PDO::PARAM_INT);
        $query->execute();        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function updateTool($id,$name, $quantity,$description,$price_rental)
    {
        try
        {
            $sql =  'UPDATE herramientas SET nombre_herramienta= :name,cantidad=:quantity, descripcion=:description, precio_alquiler=:rentalprice ';            
            $sql .= ' WHERE id= :id';

            $query = $this->connection->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':quantity', $quantity,PDO::PARAM_INT);
            $query->bindValue(':description', $description, PDO::PARAM_STR);  
            $query->bindValue(':rentalprice', $price_rental,PDO::PARAM_STR); 
            $query->bindValue(':id', $id,PDO::PARAM_INT);           
            
            if($query->execute()){
                echo "Datos actualizados correctamente";
            }else{
                echo "Error al actualizados datos";
            }
        }catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function deleteToolById($id)
    {
        try
        {
            $sql =  'DELETE FROM herramientas WHERE id= :id'; 

            $query = $this->connection->prepare($sql);
            $query->bindValue(':id', $id,PDO::PARAM_INT); 
            
            $del = $query->execute();    
          
            if($query->execute()){
                echo "Herramienta eliminada correctamente";
            }else{
                echo "Error al eliminar herramienta";
            }
        }catch(Exception $e)
        {            
            echo $e->getMessage();
        }
    }
    
}


?>