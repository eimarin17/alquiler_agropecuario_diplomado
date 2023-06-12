<?php

require_once '../models/ContactModel.php';

class ContactController{

    private $model;

    public function __construct($action)
    {        
        $this->model = new ContactModel();
        $this->validateActions($action);
    }

    public function validateActions($action)
    {
        switch($action)
        {
            case "getAllItems":
                $this->getAllItems();
            break;
            case "saveContact":
                $this->saveContact();
            break;
        }
    }

    //function get all items tools for table
    public function getAllItems()
    {
        $items = $this->model->getAllItems();
        echo json_encode($items);
    }

    //function save data
    public function saveContact()
    {
        $name = $_POST["nombre"];
        $email = $_POST["email"];
        $phone = $_POST["telefono"];
        $message = $_POST["mensaje"];        
        $items = $this->model->saveContact($name, $email,$phone,$message);
        echo json_encode($items);
    }     

}


$controller = new ContactController($_GET['action']);

?>