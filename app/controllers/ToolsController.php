<?php

require_once '../models/ToolModel.php';

class ToolsController{

    private $model;

    public function __construct($action)
    {        
        $this->model = new ToolModel();
        $this->validateActions($action);
    }

    public function validateActions($action)
    {
        switch($action)
        {
            case "getAllItems":
                $this->getAllItems();
            break;
            case "saveTool":
                $this->saveTool();
            break;
            case "getToolById":
                $this->getToolById();
            break;
            case "updateTool":
                $this->updateTool();
            break;
            case "deleteToolById":
                $this->deleteToolById();
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
    public function saveTool()
    {
        $nome = $_POST["nombre"];
        $quantity = $_POST["cantidad"];
        $description = $_POST["descripcion"];
        $price_rental = $_POST["precio_alquiler"];        
        $items = $this->model->saveTool($nome, $quantity,$description,$price_rental);
        echo json_encode($items);
    }

     //function get all items tools for table
     public function getToolById()
     {
         $id = $_GET['id'];
         $items = $this->model->getToolById($id);
         echo json_encode($items);
     }

     public function updateTool()
     {      
         $id = $_GET['id'];         
         $nome = $_POST["nombre"];
         $quantity = $_POST["cantidad"];
         $description = $_POST["descripcion"];
         $price_rental = $_POST["precio_alquiler"];        

         $items = $this->model->updateTool($id,$nome, $quantity,$description,$price_rental);
         echo json_encode($items);
     }

     public function deleteToolById()
     {
         $id = $_GET['id'];        
         $items = $this->model->deleteToolById($id);
         echo json_encode($items);
     }
     

}


$controller = new ToolsController($_GET['action']);

?>