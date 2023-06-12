<?php

include('../../config/config.php');
include('../../config/Database.php');

class RentalModel
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connectToDatabase();        
    }

    public function getAllItems()
    {
        $query = "SELECT * FROM usuarios";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveRental($selectCustomer, $selectTool)
    {
        try
        {
            $sql =  'INSERT INTO alquiler (id,usuario_id,fecha)';
            $sql .= ' VALUES (:selectTool, :selectCustomer, now())';

            $query = $this->connection->prepare($sql);
            $query->bindValue(':selectTool', $selectTool,PDO::PARAM_INT);   
            $query->bindValue(':selectCustomer', $selectCustomer, PDO::PARAM_INT);                   
            
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
        $sql='SELECT * FROM usuarios where id= :id';
        $query = $this->connection->prepare($sql);
        $query->bindValue(':id', $id,PDO::PARAM_INT);
        $query->execute();        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function updateCustomer($id,$name, $lastname,$email,$balance)
    {
        try
        {
            $sql =  'UPDATE usuarios SET nombres= :name,apellidos= :lastname, correo_electronico= :email, saldo=:balance ';            
            $sql .= ' WHERE id= :id';

            $query = $this->connection->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':lastname', $lastname,PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);  
            $query->bindValue(':balance', $balance,PDO::PARAM_STR); 
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
            $sql =  'DELETE FROM usuarios WHERE id= :id'; 

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