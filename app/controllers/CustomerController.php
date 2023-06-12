<?php

require_once '../models/CustomerModel.php';

class CustomersController{

    private $model;

    public function __construct($action)
    {        
        $this->model = new CustomerModel();
        $this->validateActions($action);
    }

    public function validateActions($action)
    {
        switch($action)
        {
            case "getAllItems":
                $this->getAllItems();
            break;
            case "saveCustomer":
                $this->saveCustomer();
            break;
            case "getToolById":
                $this->getToolById();
            break;
            case "updateCustomer":
                $this->updateCustomer();
            break;
            case "deleteToolById":
                $this->deleteToolById();
            break;
        }
    }

    //function get all items customers for table
    public function getAllItems()
    {
        $items = $this->model->getAllItems();
        echo json_encode($items);
    }

    //function save data
    public function saveCustomer()
    {
        $name = $_POST["nombres"];
        $lastname = $_POST["apellidos"];
        $email = $_POST["email"];
        $balance = $_POST["saldo"];        
        $items = $this->model->saveCustomer($name, $lastname,$email,$balance);
        echo json_encode($items);
    }

     //function get all items tools for table
     public function getToolById()
     {
         $id = $_GET['id'];
         $items = $this->model->getToolById($id);
         echo json_encode($items);
     }

     public function updateCustomer()
     {      
         $id = $_GET['id'];         
         $name = $_POST['nombres'];         
         $lastname = $_POST["apellidos"];         
         $email = $_POST["email"];
         $balance = $_POST["saldo"];
         $items = $this->model->updateCustomer($id,$name, $lastname,$email,$balance);
         echo json_encode($items);
     }

     public function deleteToolById()
     {
         $id = $_GET['id'];        
         $items = $this->model->deleteToolById($id);
         echo json_encode($items);
     }
     

}


$controller = new CustomersController($_GET['action']);

?>