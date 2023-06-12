<?php

require_once '../models/RentalModel.php';

class RentalController{

    private $model;

    public function __construct($action)
    {        
        $this->model = new RentalModel();
        $this->validateActions($action);
    }

    public function validateActions($action)
    {
        switch($action)
        {           
            case "saveRental":
                $this->saveRental();
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
    public function saveRental()
    {
        $selectCustomer = $_POST["selectClientes"];
        $selectTool = $_POST["selectTool"];          
        $items = $this->model->saveRental($selectCustomer, $selectTool);
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


$controller = new RentalController($_GET['action']);

?>