<?php

 // Headers
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

 
include_once '../Models/CRUD.php';


class Post Extends CRUD{

    public function Insert(){
        // check if all data is setted

        if(isset($_GET['Name'],$_GET['Github'],$_GET['Website'],$_GET['Desc'])){

            $result = $this->Insert_item($_GET['Name'],$_GET['Github'],$_GET['Website'],$_GET['Desc']);

            if($result){
                
                echo json_encode(['message' => 'Done']);

            }else{
                
                echo json_encode(['message' => "Can't insert this data"]);
            }
        }else{
                
            echo json_encode(['message' => "you should include all date in the URL (Name/Github/Website/Dec)"]);
        }

    }
}

$d = new Post();
$s = $d->Insert();


