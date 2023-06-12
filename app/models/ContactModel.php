<?php

include('../../config/config.php');
include('../../config/Database.php');

class ContactModel
{
    private $connection;

    public function __construct()
    {
        $db = new Database();
        $this->connection = $db->connectToDatabase();        
    }

    public function getAllItems()
    {
        $query = "SELECT * FROM contactenos";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveContact($name, $email,$phone,$message)
    {
        try
        {
            $sql =  'INSERT INTO contactenos (nombre,email,telefono,mensaje)';
            $sql .= ' VALUES (:name, :email, :phone, :message)';

            $query = $this->connection->prepare($sql);
            $query->bindValue(':name', $name, PDO::PARAM_STR);
            $query->bindValue(':email', $email,PDO::PARAM_STR);
            $query->bindValue(':phone', $phone, PDO::PARAM_INT);  
            $query->bindValue(':message', $message,PDO::PARAM_STR);            
            
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
    
}


?>